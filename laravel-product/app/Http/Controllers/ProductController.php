<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller {
    public ?Product $products;

    public function __construct()
    {
        $this->products = new Product();
    }

    public function index(): Factory|View|Application
    {
        $products = $this->products->getAllProducts();
        return view('products/index', compact('products'));
    }
}
