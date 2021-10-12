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
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><a class="btn btn-primary" href="/edit">Edit</a></td>
        <td><a class="btn btn-danger" href="/delete/1">Delete</a></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td><a class="btn btn-primary" href="/edit">Edit</a></td>
        <td><a class="btn btn-danger" href="/delete/1">Delete</a></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td><a class="btn btn-primary" href="/edit">Edit</a></td>
        <td><a class="btn btn-danger" href="/delete/1">Delete</a></td>
      </tr> --}}
    </tbody>
  </table>
@endsection

@section('footer')
    @include('layout.footer')
@endsection
