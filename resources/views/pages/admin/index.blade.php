@extends('layouts.admin.dashboard')

@section('title', 'Dashboard Admin')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Siswa</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('users')->where('roles', 'STUDENT')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kelas</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('classes')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Petugas</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('users')->where('roles', 'STAFF')->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Transaksi</h4>
                    </div>
                    <div class="card-body">
                        {{ DB::table('payments')->count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
                </div>
                <div class="card-body">
                    <p>Jika anda ingin segera melakukan pembayaran atau melakukan transaksi SPP silahkan klik disini</p>
                    <a href="{{route('data-spp.create')}}" class="btn btn-primary btn-pill">Tambah Transaksi →</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="table-responsive bg-white p-4">
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

                                {{-- <td>
                                    <a href="{{ route('data-siswa.show', $item->id) }}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                                </a>
                                f
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </form>
                                </td> --}}
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