<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Owner;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;
        $product->save();



        $category = Category::find([3, 4]);
        $owner = Owner::find(1);

       // $owner->owner()->attach($product);
        //$product->owner()->attach($owner);
        $product->owner()->addBinding($owner);
        $product->categories()->attach($category);

        return 'Success';
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function removeCategory(Product $product)
    {
        $category = Category::find(3);

        $product->categories()->detach($category);

        return 'Success';
    }
}
