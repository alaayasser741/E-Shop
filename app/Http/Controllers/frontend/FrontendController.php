<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_product=Product::where('trending','1')->take(15)->get();
        return view('frontend.index',compact('featured_product'));
    }
}
