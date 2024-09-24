@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Edit Teacher</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Teacher</h5>
              
              <form action="{{url('admin/teacher/edit', $getRecord->id)}}" method="post"enctype="multipart/form-data">
              {{ csrf_field()}}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">គោត្តនាម <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="frist_name" class="form-control" required value="{{ $getRecord->frist_name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputext" class="col-sm-2 col-form-label">នាម <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="text" name="last_name" class="form-control" required value="{{ $getRecord->last_name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputext" class="col-sm-2 col-form-label">កម្រិតវប្បធម៌ <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="text" name="degree" class="form-control" required value="{{ $getRecord->degree }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">ភេទ <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-control" require name="gender" >
                      <option selected>select</option>
                      <option {{ ($getRecord->gender == 'Female') ? 'selected' : '' }} value="Female">ស្រី</option>
                      <option {{ ($getRecord->gender == 'Male') ? 'selected' : '' }} value="Male">ប្រុស</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" required value="{{ $getRecord->email }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputext" class="col-sm-2 col-form-label">ឯកទេស <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="text" name="specialty" class="form-control" required value="{{ $getRecord->specialty }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">លេខទូរស័ព្ទ <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                  <input type="text" name="phone" class="form-control" required value="{{ $getRecord->phone }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-control"  require name="status" value="{{ $getRecord->status }}">>
                      <option selected></option>
                      <option {{ ($getRecord->status == 'Full-time') ? 'selected' : '' }} value="Full-time">Full-time</option>
                      <option {{ ($getRecord->status == 'Part-time') ? 'selected' : '' }} value="Part-time">Part-time</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Profile Upload <span style="color: red;">*</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" require name="profile_pic" value="{{ $getRecord->profile_pic }}">
                    @if(!empty($getRecord->profile_pic))
                    <img src="{{ $getRecord->getTeacherImage()}}" height="100px" width="100px;">
                    @endif
                  </div>
                </div>

        

                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">មហាវិទ្យាល័យ <span style="color: red;">*</span></label>
                  <div class="col-sm-10">
                    <select class="form-control"  require name="department_id">
                      <option selected>select</option>
                      @foreach($getdepartment as $value_1)
                      <option {{ ($value_1->id == $getRecord->department_id) ? 'selected' : ''}} value="{{ $value_1->id}}">{{ $value_1->type_name}}</option>
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