<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\promotion;

class PromotionController extends Controller
{
    public function index()
    {

        return view('admin.promotion.index',
            [
                'promotion' => promotion::all(),
            ]
        );
    }
    public function create()
    {
        return view('admin.promotion.create');
    }
    public function insert(Request $request)
    {
        $request -> validate(
            [
                'image' => $request->has('image') ? 'image' : 'request',
            ],
            [
                'image.request' => 'ใส่รูป',
            ]


        );
        if($request->has('image'))
        {
            $fileName = time() . '.' . $request->image->extension();
            $image = $request->image->storeAs('promotion_image', $fileName);
        }else{
            $image = NULL;
        }
        Promotion::create([

            'image' => $image,
            'expiredate' => $request ->expiredate,

        ]);
        return redirect()->route('admin.promotion.index');
    }
    public function edit($promotion_id){
        $pm = Promotion::find($promotion_id);
        return view('admin.promotion.edit',
        [
            'pm' => $pm,
        ]
        );
    }
    public function update(Request $request,$promotion_id){
        $promo = promotion::find($promotion_id);
        $request -> validate(
            [
                'image' => $request->has('image') ? 'image' : 'request',
            ],
            [
                'image.request' => 'ใส่รูป',
            ]


        );
        if($request->has('image'))
        {
            $fileName = time() . '.' . $request->image->extension();
            $image = $request->image->storeAs('promotion_image', $fileName);
            $file_path = storage_path('app/') . $ $promo->image;
            if(file_exists($file_path))
            {
                unlink($file_path);
            }
        }else{
            $image = $promo->image;
        }
        $promo->update([

            'image' => $image,
            'expiredate' => $request ->expiredate,

        ]);
        return redirect()->route('admin.promotion.index');
    }
    public function delete($promotion_id)
    {
        $d = promotion::find($promotion_id);
        $file_path = storage_path('app/') . $d->image;
        if(file_exists($file_path)){
            unlink($file_path);
        }
        $d->delete();
        return redirect()->route('admin.promotion.index');
    }

}
