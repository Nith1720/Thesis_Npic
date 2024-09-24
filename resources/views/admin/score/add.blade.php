@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Add Score</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Score</h5>
              
              <form action="{{url('admin/score/add')}}" method="post"enctype="multipart/form-data">
              {{ csrf_field()}}
            
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Thesis Name<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="thesis_id" required>
                      <option value="">select</option>
                      @foreach($thesis as $value_1)
                      <option value="{{ $value_1->id}}">{{ $value_1->title_en}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Student Nmae<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="student_id" required>
                      <option value="">select</option>
                      @foreach($student as $value_1)
                      <option value="{{ $value_1->id}}">{{ $value_1->frist_name .' '. $value_1->last_name}}</option>
                      @endforeach
                  
                    </select>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputext" class="col-sm-2 col-form-label">Score<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="number" name="score" class="form-control" required value="{{ old('score')}}">
                  </div>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->


            </div>
          </div>

        </div>
      </div>
    </section>



@endsection