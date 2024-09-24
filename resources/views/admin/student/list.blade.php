@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Student List</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{url('admin/student/add') }}" class="btn btn-primary">Add Student</a>
              </h5>


              <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Frist Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Date Of Birth</th>
                  
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Shift</th>
                  <th scope="col">Generation</th>
                  <th scope="col">Department</th>
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
                <td>{{$value->frist_name}}</td>
                <td>{{$value->last_name}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->dob}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->shift}}</td>
                <td>{{$value->type_number->type_number}}</td>
                <td>{{$value->getUserName->type_name}}</td>
                <!-- <td>{{$value->profile_pic}}</td> -->
                <!-- <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                <td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td> -->
              <td>
                <a href="{{url('admin/student/edit/' .$value->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('admin/student/delete/' .$value->id)}}" onclick="return confirm('Are you sure yor want to delete?')" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>

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