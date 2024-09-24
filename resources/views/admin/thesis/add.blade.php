@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>បន្ថែមសារណា</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">សារណា</h5>
              
              <form action="{{url('admin/thesis/add')}}" method="post"enctype="multipart/form-data">
              {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">ឈ្មោះខ្មែរ<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="title_kh" class="form-control" required value="{{ old('title_kh')}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputext" class="col-sm-2 col-form-label">ឈ្មោះអង់គ្លេស<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="text" name="title_en" class="form-control" required value="{{ old('title_en')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">ថ្ងៃខែឆ្នាំ</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">មហាវិទ្យាល័យ<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="department_id" required>
                      <option value="">select</option>
                      @foreach($getdepartment as $value_1)
                      <option value="{{ $value_1->id}}">{{ $value_1->type_name}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ឈ្មោះគ្រូ<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="teacher_id" required>
                      <option value="">select</option>
                      @foreach($getteacher as $value_1)
                      <option value="{{ $value_1->id}}">{{ $value_1->frist_name}} {{ $value_1->last_name}}</option>
                      @endforeach
                      
                    </select>
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ជំនាន់<span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-select"   name="generation_id" required>
                      <option value="">select</option>
                      @foreach($generation as $value_1)
                      <option value="{{ $value_1->id}}">{{ $value_1->type_number}}</option>
                      @endforeach
                      
                    </select>
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