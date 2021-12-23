@extends('layout.mainLayout')

@section('header')
    @include('layout.navbar')
@endsection

@section('container')
    <h2>Form Doctor</h2>
    <form method="POST" action="/insertDoctor">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="inputEmail4">Username</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
            </div>
        </div>
        <div class="col-12">
            <label for="inputAddress">Nama Lengkap</label>
            <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="nama_lengkap">
        </div>
        <div class="col-12">
            <label for="inputAddress">Email Address</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email_address">
        </div>
        <div class="row g-3">
            <div class="col-8">
                <label for="inputAddress2">Work Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Address" name="Address">
            </div>
            <div class="col-4">
                <label for="inputState">Provinsi</label>
                <select id="inputState" class="form-control" name="inputState">
                <option value="-" selected>Pilih Daerah...</option>
                <option value="Jatim">Jawa Timur</option>
                <option value="Jateng">Jawa Tengah</option>
                <option value="Jabar">Jawa Barat</option>
                </select>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-6">
                <label for="checkbox">Spesialis</label>
                <select name="inputspesialis" class="form-control custom-control custom-select mb-3"" id="checkbox" required>
                  <option value="1"> - </option>
                  <option value="Jantung">Jantung </option>
                  <option value="Tulang">Tulang</option>
                  <option value="Saraf">Saraf</option>
                </select>
                <div class="invalid-feedback">Example invalid custom select feedback</div>
            </div>

            <div class="col-4">
                <label for="inputAddress2">Pengalaman Bekerja (Tahun)</label>
                <input name="experienceinput" type="number" class="form-control" id="PengalamanKerja">
            </div>
                <div class="form-group col-2">
                    <label for="nomorTelepon">Nomor Telepon</label>
                    <input name="telephoneinput" type="text" class="form-control" id="nomorTelepon">
                </div>
            </div>

            <div class="custom-file col-3" >
                <label class="custom-file-label" for="validatedCustomFile">Input foto profile</label>
                <input type="file" class="form-control" id="validatedCustomFile" accept="image/png, image/jpg, image/jpeg">
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
            <button type="submit" class="btn btn-primary col-2" style="margin-top: 10px">Register</button>

        </div>

  </form>
@endsection

@section('footer')
  @include('layout.footer')
@endsection
