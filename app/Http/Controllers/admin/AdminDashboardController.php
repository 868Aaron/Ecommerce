<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $data = $this->getDashboardData();
        return view('admin.dashboard', $data);
    }

   public function printable()
    {
        $data = $this->getDashboardData();
        return view('admin.dashboard-printable', $data);
    }


    private function getDashboardData()
    {
        $topProducts = DB::table('order_products')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->select(
                'products.title',
                DB::raw('SUM(order_products.quantity) as total_quantity'),
                DB::raw('SUM(order_products.price * order_products.quantity) as total_revenue')
            )
            ->groupBy('order_products.product_id', 'products.title')
            ->orderByDesc('total_quantity')
            ->limit(10)
            ->get();

        $totalQuantity = $topProducts->sum('total_quantity');
        $totalRevenueValue = $topProducts->sum('total_revenue');
        $averageQuantity = round($topProducts->avg('total_quantity'), 2);
        $averageRevenue = round($topProducts->avg('total_revenue'), 2);

        $topByQuantity = $topProducts->sortByDesc('total_quantity')->first();
        $topByRevenue = $topProducts->sortByDesc('total_revenue')->first();

        $topCustomers = DB::table('order_products')
            ->join('orders', 'order_products.order_id', '=', 'orders.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select(
                'users.name',
                DB::raw('SUM(order_products.price * order_products.quantity) as total_spent')
            )
            ->groupBy('orders.user_id', 'users.name')
            ->orderByDesc('total_spent')
            ->limit(10)
            ->get();

        $repeatedBuyers = DB::table('order_products')
            ->join('users', 'order_products.user_id', '=', 'users.id')
            ->select(
                'users.name',
                DB::raw('COUNT(DISTINCT order_products.order_id) as orders_count')
            )
            ->groupBy('order_products.user_id', 'users.name')
            ->having('orders_count', '>', 1)
            ->orderByDesc('orders_count')
            ->get();

        return compact(
            'topProducts',
            'totalQuantity',
            'totalRevenueValue',
            'averageQuantity',
            'averageRevenue',
            'topByQuantity',
            'topByRevenue',
            'topCustomers',
            'repeatedBuyers'
        );
    }
}
