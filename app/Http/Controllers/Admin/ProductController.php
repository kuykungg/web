<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use DB;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {

        return view('admin.product.index',
            [
                'products' => Product::all(),
            ]
        );
    }

    public function create()
    {
        return view('admin.product.create',
            [
                'brands' => Brand::all(),
            ]
        );
    }
    public function insert(Request $request)
    {
        // $name = $request->name;
        // $price = $request->price;
        // $brand = $request->brand;
        // $detail = $request->detail;
        // $data=array('name'=>$name,'price'=>$price,'detail'=>$detail);
        // FacadesDB::table('products') ->insert($data);

        $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'brand_id' => 'required',
                'image' => $request->has('image') ? 'image' : 'nullable',
            ],
            [
                'name.required' => 'กรอกชื่อสินค้า',
                'price.required' => 'กรอกราคา',
            ]
        );

        if($request->has('image'))
        {
            $fileName = time() . '.' . $request->image->extension();
            $image = $request->image->storeAs('product_image', $fileName);
        }else{
            $image = NULL;
        }

        Product::create([

            'name' => $request->name,
            'price' => $request->price,
            'brand_id' => $request->brand_id,
            'tool' => $request->tool,
            'size' => $request->size,
            'color' => $request->color,
            'detail' => $request->detail,
            'image' => $image

        ]);


        return redirect()->route('admin.product.index');

    }

   public function edit($product_id)
   {
    $p = Product::find($product_id);
    return view('admin.product.edit',
        [
            'b' => $p,
            'brands' => Brand::all(),
        ]
    );
   }

   public function update(Request $request, $product_id)
   {

    $pro = product::find($product_id);

    $request->validate(
        [
            'name' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'image' => $request->has('image') ? 'image' : 'nullable',
        ],
        [
            'name.required' => 'กรอกชื่อสินค้า',
            'price.required' => 'กรอกราคา',
        ]
    );

    if($request->has('image'))
    {
        $fileName = time() . '.' . $request->image->extension();
        $image = $request->image->storeAs('product_image', $fileName);

        $file_path = storage_path('app/') . $pro->image;

        if(file_exists($file_path))
        {
            unlink($file_path);
        }

    }else{
        $image = $pro->image;
    }

    $pro->update([
        'name' => $request->name,
        'price' => $request->price,
        'brand_id' => $request->brand_id,
        'tool' => $request->tool,
        'size' => $request->size,
        'color' => $request->color,
        'detail' => $request->detail,
        'image' => $image

    ]);


    return redirect()->route('admin.product.index');

   }

   public function delete($product_id)
   {
    $d = Product::find($product_id);
    $file_path = storage_path('app/') . $d->image;

    if(file_exists($file_path))
    {
        unlink($file_path);
    }
    $d->delete();
    return redirect()->route('admin.product.index');
   }

}
