@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Detail</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><a>Detail</a></h5>


<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <div class="row mb-3">
                  <div class="col-sm-10">
                    @if(!empty($getRecord->profile_pic))
                    <img src="{{ $getRecord->getTeacherImage()}}" height="100px" width="100px;">
                    @endif
                  </div>
                </div>
          <h2>{{ $getRecord->frist_name }} {{ $getRecord->last_name }}</h2>
          <h3>{{ $getRecord->specialty }}</h3>
          <div class="social-links mt-2">

            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="telegram"><i class="bi bi-telegram"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>
          </ul>
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
             

              <h5 class="card-title">Teacher Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">គោត្តនាម</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->frist_name }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">នាម</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->last_name }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">ភេទ</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->gender }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->email }}</div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 label">ឯកទេស</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->specialty }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">លេខទូរស័ព្ទ</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->phone }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Status</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->status }}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">មហាវិទ្យាល័យ</div>
                <div class="col-lg-9 col-md-8">
                {{$getRecord->getUserName->type_name}}
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">កម្រិតវប្បធម៌</div>
                <div class="col-lg-9 col-md-8">{{ $getRecord->degree }}</div>
              </div>
          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection