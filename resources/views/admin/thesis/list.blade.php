@extends('admin.layouts.app')
@section('content')
<div class="pagetitle">
      <h1>បញ្ជីឈ្មោះសារណា</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{url('admin/thesis/add') }}" class="btn btn-primary">បន្ថែមសារណា</a>
              </h5>

              <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ឈ្មោះខ្មែរ</th>
                  <th scope="col">ឈ្មោះអង់គ្លេស</th>
                  <th scope="col">ថ្ងៃខែឆ្នាំ</th>
                  <th scope="col">ឈ្មោះគ្រូ</th>
                  <th scope="col">ជំនាន់</th>
                  <th scope="col">មហាវិទ្យាល័យ</th>
                  <!-- <th scope="col">Photo</th> -->
                  <!-- <th scope="col">Create Data</th>
                  <th scope="col">Update Data</th> -->
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
          
              <tr>
                <th scope="row">{{ $value->id}}</th>
                <td>{{$value->title_kh}}</td>
                <td>{{$value->title_en}}</td>
                <td>{{$value->date}}</td>
                <td>{{$value->fistname->frist_name .' '. $value->fistname->last_name}}</td>
                <td>{{$value->type_number->type_number}}</td>
                <td>{{$value->getUserName->type_name}}</td>
                <!-- <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                <td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td> -->
              <td>
                <a href="{{url('admin/thesis/edit/' .$value->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('admin/thesis/delete/' .$value->id)}}" onclick="return confirm('Are you sure yor want to delete?')" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>

                </td>
              </tr>

              @endforeach
              </tbody>
            </table>

            </div>
          </div>

        </div>
      </div>
    </section>




@endsection