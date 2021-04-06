@extends('layouts.admin.dashboard')

@section('title', 'Tambah Data Petugas')
@section('content')

<section class="section">
    <div class="">
        <div class="card" style="width:100%;">
            <div class="card-body">
                <h2 class="card-title" style="color: black;">Tambah Data Petugas</h2>
                <hr>
                <p class="card-text"> Update data siswa meliputi Email dan Nama Lengkap.
                    Kita tidak bisa mengubah password guru, Hanya guru yang dapat mengubah passwordnya
                    sendiri.
                </p>
                <a href="#detail" class="btn btn-primary">Saya paham dan
                    ingin melanjutkan ⭢</a>
            </div>
        </div>
    </div>
    <div class="card card-primary">
        <div class="col-md-12 text-center">
            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                Tambah Data Petugas</p>
            <p style="line-height:-30px;margin-top:-20px;">Silahkan isi data data yang diperlukan
                dibawah </p>
            <hr>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('data-petugas.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">NAMA</label>
                        <input id="name" type="text" value="{{ old('name') }}" class=" form-control" name="name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">USERNAME</label>
                        <input id="username" type="text" value="{{ old('username') }}" class=" form-control"
                            name="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">PASSWORD</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomor_telepon">NOMOR TELEPON</label>
                        <input id="nomor_telepon" type="number" value="{{ old('phone_number') }}"" class=" form-control"
                            name="phone_number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">EMAIL</label>
                        <input id="email" type="text" value="{{ old('email') }}" class=" form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <textarea class="form-control" id="alamat" name="address" rows="5">{{ old('address') }}</textarea>
                </div>

                <input type="hidden" value="STAFF" name="roles">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection