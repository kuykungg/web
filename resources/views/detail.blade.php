@extends('layouts.masterfrontend')
@section('content')
@php
$record = App\Models\Brand::find($product->brand_id);
$brand_name = $record->name;
@endphp
<section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">
      <div class="section-title">

      </div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-0">

        <!-- <a href="assets/img/Product/product 1.jpg " class="gallery-lightbox" data-gall="gallery-item"></a> -->

        <div class="col-6">
          <div class="">
              <img src="{{asset($product->image)}} " width="512" height="512" class="img-fluid">
          </div>
        </div>

        <div class="col-5">
          <div class="mx-2 fs-1">
            {{$brand_name}} {{$product->name}}
          </div>
          <div class="mx-2 fs-1">
            Price:{{$product->price}}
          </div>
          <div class="mx-2 fs-1">
            color:{{$product->color}}
          </div>
          <div class="mx-2 fs-1">
            size:{{$product->size}}
          </div>
          <div class="mx-2 fs-1">
            tool in box:{{$product->tool}}
          </div>

        </div>



    </div>
    <div class="mx-2 fs-1">
      {{$product->detail}}
    </div>
@endsection
