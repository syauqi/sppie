@extends('layouts.admin')

@section('content')

<section class="section">
    <div class="">
        <div class="card" style="width:100%;">
            <div class="card-body">
                <h2 class="card-title" style="color: black;">Detail Siswa | {{ $item->name }} </h2>
                <hr>
                <p class="card-text"> After I ran into Helen at a restaurant, I realized she was just office pretty
                    drop-dead date put in in a deck for our standup today. Who's responsible for the ask for this
                    request? who's responsible for the ask for this request? but moving the goalposts gain traction.
                </p>
                <a href="#detail" class="btn btn-success">Saya paham dan
                    ingin melanjutkan ⭢</a>
            </div>
        </div>
        <div class="">
            <div class="hero text-white hero-bg-image" data-background="#">
                <div class="col-md-4 mx-auto rounded-circle bg-white p-3"
                    style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                    <img src="#" class="card-img-top  rounded-circle img-responsive" alt="...">
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12 bg-white p-3" id="detail"
            style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
            <h1 class="font-weight-bold card-title text-center" style="color: black;">Detail Siswa </h1>
            <p class="text-center" style="line-height: 5px;">Berikut data detail yang terdapat di
                database, meliputi Nama, Email,
                Photo, Akun aktif
                dan Date Created.</p>
            <hr>
            <table style="width: 100%" class="container text-center">
                <tbody>
                    <tr style="border-bottom: 0.5px solid #6c757d;">
                        <td><span class="font-weight-bold">Nama Siswa :</span></td>
                        <td> </td>
                    </tr>
                    <tr style="border-bottom: 0.5px solid #6c757d;">
                        <td><span class="font-weight-bold">Alamat Email :</span></td>
                        <td></td>
                    </tr>
                    <tr style="border-bottom: 0.5px solid #6c757d;">
                        <td><span class="font-weight-bold">Password : </span></td>
                        <td>Terenkripsi</td>
                    </tr>
                    <tr style="border-bottom: 0.5px solid #6c757d;">
                        <td><span class="font-weight-bold">Akun Aktif? :</span></td>
                        <td></td>
                    </tr>
                    <tr style="border-bottom: 0.5px solid #6c757d;">
                        <td><span class="font-weight-bold">Terdaftar pada :</span></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p style="font-weight:500px!important;font-size:18px;text-align:justify;" class="text-justify">
            </p>
            <a href="#" class="btn btn-success btn-block">Kembali</a>
        </div>
    </div>
</section>


@endsection