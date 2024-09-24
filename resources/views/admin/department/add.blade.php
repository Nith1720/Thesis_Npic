@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Add Department</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Department</h5>
              
              <form action="{{url('admin/department/add')}}" method="post"enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name<span style="color: red;">*</span></label>
                  <div class="col-sml-10">
                    <input type="text" name="type_name" class="form-control" required value="{{ old('type_name')}}">
                  </div>

                  <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description<span style="color: red;">*</span></label>
                  <div class="col-sml-10">
                    <textarea type="text" name="description" class="form-control" required value="{{ old('description')}}"></textarea>
                  </div>

                  <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sml-10">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                  </div>


                </div>
              </form>


            </div>
          </div>

        </div>
      </div>
    </section>



@endsection