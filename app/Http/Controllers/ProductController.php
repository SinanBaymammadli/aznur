<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use Image;
use File;
use Purifier;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('id', 'desc')->paginate(12);

      return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($locale, Request $request)
    {
      $request->validate([
        'name' => 'required|unique:products|max:255',
        'description' => 'required',
        'img' => 'required|image'
      ]);

      $product = new Product;
      $product->name = $request->name;
      $product->description = Purifier::clean($request->description);

      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('products/' . $filename);
        Image::make($image)->save($location);

        $product->imgUrl = $filename;
      }

      $product->save();

      return redirect()->route('products.show', [$locale, $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($locale, Product $product)
    {
      $products = Product::orderBy('id', 'desc')->get();

      return view('product.show')
              ->with('product', $product)
              ->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Product $product)
    {
      return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($locale, Request $request, Product $product)
    {
      $request->validate([
        'name' => [
          'required',
          Rule::unique('products')->ignore($product->id),
          'max:255'
        ],
        'description' => 'required',
        'img' => 'image'
      ]);

      $product->name = $request->name;
      $product->description = Purifier::clean($request->description);

      if ($request->hasFile('img')) {
        //delete old image
        $imgUrl = public_path('products/' . $product->imgUrl);
        File::delete($imgUrl);

        // create new image
        $image = $request->file('img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('products/' . $filename);
        Image::make($image)->save($location);

        $product->imgUrl = $filename;
      }

      $product->save();

      return redirect()->route('products.show', [$locale, $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Product $product)
    {
      $imgUrl = public_path('products/' . $product->imgUrl);
      File::delete($imgUrl);
      $product->delete();
      return redirect()->route('products.index', $locale);
    }
}
