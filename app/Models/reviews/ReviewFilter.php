<?php

namespace App\Models\reviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;

// Inheritance whatever Reviewfilter can do Review can do as well in addition to what is coded
class ReviewFilter extends Review
{
    use HasFactory;

    protected $table = 'reviews';

    public function scopeFilterReviews($query, $values)
    {
        // Main Query basically requesting information from users
        $query->with('users')
        // Get the reviews from verified customers that actually purchased the product
        ->verified($values['verified'] ?? 'all')
        // get all ratings specific to the product unless you request something otherwise
        ->withRating($values['rating'] ?? 0)
        // sorting by recent review initially
        ->sortBy($values['sort'] ?? 'recent')
        ;
    }

    public function scopeForProduct($query, $id)
    {
        $query->where('product_id', $id);
    }

    // if not instructed to do so will show all reviews verified and non verified
    public function scopeVerified($query, $verified = 'all')
    {
        if ($verified == 'verified') {
            $query->where('verified', 1);
        }
    }

    // if not instructed to do so will show all ratings 1-5 star etc
    public function scopeWithRating($query, $rating = 0)
    {
        if ($rating) {
            $query->where('rating', $rating);
        }
    }

    public function scopeSortBy($query, $value = 'recent')
    {
        // sort by oldest but by default in decending order/most recent review
        switch ($value) {
            case 'oldest':
                $query->reorder('created_at', 'asc')->get();
                break;

            default:
                $query->reorder('created_at', 'desc')->get();
                break;
        }
    }

    public function scopeAverageOnly($query, $id)
    {
        $average = $query->where('product_id', $id)
        ->where('verified', 1)
        ->avg('rating');

        return round($average, 1);
    }

    public function scopeCalculateRatings($query, $product_id)
    {
        // the rating per reviews
        $ratingCounts = $query
        ->where('product_id', $product_id)
        ->where('verified', 1)
        ->groupBy('rating')
        ->selectRaw('rating, COUNT(*) as count')
        ->pluck('count', 'rating')
        ->all()
        ;
        // This is where the total number of reviews is calculated
        $totalReviews = array_sum($ratingCounts);
        // Each rating is calculated via percentages
        $percentageData = [];
        for ($rating = 1; $rating <= 5; ++$rating) {
            $count = $ratingCounts[$rating] ?? 0;
            $percentage = ($totalReviews > 0) ? ($count / $totalReviews) * 100 : 0;
            $percentageData[$rating] = round($percentage, 2);
        }
        // rating is sorted in descending order (highest Rated)
        krsort($percentageData);

        return $percentageData;
    }

    public function scopeTotalReviews($query)
    {
        return $query->count();
    }
}
