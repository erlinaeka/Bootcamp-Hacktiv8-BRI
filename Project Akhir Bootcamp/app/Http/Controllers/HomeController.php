<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product = Products::get();
        $totalProduct = count($product);

        $category = Category::get();
        $totalCategory = count($category);

        $order = Category::get();
        $totalOrder = count($order);

        $data = [
            'totalProduct' => $totalProduct,
            'totalCategory' => $totalCategory,
            'totalOrder' => $totalOrder
        ];
        return view('home', $data);
    }
}
