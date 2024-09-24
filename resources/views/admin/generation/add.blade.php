@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Add Generation</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Generation</h5>
              
              <form action="{{url('admin/generation/add')}}" method="post"enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Generation Number<span style="color: red;">*</span></label>
                  <div class="col-sml-10">
                    <input type="number" name="type_number" class="form-control" required value="{{ old('type_number')}}">
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