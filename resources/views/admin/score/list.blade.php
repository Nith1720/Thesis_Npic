@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Score List</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{url('admin/score/add') }}" class="btn btn-primary">Add Score</a>
              </h5>


              <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Thesis Name Khmer</th>
                  <th scope="col">Thesis Name Englist</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Score</th>
                  <!-- <th scope="col">Create Data</th>
                  <th scope="col">Update Data</th> -->
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
          
              <tr>
                <th scope="row">{{ $value->id}}</th>
                <td>{{$value->thesisname->title_kh}}</td>
                <td>{{$value->thesisname->title_en}}</td>
                <td>{{$value->studentname->frist_name .' '. $value->studentname->last_name}}</td>
                <td>{{$value->score}}</td>
                <!-- <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                <td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td> -->
              <td>
                <a href="{{url('admin/score/edit/' .$value->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('admin/score/delete/' .$value->id)}}" onclick="return confirm('Are you sure yor want to delete?')" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>

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