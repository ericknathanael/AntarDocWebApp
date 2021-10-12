@extends('layout.mainLayout')

@section('header')
    @include('layout.navbar')
@endsection

@section('container')
    <h2>Form Doctor</h2>
    <form method="POST" action="/insertDoctor">
        @csrf
        <div class="row g-3">
            <div class="col-6">
                <label for="inputEmail4">Username</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
            </div>
            <div class="col-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            </div>
            <div class="col-12">
            <label for="inputAddress">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" placeholder="Dave Malvin">
            </div>
            <div class="col-12">
            <label for="inputAddress2">Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Jl. Ngagel Jaya Selatan 4 No 27">
            </div>
            <div class="row g-3">
                <div class="col-6">
                    <label for="checkbox">Spesialis</label>
                    <select class="form-control custom-control custom-select mb-3"" id="checkbox" required>
                      <option value="1"> - </option>
                      <option value="2">Jantung </option>
                      <option value="3">Tulang</option>
                      <option value="4">Saraf</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                  </div>
            <div class="col-4">
                <label for="inputState">Provinsi</label>
                <select id="inputState" class="form-control">
                <option selected>Pilih Daerah...</option>
                <option value="Jatim">Jawa Timur</option>
                <option value="Jateng">Jawa Tengah</option>
                <option value="Jabar">Jawa Barat</option>
                </select>
            </div>
            <div class="form-group col-2">
                <label for="nomorTelepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomorTelepon">
            </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px">Register</button>
        </div>

  </form>
@endsection

@section('footer')
  @include('layout.footer')
@endsection
