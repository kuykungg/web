@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <a href="{{url('admin/product/create')}}" class="btn btn-success">+ create</a>
        <div class="card mt-4">
            <h5 class="card-header">Products</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>size</th>
                            <th>color</th>
                            <th>tool</th>
                            <th>detail</th>
                            <th>brand</th>
                            <th>image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @if (!$products->isEmpty())
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        {{ $product->product_id }}
                                    </td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                    <td>{{$product ->size}}</td>
                                    <td>{{$product ->color}}</td>
                                    <td>{{$product ->tool}}</td>
                                    <td>{{$product->detail}}</td>
                                    <td>{{$product->brand_id}}</td>
                                    <td><a href="{{ asset($product->image) }}">
                                        ดูรูป
                                    </a></td>
                                    <td>
                                        <a href="{{url('admin/product/edit/'.$product->product_id)}}" class="btn btn-warning">edit</a>
                                        <a href="{{url('admin/product/delete/'.$product->product_id)}}" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center text-danger" >
                                    ไม่พบข้อมูล
                                </td>
                            </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
