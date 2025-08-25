<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use App\Events\ReviewCreated;
use App\Models\reviews\Review;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create x users
        User::factory(40)->create();

        // Create x products
        Product::factory(12)->create();

        // Get all user and product ids
        $user_ids = User::pluck('id')->toArray();
        $product_ids = Product::pluck('id')->toArray();

        // Random orders
        Order::factory(30)
            ->randomUsers($user_ids)
            ->create()
            ->each(function ($order) use ($product_ids) {
                OrderProduct::factory(random_int(1, 3))
                    ->randomProducts($product_ids)
                    ->create([
                        'order_id'   => $order->id,
                        'user_id'    => $order->user_id,
                        'created_at' => $order->created_at,
                    ]);
            });

        // Random orders for specific user (user_id = 1)
        Order::factory(1)
            ->randomUsers([1])
            ->create()
            ->each(function ($order) use ($product_ids) {
                OrderProduct::factory(random_int(1, 3))
                    ->randomProducts($product_ids)
                    ->create([
                        'order_id'   => $order->id,
                        'user_id'    => $order->user_id,
                        'created_at' => $order->created_at,
                    ]);
            });
            // Random reviews by random users
        Review::factory(30)
            ->randomUsers($user_ids)
            ->randomProducts($product_ids)
            ->state(function () {
                return [
                    'verified' => rand(0, 1),
                ];
            })
            ->create()
            ->each(function ($review) {
                ReviewCreated::dispatch($review);
            });
        // All purchased products get good reviews
        $order_data = OrderProduct::all();
        $order_data->each(function ($order) {
            $review = Review::factory()
                ->goodRatings()
                ->create([
                    'user_id' => $order->user_id,
                    'product_id' => $order->product_id,
                    'verified' => true,
                ]);
            ReviewCreated::dispatch($review);
        });
    }
}
