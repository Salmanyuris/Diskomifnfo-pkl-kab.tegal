@extends('layouts.main')

@section('container')

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-4">
                <div class="card border shadow-lg">
                    <h1 class="text-center mt-4 mb-4">Registrasi</h1>
                    <div class="row justify-content-center login-container">
                        <div class="col-md-6 ">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama lengkap" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="nim">NIM/NISN</label>
                                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="prodi">Program Studi/Jurusan</label>
                                            <input type="text" class="form-control" id="prodi" name="jurusan" placeholder="Masukkan program studi" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="jenisKelamin">Jenis Kelamin:</label>
                                            <select class="form-control" name="kelamin" id="jenisKelamin">
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="univ">Universitas/Sekolah</label>
                                            <input type="text" class="form-control" id="univ" name="universitas" placeholder="Masukkan nama universitas/sekolah" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="tgl-mulai">Tanggal Mulai Magang</label>
                                            <input type="date" class="form-control" name="tgl_mulai" id="tgl-mulai" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="tgl-berakhir">Tanggal Berakhir Magang</label>
                                            <input type="date" class="form-control" id="tgl-mulai" name="tgl_berakhir" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="cv">Surat Pengantar (PDF):</label>
                                            <input type="file" class="form-control-file" id="cv" name="cv">
                                            <small class="form-text text-muted">Mohon pilih file PDF untuk Surat Pengantar dari kampus/sekolah Anda.</small>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection