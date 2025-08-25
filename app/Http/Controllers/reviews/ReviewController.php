<?php

namespace App\Http\Controllers\reviews;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Events\ReviewCreated;
use App\Models\reviews\Review;
use App\Http\Controllers\Controller;
use App\Models\reviews\ReviewFilter;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewFilterRequest;
use Illuminate\Pagination\LengthAwarePaginator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id, ReviewFilterRequest $request)
    {
        // Validate the request
        $validated = $request->validated();

        // Get the product
        $product = Product::findOrFail($product_id);

        // Get filtered and paginated reviews
        $review_data = ReviewFilter::forProduct($product_id)
            ->filterReviews([$validated])
            ->paginate(5);

        // Get average rating
        $average_rating = ReviewFilter::averageOnly($product->id);

        // Get rating breakdown
        $rating_data = ReviewFilter::calculateRatings($product->id);

        // Total number of reviews
        $total_reviews = ReviewFilter::forProduct($product->id)->count();

        // Render the view
        return view('pages.additional.reviews.reviews-show-all', compact(
            'product',
            'review_data',
            'average_rating',
            'rating_data',
            'total_reviews'
        ));
    }

    /**
     * Check if user purchased the product.
     */
    private function hasUserPurchasedProduct($user_id, $product_id)
    {
        return DB::table('order_products')
            ->join('orders', 'orders.id', '=', 'order_products.order_id')
            ->where('orders.user_id', $user_id)
            ->where('order_products.product_id', $product_id)
            ->exists();
    }

    /**
     * Show the form for creating a new review.
     */
    public function create($product_id)
    {
        $review = Review::where('product_id', $product_id)
            ->where('user_id', Auth::id())
            ->latest()
            ->first();

        if ($review) {
            return redirect()->route('reviews.edit', ['review' => $review->id])
                ->with('message', 'You have already written a review for this product');
        }

        return view('pages.additional.reviews.reviews-write', compact('product_id'));
    }

    /**
     * Store a newly created review.
     */
    public function store(Request $request, $product_id)
    {
        $review = new Review();
        $review->user_id = Auth::id();
        $review->product_id = $product_id;
        $review->rating = $request->input('rating');
        $review->title = $request->input('title');
        $review->description = $request->input('description');
        $review->verified = $this->hasUserPurchasedProduct(Auth::id(), $product_id) ? 1 : 0;
        $review->save();

        ReviewCreated::dispatch($review);

        return redirect()->route('shop.details', ['id' => $product_id])
            ->with('message', 'Review created successfully');
    }

    /**
     * Show the form for editing a review.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);
        return view('pages.additional.reviews.reviews-edit', compact('review'));
    }

    /**
     * Update the specified review.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
        $review->user_id = Auth::id();
        $review->rating = $request->input('rating');
        $review->title = $request->input('title');
        $review->description = $request->input('description');
        $review->save();

        ReviewCreated::dispatch($review);

        return redirect()->route('shop.details', ['id' => $review->product_id])
            ->with('message', 'Review updated successfully');
    }

    /**
     * Remove the specified review (not implemented).
     */
    public function destroy(string $id)
    {
        // TODO: implement if needed
    }
}
