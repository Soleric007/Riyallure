<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('user.pages.index', compact('products'));
    }
    public function redirect(){
        $products = Product::latest()->paginate(5);
        return view('user.pages.index', compact('products'));
    }
    public function showAboutUs(){
        return view('user.pages.about');
    }
    public function showproductdetails($product)
    {
        $product = Product::find($product);
        return view('user.pages.productdetails', compact('product'));
    }
    public function showShop(){
        $products = Product::paginate(10);
        return view('user.pages.shop', compact('products'));
    }
    public function showFaq(){
        return view('user.pages.faq');
    }
    public function showContact(){
        return view('user.pages.contact');
    }
    public function showWishlist(){
        return view('user.pages.wishlist');
    }
    public function showOrders(){
        $user = Auth::user();
        return view('home.pages.orders',compact('user'));
    }
    public function showAddress(){
        $user = Auth::user();
        return view('home.pages.address',compact('user'));
    }
    public function showAccountdetails(){
        $user = Auth::user();
        return view('home.pages.accountdetails',compact('user'));
    }

    public function showUserAccount(){
        $user = Auth::user();
        return view('home.pages.useraccount', compact('user'));
    }


}
