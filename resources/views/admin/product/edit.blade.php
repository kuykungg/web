@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">edit Products</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('admin/product/update/'.$b->product_id)}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name" value="{{$b->name}}">
                      </div>
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-price">Price</label>
                      <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="basic-default-price" value="{{$b->price}}">
                      </div>
                      @error('price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-price">Brand</label>

                      <div class="col-sm-10">
                        <select id="largeSelect" name="brand_id" class="form-select form-select-lg" value="{{$b->brand_id}}">
                            @if (empty($b->brand_id))
                                <option value="" selected>เลือกแบรน</option>
                            @endif

                            @foreach ($brands as $brand)
                                <option value="{{ $brand->brand_id }}" {{ $b->brand_id == $brand->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                            @endforeach

                        </select>
                      </div>
                      @error('brand_id')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-detail">size</label>
                        <div class="col-sm-10">
                          <input type="text" name="size" class="form-control" id="basic-default-detail" value="{{$b->size}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-detail">color</label>
                        <div class="col-sm-10">
                          <input type="text" name="color" class="form-control" id="basic-default-detail" value="{{$b->color}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-detail">tool</label>
                        <div class="col-sm-10">
                          <input type="text" name="tool" class="form-control" id="basic-default-detail" value="{{$b->tool}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-detail">Detail</label>
                      <div class="col-sm-10">
                        <input type="text" name="detail" class="form-control" id="basic-default-detail" value="{{$b->detail}}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-image">Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-image" value="{{$b->image}}">
                        <img src="{{ asset($b->image) }}" class="img-thumbnail mt-2 mb-1" width="128" height="128">
                      </div>
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Basic with Icons -->

          </div>
    </div>
@endsection
