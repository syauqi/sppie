@extends('layouts.admin.dashboard')

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
                                <th scope="col">ID User</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Total Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <th scope="row">
                                    {{ $item->id_user }}
                                </th>
                                <td>
                                    {{ $item->month }}
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