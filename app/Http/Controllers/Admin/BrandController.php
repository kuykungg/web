<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::all();
        return view('admin.brand.index' ,compact('brand'));
    }
    public function create(){
        return view('admin.brand.create');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => 'required'
        ],
    [
        'name.required' => 'กรอกชื่อแบรน'
    ]);
    Brand::create([
        'name' => $request->name
    ]);
        return redirect('admin/brand/index');
    }

    public function edit($brand_id){
        $b = Brand::find($brand_id);
        return view('admin.brand.edit',compact('b'));
    }

    public function update(Request $request, $brand_id){
        $b = Brand::find($brand_id);
        $request->validate([
            'name' => 'required'
        ],
    [
        'name.required' => 'กรอกชื่อแบรน'
        ]);
        $b->update([
            'name' => $request->name
        ]);
        return redirect('admin/brand/index');
    }
    public function delete($brand_id){
        $b = Brand::find($brand_id);
        $b->delete();
        return redirect('admin/brand/index');
    }
}
