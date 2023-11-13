@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Create Brand</h5>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{url('admin/brand/insert')}}">
                    @csrf
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                      <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name">
                      </div>
                      @error('name')
                        <span class="text-danger">{{$message}}</span><br/>
                      @enderror
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
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
