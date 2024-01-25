<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $p = Product::orderBy('product_id', 'desc')->Paginate(10);
        return view('backend/product/index', compact('p'));
    }

    public function createform()
    {
        $category = Category::all();
        return view('backend/product/createform',compact('category'));
    }

    public function edit($product_id)
    {
        $pro = Product::find($product_id);
        $cat = Category::all();
        return view('backend/product/edit', compact('pro','cat'));
    }

    public function insert(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:255',
                'price' => 'required',
                'description' => 'required',
                'image' => 'mimes:jpg,jpeg,png',
            ],
            [
                'name.required' => 'Please enter a name first',
                'name.max' => 'Max character is 255',
                'price.required' => 'Please enter a price first',
                'description.required' => 'Please enter a description',
                'image' => 'File type can only be jpg,jpeg,png',
            ]
        );

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/product/', $filename);
            Image::make(public_path() . '/backend/product/' . $filename)->resize(500, 450)->save(public_path() . '/backend/product/resize/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'no_image.jpg';
        }
        $product->save();
        alert()->success('Successfully Saved', '🏠✍️💖');
        return redirect('admin/product/index');
    }

    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {

            if ($product->image != 'no_image.jpg') {
                File::delete(public_path() . '/backend/product/' . $product->image);
                File::delete(public_path() . '/backend/product/resize/' . $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/backend/product/', $filename);
            Image::make(public_path() . '/backend/product/' . $filename)->resize(500, 450)->save(public_path() . '/backend/product/resize/' . $filename);
            $product->image = $filename;
        }
        $product->update();
        alert()->success('Successfully Updated', '😱😱😱');
        return redirect('admin/product/index');
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        File::delete(public_path() . '/backend/product/' . $product->image);
        File::delete(public_path() . '/backend/product/resize/' . $product->image);
        $product->delete();
        alert()->success('Successfully Delete', '🗑️🚮👻');
        return redirect('admin/product/index');
    }
}