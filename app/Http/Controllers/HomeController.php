<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Products::all();
        $sedang_promo = Products::orderBy('discount', 'DESC')->limit(4)->get();
        $fashion_pria = Products::where('category', 'Fashion Pria')->limit(4)->get();
        $banyak_dicari = Products::orderBy('likes', 'DESC')->limit(4)->get();

        return view('user.home', compact('products','sedang_promo','fashion_pria','banyak_dicari'));
    }

    /**
     * Show the admin application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $products = Products::all();

        return view('admin.adminHome', compact('products'));
    }
    
}
