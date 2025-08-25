<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Reviews\ReviewFilter;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index($id)
    {
        // Determine user group IDs (default to [1] for guests)
        $groupIds = Auth::check() ? Auth::user()->getGroups() : [1];

        // Fetch product data with prices
        $data = Product::singleProduct($id)
            ->withPrices()
            ->first();

        if (!$data) {
            abort(404);
        }

        $product = $data;

        // Fetch reviews for the product
        $reviewData = ReviewFilter::forProduct($id)
            ->filterReviews([])
            ->limit(4)
            ->get();

        // Calculate average rating
        $averageRating = ReviewFilter::averageOnly($product->id);

        // Calculate rating breakdown percentages
        $ratingData = ReviewFilter::calculateRatings($product->id);

        // Count total reviews
        $totalReviews = ReviewFilter::forProduct($product->id)->count();

        // Return view with product and review data
        return view('pages.default.detailspage', [
    'data'            => $data,
    'review_data'     => $reviewData,
    'average_rating'  => $averageRating,
    'rating_data'     => $ratingData,
    'total_reviews'   => $totalReviews,
]);

    }
}
