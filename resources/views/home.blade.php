@extends('layout.mainLayout')

@section('header')
    @include('layout.navbar')
@endsection

@section('container')
<h1 style="">List Doktor</h1>
<table class="table table-hover table-responsive" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Name</th>
        <th scope="col">Spesialis</th>
        <th scope="col">Experience</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($doctor as $dokter)
            <tr>
                <th>{{$dokter->doctor_id}}</th>
                <td>{{$dokter->users->user_username}}</td>
                <td>Dr. {{$dokter->users->user_nama_lengkap}}</td>
                <td>{{$dokter->doctor_specialist}}</td>
                <td>{{$dokter->doctor_experience}} tahun</td>
                <td><a href=""><button class="btn btn-warning">Edit</button></a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
