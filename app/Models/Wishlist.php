<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlist';
    //permissions
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity'
    ];

    /**
     * The product that belongs to the wishlist
     * one wishlist can have many products
     * and one product can belong to many wishlists
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
