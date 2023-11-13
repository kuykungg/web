@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">edit promotion</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('admin/promotion/update/'.$pm->promotion_id)}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-image">Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-image" value="{{$pm->image}}">
                        <img src="{{ asset($pm->image) }}" class="img-thumbnail mt-2 mb-1" width="128" height="128">
                      </div>
                    </div>
                    <div class="d-none d-print-block d-print-none">{{$datein = date('Y-m-d', strtotime($pm->expiredate))}}</div>

                    <div class="row mb-3">

                        <label class="col-sm-2 col-form-label" for="basic-default-name">expiredate</label>
                        <div class="col-sm-10">
                          <input type="date" name="expiredate" class="form-control" id="basic-default-name " value="{{$datein}}">
                        </div>

                    <div><br></div>
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
