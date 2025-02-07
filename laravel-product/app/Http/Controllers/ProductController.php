<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProductController extends Controller {

    public function index(): Factory|View|Application
    {
        return view('products/index', ['products' => Product::all()]);
    }

    public function show(Product $product): Factory|View|Application
    {
        return view('products/show', ['product' => $product]);
    }

    public function create(): Factory|View|Application
    {
        return view('products/create');
    }

    public function store(ProductPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $product = new Product();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
        if ($product->save()) {
            return redirect()->route('products.index');
        }
        return redirect()->back()->withInput()->withErrors($validated);
    }

    public function edit(Product $product): Factory|View|Application
    {
        return view('products/edit', ['product' => $product]);
    }
    public function update(ProductPostRequest $request, Product $product): RedirectResponse
    {
        $validated = $request->validated();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
        if ($product->save()) {
            return redirect()->route('products.index');
        }
        return redirect()->back()->withInput()->withErrors($validated);
    }

    public function destroy(Product $product): RedirectResponse
    {
        if ($product->delete()) {
            return redirect()->route('products.index');
        }
        return redirect()->back();
    }
}

