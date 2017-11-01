<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
    $products = Product::orderBy('id', 'desc')->get();

    return view('welcome')->with('products', $products);
  }
}
