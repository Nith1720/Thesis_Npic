@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Department List</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{url('admin/department/add') }}" class="btn btn-primary">Add Department</a>
              </h5>

              <!-- getRecord -->
              <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Create Data</th>
                  <th scope="col">Update Data</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
          
              <tr>
                <th scope="row">{{ $value->id}}</th>
                <td>{{$value->type_name}}</td>
                <td>{{$value->description}}</td>
                <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                <td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td>
              <td>
                <a href="{{url('admin/department/edit/' .$value->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('admin/department/delete/' .$value->id)}}" onclick="return confirm('Are you sure yor want to delete?')" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>

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