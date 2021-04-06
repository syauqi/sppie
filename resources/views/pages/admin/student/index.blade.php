@extends('layouts.admin.dashboard')

@section('title', 'Data Siswa')
@section('content')

<section class="section">
    <div class="card card-primary">
        <div class="card-body">
            <h2 class="card-title text-dark">PENGELOLAAN DATA SISWA</h2>
            <hr>
            <p class="card-text">Berikut merupakan halaman pengelolaan data siswa di aplikasi SPPIE. Anda dapat melihat
                data siswa, mengupdate data siswa, menambahkan data siswa & menghapus data siswa di halaman ini </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary p-4">
                <div class="table-responsive">
                    <table id="example" class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NISN</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <th scope="row">
                                    {{ $item->id }}
                                </th>
                                <td>
                                    {{ $item->nisn }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->username }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ $item->class }}
                                </td>
                                <td>
                                    <a href="{{ route('data-siswa.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('data-siswa.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('data-siswa.destroy', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
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