<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\promotion;
use DB;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\frontend\FrontControllerz;

class FrontController extends Controller
{
    public function Index()
    {
        $min_promotion_id = promotion::min('promotion_id');
        $product = DB::table('products')->select('product_id', 'name', 'price', 'detail','color','size','tool', 'image', 'brand_id')->orderby('viewcount', 'desc')->get();
        $promotion = DB::table('promotions')->select('promotion_id', 'image')->get();
        $brand = DB::table('brands')->select('brand_id', 'name')->get();
        return view('index')->with([
            'product' => $product,
            'brand' => $brand,
            'promotion' => $promotion,
            'min_promotion_id' => $min_promotion_id
        ]);
    }
    public function productpage(Request $sortby)
    {
        $sor =$sortby->sortby;
        if ($sortby->isMethod('get')) {
            $sor =1;
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
            return view('product')->with([
                'product' => $product,
                'brand' => $brand,
                'sortby' => $sor
            ]);
        }elseif ($sortby->isMethod('post')) {
        if($sor == "1")
        {

            $sortb =1;
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->orderBy('viewcount', 'desc')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();

        }elseif($sor == "2")
        {
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->orderBy('name', 'asc')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
        }elseif($sor == "3"){
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->orderBy('name', 'desc')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
        }elseif($sor == "4"){
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->orderBy('created_at', 'asc')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
        }elseif($sor == "5"){
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->orderBy('created_at', 'desc')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
        }else{
            $product = DB::table('products')->select('product_id', 'name', 'price', 'detail', 'image', 'brand_id' ,'viewcount')->get();
            $brand = DB::table('brands')->select('brand_id', 'name')->get();
        }
        return view('product')->with([
            'product' => $product,
            'brand' => $brand,
            'sortby' => $sor
        ]);
    }
    }
    public function detail($product_id)
    {
        $de = Product::find($product_id);
        $pop = $de->viewcount;
        $popu = $pop+1;
        $de->update([
            'viewcount' => $popu
        ]);
        return view('detail')->with([
            'product' => $de,
            'brand' => Brand::all(),
        ]);
    }
}
