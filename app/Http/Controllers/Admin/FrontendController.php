<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

   

   
}
