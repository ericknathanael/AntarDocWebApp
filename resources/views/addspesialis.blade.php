@extends('layout.mainLayout')

@section('header')
    @include('layout.navbar')
@endsection

@section('container')
    <div class="container-fluid">
        <div class="row">
            <form action="{{url('/insertSpesialis')}}" method="POST">
                @csrf
                <div class="row mt-3">
                    <h3>Add Spesialis</h3>
                </div>
                <div class="row mt-3">
                    <label for="input">Nama Spesialis</label>
                    <input type="text" class="form-control" id="input" placeholder="Nama Spesialis" name="nama_spesialis">
                </div>
                <div class="row my-3">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
        <div class="row my-3">
            <table class="table table-hover table-responsive" >
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Spesialis</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($spesialis as $sp)
                        <tr>
                            <th>{{$sp->id_spesialis}}</th>
                            <td>{{$sp->nama_spesialis}}</td>
                            <td><a href="{{url('/'.$sp->id_spesialis.'/deleteSpesialis')}}"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('footer')
  @include('layout.footer')
@endsection
