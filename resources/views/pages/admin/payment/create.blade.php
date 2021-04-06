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
            <form method="POST" action="{{ route('data-kelas.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="id_kelas">NISN</label>
                        <input id="id_kelas" type="text" class="form-control" value="{{ old('class_id') }}"
                            name="class_id">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="kelas">TAHUNn</label>
                        <input id="kelas" type="text" value="{{ old('class_name') }}" class="form-control"
                            name="class_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kompetensi_keahlian">KOMPETENSI KEAHLIAN</label>
                    <input type="text" value="{{ old('skill_competence') }}" class="form-control"
                        id="kompetensi_keahlian" name="skill_competence">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection