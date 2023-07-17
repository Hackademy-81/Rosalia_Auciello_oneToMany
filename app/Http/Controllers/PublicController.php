<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('welcome');
    }
    public function welcome() {
        $products= Product::all()->sortDesc(); 
        return view('welcome', compact('products'));
    } 
}
