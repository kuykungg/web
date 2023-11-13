@extends('layouts.master_backend')
@section('conti')
    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="mb-0">Create Promotion</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('admin/promotion/insert')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          @error('image')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                            <label class="col-sm-2 col-form-label" for="basic-default-image">Image</label>
                            <div class="col-sm-10">
                              <input type="file" name="image" class="form-control" id="basic-default-image">
                    
                            </div>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                          </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">expiredate</label>
                        <div class="col-sm-10">
                          <input type="date" name="expiredate" class="form-control" id="basic-default-name">
                        </div>
                      <div>
                        <br>
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
