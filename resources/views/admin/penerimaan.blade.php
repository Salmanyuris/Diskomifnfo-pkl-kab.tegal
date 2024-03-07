@extends('admin.dashboard')

@section('content')
<div class="row justify-content-center ">
    <div class="col-md-4">
        <h1 class="text-center">INFORMASI PENERIMAAN</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow rounded-4 mt-2 mb-2">
            <div class="card-body">
                <div class="visi-misi-content mx-auto d-block w-80">
                    <h2 class="text-center">INFORMASI PENERIMAAN MAGANG MAHASISWA/PELAJAR</h2>
                    <table class="table table-striped table-group-divider table-bordered border-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">J.Kel</th>
                                <th scope="col">Tgl. masuk-keluar</th>
                                <th scope="col">Surat rekomendasi</th>
                                <th scope="col">Opsi</th>
                            </tr>
                            @foreach($database as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td>{{ $data->kelamin }}</td>
                                <td>
                                    Masuk: {{ $data->tgl_mulai }}
                                    <br>
                                    Keluar: {{ $data->tgl_berakhir }}
                                </td>
                                <td><a href="{{ route('admin.cv', $data->id) }}" class="btn btn-primary">Lihat Surat</a></td>
                                @if($data->status == 'Diterima' || $data->status == 'Ditolak')
                                <td>{{ $data->status }}</td>
                                @else
                                <td>
                                    <a href="{{ route('admin.apply', $data->id) }}" class="btn btn-success m-1">Terima</a>
                                    <br>
                                    <a href="{{ route('admin.reject', $data->id) }}" class="btn btn-danger m-1">Tolak</a>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection