@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-dark my-5">
                <span class=""><b>Profil Dinas Komunikasi dan Informatika Kabupaten Tegal</b></span>
            </h2>
            <p style="text-align:justify;">Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Tegal dibentuk dengan Peraturan Daerah Kabupaten Tegal Nomor 12 Tahun 2016 Tentang Pembentukan Dan Susunan Perangkat Daerah Kabupaten Tegal sebagaimana telah diubah dengan Peraturan Daerah Kabupaten Tegal Nomor 7 Tahun 2019 Tentang Perubahan Atas Peraturan Daerah Kabupaten Tegal Nomor 12 Tahun 2016 Tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Tegal.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-dark my-5">
                <span class=""><b>Profil Pimpinan</b></span>
            </h2>
            <img src="{{ asset('assets/SO.png') }}" class="img-fluid mb-4" alt="Pimpinan Image">
        </div>
    </div>
</div>

@endsection