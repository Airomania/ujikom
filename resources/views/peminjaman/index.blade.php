@extends('layouts.admin')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Peminjaman Ruang Multimedia
                        <a href="{{ route('peminjaman.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Tujuan</th>
                                        <th>No Hp</th>
                                        <th>Waktu</th>
                                        <th>No Pc</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($peminjaman as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tanggal)) }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nim }}</td>
                                            <td>{{ $data->tujuan }}</td>
                                            <td>{{ $data->no_hp }}</td>
                                            <td>{{ $data->waktu }}</td>
                                            <td>{{ $data->no_pc }}</td>
                                            <td>
                                                <form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('peminjaman.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('peminjaman.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection