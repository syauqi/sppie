@extends('includes.master')

@section('content')
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 rounded-3">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('main-assets/images/laporan-images-1.png')}}" class="d-block w-100"
                                style="border-radius: 8px" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card border-0 p-2"
                            style="width: 100%;box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Call Center</h5>
                                <p class="card-text" style="font-size: 12px">Nomor Konsultasi</p>
                                <p class="text-primary"><i class="lni lni-phone"></i> (022) 8827728</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 p-2"
                            style="width: 100%;box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Email</h5>
                                <p class="card-text" style="font-size: 12px">Layanan Email</p>
                                <p class="text-primary">disdik@jabarprov.go.id</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card border-0 p-3"
                            style="width: 100%;box-shadow:rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Sosial Media</h5>
                                <p class="card-text">Dapatkan berita terbaru seputar pendidikan di website resmi
                                    Dinas Pendidikan Provinsi Jawa Barat!
                                </p>
                                <a href="https://www.instagram.com/disdikjabar/" class="card-link">Instagram</a>
                                <a href="http://disdik.jabarprov.go.id/" class="card-link">Website Resmi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-md-4">

                <div class="card border-0 p-5" style="width: 100%;box-shadow:
                0 2.9px 0.7px rgba(0, 0, 0, 0),
                0 5.8px 1.5px rgba(0, 0, 0, 0.001),
                0 8.7px 2.5px rgba(0, 0, 0, 0.001),
                0 11.7px 3.7px rgba(0, 0, 0, 0.002),
                0 14.4px 5.4px rgba(0, 0, 0, 0.003),
                0 15.4px 7.6px rgba(0, 0, 0, 0.004),
                0 17.4px 10.8px rgba(0, 0, 0, 0.006),
                0 19.5px 15.7px rgba(0, 0, 0, 0.008),
                0 21.7px 24.2px rgba(0, 0, 0, 0.012),
                0 24px 43px rgba(0, 0, 0, 0.02)
              ;">
                    <p class="fw-bold">Pie Chart — Keunggulan Sekolah</p>
                    <hr>
                    <div class="chartjs-wrapper"><canvas id="chart-2" class="chartjs" width="100%"
                            height="undefined"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-8 bg-white p-5" style="box-shadow:
            0 2.9px 0.7px rgba(0, 0, 0, 0),
            0 5.8px 1.5px rgba(0, 0, 0, 0.001),
            0 8.7px 2.5px rgba(0, 0, 0, 0.001),
            0 11.7px 3.7px rgba(0, 0, 0, 0.002),
            0 14.4px 5.4px rgba(0, 0, 0, 0.003),
            0 15.4px 7.6px rgba(0, 0, 0, 0.004),
            0 17.4px 10.8px rgba(0, 0, 0, 0.006),
            0 19.5px 15.7px rgba(0, 0, 0, 0.008),
            0 21.7px 24.2px rgba(0, 0, 0, 0.012),
            0 24px 43px rgba(0, 0, 0, 0.02)
          ;
          ">
                <h1 id="line" class="fw-bold">Statistik jumlah keunggulan</h1>
                <p>Berikut merupakan statistik jumlah sekolah yang mendapat keunggulan yang diantara lain adalah
                    [LSP, TEFA, COE, MoU Industri & BLUD]</p>
                <p>
                    <div class="chartjs-wrapper"><canvas id="chart-1" class="chartjs" width="undefined"
                            height="undefined"></canvas>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 bg-white" style="box-shadow:
            0 13.9px 2.3px rgba(0, 0, 0, 0.001),
            0 26.8px 5.1px rgba(0, 0, 0, 0.002),
            0 38.4px 8.5px rgba(0, 0, 0, 0.003),
            0 48.5px 12.9px rgba(0, 0, 0, 0.004),
            0 56.7px 18.5px rgba(0, 0, 0, 0.006),
            0 62.6px 26.2px rgba(0, 0, 0, 0.007),
            0 65.4px 37.2px rgba(0, 0, 0, 0.01),
            0 64.2px 54px rgba(0, 0, 0, 0.013),
            0 58.9px 83.3px rgba(0, 0, 0, 0.02),
            0 63px 148px rgba(0, 0, 0, 0.04)
          ;
          ">
                <div class="border-0 p-5">
                    <h1 id="line" class="fw-bold">Statistik jumlah laporan</h1>
                    <p>Berikut merupakan statistik jumlah laporan yang dilaporkan berbagai macam sekolah sesuai urutan
                        bulan</p>
                    <p>
                        <div class="chartjs-wrapper"><canvas id="chart-3" class="chartjs" width="undefined"
                                height="undefined"></canvas>
                        </div>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 p-5" style="width: 100%;box-shadow:
                0 2.9px 0.7px rgba(0, 0, 0, 0),
                0 5.8px 1.5px rgba(0, 0, 0, 0.001),
                0 8.7px 2.5px rgba(0, 0, 0, 0.001),
                0 11.7px 3.7px rgba(0, 0, 0, 0.002),
                0 14.4px 5.4px rgba(0, 0, 0, 0.003),
                0 15.4px 7.6px rgba(0, 0, 0, 0.004),
                0 17.4px 10.8px rgba(0, 0, 0, 0.006),
                0 19.5px 15.7px rgba(0, 0, 0, 0.008),
                0 21.7px 24.2px rgba(0, 0, 0, 0.012),
                0 24px 43px rgba(0, 0, 0, 0.02)
              ;">
                    <p class="fw-bold">Pie Chart — Laporan Sekolah</p>
                    <hr>
                    <div class="chartjs-wrapper"><canvas id="chart-4" class="chartjs" width="100%"
                            height="undefined"></canvas>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="bonus-section mt-100">
        <div class="container">
            <div class="bg-primary text-white p-5 rounded" style="box-shadow:
            0 1.7px 1.7px rgba(0, 0, 0, 0.011),
            0 3.9px 3.9px rgba(0, 0, 0, 0.016),
            0 6.7px 6.7px rgba(0, 0, 0, 0.02),
            0 10.3px 10.3px rgba(0, 0, 0, 0.023),
            0 15.2px 15.2px rgba(0, 0, 0, 0.027),
            0 22.3px 22.3px rgba(0, 0, 0, 0.03),
            0 33.5px 33.5px rgba(0, 0, 0, 0.034),
            0 53.4px 53.4px rgba(0, 0, 0, 0.039),
            0 100px 100px rgba(0, 0, 0, 0.05);">
                <h1 class="fw-bold">Lakukan lebih dengan PUSAKA</h1>
                <p class="lead">Tunggu apa lagi? segera laporkan kondisi sekolah anda ke pusat untuk segera di
                    pantau
                    dan segera ditindak sesuai tindakan yang akan dilakukan</p>
                <a class="text-white" href="{{url('/login')}}">Masuk
                    &raquo;</a>
            </div>
        </div>
    </section>
</main>
@endsection

@push('script')
<script>
    async function getChartKeunggulan() {
            // const res = await fetch('/api/v1/chart/keunggulan-kategori/')
            const res = await fetch('{{ url('/api/v1/chart/keunggulan-kategori/') }}')
            return await res.json()
        }
        async function getChartKeunggulanAvg() {
            // const res = await fetch('/api/v1/chart/keunggulan-avg/')
            const res = await fetch('{{ url('/api/v1/chart/keunggulan-avg/') }}')
            return await res.json()
        }
        async function getChartMitigasi() {
            // const res = await fetch('/api/v1/chart/keunggulan-avg/')
            const res = await fetch('{{ url('/api/v1/chart/jml-laporan/') }}')
            return await res.json()
        }
        async function getChartMitigasiAvg() {
            // const res = await fetch('/api/v1/chart/keunggulan-avg/')
            const res = await fetch('{{ url('/api/v1/chart/mitigasi-avg/') }}')
            return await res.json()
        }
        async function generateChartKeunggulan() {
            const ctx = document.getElementById('chart-1');
            ctx.height = 200;
            const {data} = await getChartKeunggulan()
            const chart1 = {
                labels: data.labels,
                datasets: data.datasets
            };
            const chart1opt = {
                scales: {
                    yAxes: [{
                        stacked: true
                    }]
                }
            };
            new Chart(ctx, {type: 'line', data: chart1, options: chart1opt});
        }
        async function generateChartKeunggulanAvg() {
            const ctx = document.getElementById('chart-2');
            ctx.height = 200;
            const {data} = await getChartKeunggulanAvg()
            const chart1 = {
                labels: data.labels,
                datasets: data.datasets
            };
            const chart1opt = {
                scales: {
                    yAxes: [{
                        stacked: true
                    }]
                }
            };
            new Chart(ctx, {type: 'doughnut', data: chart1, options: chart1opt});
        }
        async function generateChartMitigasi() {
            const ctx = document.getElementById('chart-3');
            ctx.height = 200;
            const {data} = await getChartMitigasi()
            const chart1 = {
                labels: data.labels,
                datasets: data.datasets
            };
            const chart1opt = {
                scales: {
                    xAxes: [{
                        gridLines: {
                            offsetGridLines: true
                        }
                    }]
                }
            };
            new Chart(ctx, {type: 'bar', data: chart1, options: chart1opt});
        }
        async function generateChartMitigasiAvg() {
            const ctx = document.getElementById('chart-4');
            ctx.height = 200;
            const {data} = await getChartMitigasiAvg()
            const chart1 = {
                labels: data.labels,
                datasets: data.datasets
            };
            const chart1opt = {
                scales: {
                    yAxes: [{
                        stacked: true
                    }]
                }
            };
            new Chart(ctx, {type: 'doughnut', data: chart1, options: chart1opt});
        }
        generateChartKeunggulan()
        generateChartKeunggulanAvg()
        generateChartMitigasi()
        generateChartMitigasiAvg()
</script>
@endpush