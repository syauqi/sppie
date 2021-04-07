@extends('includes.master')

@push('css')
<link href="{{ URL::asset('assets/css/leaflet-search.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin="" />
<link rel="stylesheet" type="text/css"
    href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
<style>
    #mapid {
        height: 300px;
    }
</style>
@endpush

@section('content')
<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-light p-5 rounded-lg">
                    <h1 class="display-4 fw-bold">{{ $id->nama_sekolah }}</h1>
                    <div class="col-md-10">
                        <p class="lead">{{ $id->alamat }}</p>
                    </div>
                    <hr>
                    <p>Selamat datang di halaman detail sekolah {{ $id->nama_sekolah }}, Temukan rekapitulasi data
                        sekolah terkait disini
                    </p>
                    <a class="btn btn-primary btn-lg px-4 py-2 fs-6" href="#" role="button">Jelajahi <small>
                            ▼</small></a>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="bg-light p-5">
                    <h1 id="line" class="fw-bold">Statistik jumlah laporan</h1>
                    <p>Jumlah laporan kejadian {{ $id->nama_sekolah }} per Bulan</p>
                    <p>
                        <div class="chartjs-wrapper"><canvas id="chart" class="chartjs"></canvas>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-light">
                    <div class="card-body" id="mapid""></div>
                </div>
                <div class=" row mt-2">
                        <div class="col-md-12">
                            <div class="card p-4">
                                <img src="{{url('main-assets/images/detail.png')}}" class="img-fluid" alt="" srcset="">
                                <a href="https://www.google.com/search?q={{ $id->nama_sekolah }}"
                                    class="btn btn-primary" target="_blank">Selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-12 border border-1 bg-light mt-4">
                <div class="p-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab"
                                data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi"
                                aria-selected="false">Deskripsi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="migitasi-tab" data-bs-toggle="tab" data-bs-target="#mitigasi"
                                type="button" role="tab" aria-controls="migitasi" aria-selected="false">Mitigasi
                                Bencana</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="prestasi-tab" data-bs-toggle="tab" data-bs-target="#prestasi"
                                type="button" role="tab" aria-controls="prestasi"
                                aria-selected="false">Prestasi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="keunggulan-tab" data-bs-toggle="tab"
                                data-bs-target="#keunggulan" type="button" role="tab" aria-controls="keunggulan"
                                aria-selected="false">Keunggulan</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="deskripsi" role="tabpanel"
                            aria-labelledby="deskripsi-tab">
                            <table class="table table-sm table-responsive">
                                <tbody>
                                    <tr>
                                        <td>Nama Tempat</td>
                                        <td>{{ $id->nama_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ $id->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Latitude</td>
                                        <td>{{ $id->latitude }}</td>
                                    </tr>
                                    <tr>
                                        <td>Longitude</td>
                                        <td>{{ $id->longitude }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade p-3" id="mitigasi" role="tabpanel" aria-labelledby="mitigasi-tab">
                            <table id="table-mitigasi" class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>KERUSAKAN</th>
                                        <th>PRESENTASE KERUSAKAN</th>
                                        <th>ESTIMASI BIAYA</th>
                                        <th>DESKRIPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($id->transaksi as $transaksi)
                                    <tr>
                                        <td>{{ $transaksi->kerusakan->kerusakan }}</td>
                                        <td>{{ $transaksi->presentase_kerusakan }} %</td>
                                        <td>RP. {{ format_idr($transaksi->estimasi_biaya) }}</td>
                                        <td>{{ $transaksi->deskripsi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade p-3" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                            <table id="table-prestasi" class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>PRESTASI</th>
                                        <th>KATEGORI</th>
                                        <th>TINGKAT</th>
                                        <th>TAHUN</th>
                                        <th>DESKRIPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($id->prestasi as $prestasi)
                                    <tr>
                                        <td>{{ $prestasi->prestasi_keunggulan }}</td>
                                        <td>{{ $prestasi->kategori->nama }}</td>
                                        <td>{{ $prestasi->tingkat->name }}</td>
                                        <td>{{ $prestasi->tahun }}</td>
                                        <td>{{ $prestasi->deskripsi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade p-3" id="keunggulan" role="tabpanel" aria-labelledby="keunggulan-tab">
                            <table id="table-keunggulan" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>KEUNGGULAN</th>
                                        <th>KATEGORI</th>
                                        <th>TINGKAT</th>
                                        <th>TAHUN</th>
                                        <th>DESKRIPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($id->prestasi as $prestasi)
                                    <tr>
                                        <td>{{ $prestasi->prestasi_keunggulan }}</td>
                                        <td>{{ $prestasi->kategori->nama }}</td>
                                        <td>{{ $prestasi->tingkat->name }}</td>
                                        <td>{{ $prestasi->tahun }}</td>
                                        <td>{{ $prestasi->deskripsi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</main>
@endsection

@push('script')
@include('components.script-datatable')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
<script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js">
</script>
<script>
    async function getDataChart1() {
        const res = await fetch('/api/v1/chart/jml-laporan-sekolah/{{ $id->id }}')
        return await res.json()
    }
    async function generateChart1() {
        const ctx = document.getElementById('chart');
        ctx.height = 200;

        const {data} = await getDataChart1()

        const chart1 = {
            labels: data.labels,
            datasets: data.datasets
        };
        const chart1opt = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        new Chart(ctx, {type: 'bar', data: chart1, options: chart1opt});
    }
    var map = L.map('mapid').setView([{{ $id->latitude }}, {{ $id->longitude }}], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $id->latitude }}, {{ $id->longitude }}]).addTo(map)
        .bindPopup("{!! $id->nama_sekolah !!} <br> {!! $id->alamat !!}");
    generateChart1()
    $("#table-mitigasi").dataTable()
    $("#table-prestasi").dataTable()
</script>
@endpush