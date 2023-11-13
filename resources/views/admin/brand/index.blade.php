@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <a href="{{url('admin/brand/create')}}" class="btn btn-success">+ create</a>
        <div class="card mt-4">
            <h5 class="card-header">Brand</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @if (!$brand->isEmpty())


                        @foreach ($brand as $b)
                        <tr>
                            <td>{{$b->brand_id}}</td>
                            <td>{{$b->name}}</td>
                            <td>{{$b->created_at}}</td>
                            <td>{{$b->updated_at}}</td>
                            <td>
                                <a href="{{url('admin/brand/edit/'.$b->brand_id)}}" class="btn btn-warning">edit</a>
                                <a href="{{url('admin/brand/delete/'.$b->brand_id)}}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center text-danger" >
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
