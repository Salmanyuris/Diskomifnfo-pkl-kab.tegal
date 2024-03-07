@extends('layouts.main')

@section('container')
<div class="row justify-content-center ">
    <div class="col-md-4">
        <h1 class="text-center">PENGUMUMAN</h1>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow rounded-4 mt-2 mb-2">
            <div class="card-body">
                <div class="visi-misi-content mx-auto d-block w-80">
                    <h2 class="text-center">INFORMASI PENERIMAAN MAGANG MAHASISWA/PELAJAR</h2>
                    <p class="text-center">Menjadi lembaga yang unggul dalam pelayanan teknologi informasi dan komunikasi untuk mendukung terciptanya Kabupaten Tegal yang berdaya saing dan berwawasan teknologi.</p>
                    <table class="table table-striped table-group-divider table-bordered border-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi/Jurusan</th>
                                <th scope="col">J.Kel</th>
                                <th scope="col">Status</th>
                            </tr>
                            @foreach($database as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td>{{ $data->kelamin }}</td>
                                <td>{{ $data->status }}</td>
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