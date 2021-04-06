@extends('layouts.admin.dashboard')

@section('title', 'Detail Siswa')
@section('content')

<section class="section">
    <div class="card" style="width:100%;">
        <div class="card-body">
            <h2 class="card-title text-uppercase" style="color: black;">Detail Siswa — {{ $item->name }} </h2>
            <hr>
            <p class="card-text"> Berikut adalah detail siswa dari siswa yang bernama {{$item->name}}. Detail
                meliputi NISN, Nama Lengkap, Username, Email, Alamat, Nomor Telepon & Kelas.
            </p>
        </div>
    </div>
    <div class="card card-primary">
        <div class="col-md-12 text-center">
            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                Detail Data Siswa</p>
            <p style="line-height:-30px;margin-top:-20px;">Berikut adalah data siswa dari {{ $item->name }} </p>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <th>NISN</th>
                        <td>{{ $item->nisn }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $item->username }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $item->address }}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{ $item->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{ $item->class }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="{{url('/admin/data-siswa')}}" class="btn btn-primary">Kembali </a>
        </div>
    </div>
</section>


@endsection