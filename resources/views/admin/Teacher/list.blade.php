@extends('admin.layouts.app')
@section('content')

<div class="pagetitle">
      <h1>Teacher List</h1>
      <div class="pagetitle">
  
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
        @include('_message')
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="{{url('admin/teacher/add') }}" class="btn btn-primary">បន្ថែមគ្រូ</a>
              </h5>


               <!-- getRecord -->
               <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">គោត្តនាម</th>
                  <th scope="col">នាម</th>
                  <th scope="col">ភេទ</th>
                  <th scope="col">Email</th>
                  <th scope="col">ឯកទេស</th>
                  <th scope="col">លេខទូរស័ព្ទ</th>
                  <th scope="col">មហាវិទ្យាល័យ</th>
                  <th scope="col">កម្រិតវប្បធម៌</th>
                  <th scope="col">Status</th>
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
                <td>{{$value->email}}</td>
                <td>{{$value->specialty}}</td>
                <td>{{$value->phone}}</td>
              
                <td>{{$value->getUserName->type_name}}</td>
                <td>{{$value->degree}}</td>
                <td>{{$value->status}}</td>
                <!-- <td>{{$value->profile_pic}}</td> -->
                <!-- <td>{{ date('d-m-y', strtotime($value->created_at)) }}</td>
                <td>{{ date('d-m-y', strtotime($value->updated_at)) }}</td> -->
              <td>
              <a href="{{url('admin/teacher/show/' .$value->id)}}" class="btn btn-warning"><i class="bi bi-eye"></i></a>
                <a href="{{url('admin/teacher/edit/' .$value->id)}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="{{url('admin/teacher/delete/' .$value->id)}}" onclick="return confirm('Are you sure yor want to delete?')" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>

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