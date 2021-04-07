@extends('layouts.staff.dashboard')

@section('title', 'Data SPP')
@section('content')

<section class="section">
    <div class="card card-primary">
        <div class="card-body">
            <h2 class="card-title text-dark">PENGELOLAAN DATA SPP</h2>
            <hr>
            <p class="card-text">Berikut merupakan halaman pengelolaan data SPP di aplikasi SPPIE.
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary p-4">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NISN</th>
                                <th scope="col">NAMA SISWA</th>
                                <th scope="col">BULAN</th>
                                <th scope="col">TAHUN</th>
                                <th scope="col">TOTAL BAYAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <th scope="row">
                                    {{ $item->nisn }}
                                </th>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->month }}
                                </td>
                                <td>
                                    {{ $item->year }}
                                </td>
                                <td>
                                    {{ $item->total_payment }}
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection