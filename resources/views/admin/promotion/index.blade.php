@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <a href="{{url('admin/promotion/create')}}" class="btn btn-success">+ create</a>
        <div class="card mt-4">
            <h5 class="card-header">Promotion</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>image</th>
                            <th>expiredate</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    {{-- <tbody class="table-border-bottom-0">
                        <td>.</td>
                        <td>ดูรูป</td>
                        <td>1/1/2025</td>
                        <td><a href="/" class="btn btn-warning">edit</a>
                            <a href="/" class="btn btn-danger">delete</a></td>
                    </tbody> --}}
                    @if (!$promotion->isEmpty())
                    @foreach ($promotion as $promotion)
                        <tr>
                            <td>
                                {{ $promotion->promotion_id }}
                            </td>
                            <td>
                                <a href="{{ asset($promotion->image) }}">
                                    ดูรูป
                                </a>
                            </td>
                            <td>
                                {{$promotion->expiredate}}
                            </td>
                            <td>
                                <a href="{{url('admin/promotion/edit/'.$promotion->promotion_id)}}" class="btn btn-warning">edit</a>
                                <a href="{{url('admin/promotion/delete/'.$promotion->promotion_id)}}" class="btn btn-danger">delete</a>
                            </td>
                            <td>
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
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
