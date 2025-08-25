<?php

namespace App\Http\Controllers;

use app\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class WishlistController extends Controller
{
    /**
     * Index function loads all the products user placed into the cart,
     *  checks to see if cart is empty
     */
    public function index()
    {
        //checks if user is logged inn and groups belong to
        $group_ids = Auth::check() ? Auth::user()->getGroups() : [1];

        $user = Auth::user();

          $wish_data = Wishlist::where('user_id', Auth::id(), 'product_id')
            ->with(['product' => function ($query) {
                $query->withPrices();
            }])->get();
        // dd($wish_data);
        //if there are no products in the wishlist, return empty view
        if ($wish_data->isEmpty()) {
            return view('pages.default.wishlist-view-products', compact('wish_data', 'group_ids'));
        }


        return view('pages.default.wishlist-view-products', compact('wish_data',  'group_ids'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Wishlist::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->product_id],
            //looks the quantity of items in cart and adds 1
            ['quantity' => DB::raw('quantity + ' . $request->quantity), 'updated_at' => now()]
        );

        // redirect user to the wishlist page
        return redirect()->route('wishlist.index')->with('message', 'Product added to wishlist');
    }


    /**
     * Remove the specified item from cart and returns cart index.
     */
    public function destroy(string $id)
    {
        Wishlist::destroy($id);

        return redirect()->route('wishlist.index')->with('message', 'Product removed from wishlist');
    }

    public function addToCartFromWishlist(Request $request)
    {
        Wishlist::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $request->id],
            ['quantity' => DB::raw('quantity + ' . 1), 'updated_at' => now()]
        );

        // redirect user to the cart page
        return redirect()->route('wishlist.index')->with('message', 'Product added to wishlist');
    }
}
