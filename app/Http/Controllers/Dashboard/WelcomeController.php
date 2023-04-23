<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories_count = Category::count();
        $products_count = Product::count();
        $clients_count = Client::count();
        $users_count = User::whereRoleIs('admin')->count();

        $sales_data= Order::select(
            DB::raw('YEAR(created_at) AS year'),
            DB::raw('MONTH(created_at) AS month'),
            DB::raw('SUM(total_price) AS total_price'),
        )->groupBy('month')->get();

        // dd($sales_data);

        return view('dashboard.welcome', compact('categories_count', 'products_count', 'clients_count', 'users_count','sales_data'));
    }
}
