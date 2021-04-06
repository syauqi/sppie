@extends('layouts.admin.dashboard')

@section('title', 'Tambah Transaksi SPP')
@section('content')

<section class="section">
    <div class="card card-primary">
        <div class="col-md-12 text-center">
            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                Tambah Data Transaksi SPP</p>
            <hr>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('data-spp.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nisn">NISN</label>
                        <input id="nisn" type="text" class="form-control" value="{{ old('nisn') }}" name="nisn">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">NAMA SISWA</label>
                        <input id="name" type="text" value="{{ old('name') }}" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="jumlah_bayar">JUMLAH BAYAR</label>
                        <input type="text" value="{{ old('jumlah_bayar') }}" class="form-control" id="jumlah_bayar"
                            name="total_payment">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">BULAN</label>
                        <select name="month" class="form-control" id="exampleFormControlSelect1">
                            <option>JANUARI</option>
                            <option>FEBRUARI</option>
                            <option>MARET</option>
                            <option>APRIL</option>
                            <option>MEI</option>
                            <option>JUNI</option>
                            <option>JULI</option>
                            <option>AGUSTUS</option>
                            <option>SEPTEMBER</option>
                            <option>OKTOBER</option>
                            <option>NOVEMBER</option>
                            <option>DESEMBER</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1">TAHUN</label>
                        <select class="form-control" name="year" id="exampleFormControlSelect1">
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection