@extends('layouts.main')
@section('container')

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row g-3 mt-2">
                    <div class="col-lg-6 col-md-6">
                        <h1 class="d-flex align-items-center text-gradient">PENDAFTARAN MAGANG DINAS KOMINFO KABUPATEN TEGAL</h1>
                        <p>"Menyemai Inovasi, Mewujudkan Transformasi: Magang di Diskominfo, Tempat Berkembang dan Berkontribusi untuk Kemajuan Teknologi dan Informasi."</p>
                        <a href="/registration">
                            <button type="button" class="btngg text-white mt-4 p-2 fs-6 mb-5 rounded-5">
                                Daftar Sekarang
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('assets/home2.png') }}" alt="First slide" class="img-fluid mx-auto d-inline-block w-70 px-3" style="max-height: 400px; object-fit: cover; min-height: 70vh;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--VISI MISI-->

<div class="row justify-content-center">
    <div class="col-md-10">
        <h2 class="text-center">Visi</h2>
        <p class="text-center ml-4 mr-4">Menjadi lembaga yang unggul dalam pelayanan teknologi informasi dan komunikasi untuk mendukung terciptanya Kabupaten Tegal yang berdaya saing dan berwawasan teknologi.</p>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <h2 class="text-center">Misi</h2>
        <ol style="text-align:justify ">
            <li class="ml-4 mr-4">Memberikan Layanan Informasi dan Komunikasi yang Berkualitas:
                Menyediakan layanan informasi dan komunikasi yang inovatif, andal, dan berkualitas guna meningkatkan keterhubungan antarinstansi pemerintah dan masyarakat.</li>

            <li class="ml-4 mr-4">Mendorong Penggunaan Teknologi sebagai Alat Pembangunan:
                Mengembangkan dan mendukung pemanfaatan teknologi informasi sebagai alat untuk memajukan sektor-sektor pembangunan di Kabupaten Tegal.</li>

            <li class="ml-4 mr-4"> Menyediakan Infrastruktur IT yang Handal:
                Menjamin ketersediaan infrastruktur teknologi informasi yang handal dan aman guna mendukung kegiatan operasional pemerintah dan pelayanan masyarakat.</li>

            <li class="ml-4 mr-4"> Sumber Daya Manusia di Bidang IT:
                Meningkatkan kompetensi sumber daya manusia di bidang teknologi informasi melalui pelatihan, pendidikan, dan pengembangan potensi.</li>

            <li class="ml-4 mr-4 mb-4">Menggalakkan Inovasi dalam Pelayanan Publik:
                Mendorong inovasi dalam penyelenggaraan pelayanan publik dengan memanfaatkan teknologi informasi, sehingga memberikan nilai tambah kepada masyarakat.</li>
        </ol>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row gx-lg-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border shadow-lg rounded-5">
                    <div class="card-body">
                        <h3 class="text-center">Program Magang</h3>
                        <p class="my-3 mx-3" style="text-align:justify">Dalam program magang kami, peserta tidak hanya akan mendapatkan pemahaman mendalam tentang industri teknologi informasi dan komunikasi, tetapi juga akan terlibat langsung dalam proyek-proyek yang relevan dan menantang. Kami menyediakan lingkungan yang mendukung pembelajaran aktif, kolaborasi tim, dan pengembangan keterampilan praktis yang diperlukan untuk meraih kesuksesan di dunia profesional.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 mb-4">
                <div class="card border shadow-lg rounded-5">
                    <div class="card-body">
                        <h3 class="text-center">Benfit</h3>
                        <table>
                            <ol style="text-align:justify mr-4">
                                <li>
                                    <strong>Pengalaman Praktis:</strong> Peserta magang akan terlibat langsung dalam proyek-proyek nyata yang menantang dan bermanfaat, memberikan pemahaman yang mendalam tentang dunia kerja sehari-hari.
                                </li>

                                <li>
                                    <strong>Mentorship:</strong> Kami menyediakan dukungan mentorship untuk membimbing peserta dalam perjalanan mereka, memberikan wawasan berharga dan mendukung pertumbuhan profesional mereka.
                                </li>

                                <li>
                                    <strong>Jaringan Profesional:</strong> Peserta magang akan memiliki kesempatan untuk berinteraksi dengan profesional di bidang teknologi dan komunikasi, membangun jaringan yang berharga untuk masa depan mereka.
                                </li>

                                <li>
                                    <strong>Peluang Pengembangan Diri:</strong> Program magang kami dirancang untuk membantu peserta mengembangkan keterampilan interpersonal, kepemimpinan, dan teknis yang diperlukan di dunia kerja saat ini.
                                </li>
                            </ol>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Layanan Sistem Elektronik-->
<div class="container">
    <div class="row justify-content-center align-items-center mb-5">
        <div class="col-12 text-center mb-5">
            <h2 class="text-dark"><b>Layanan Sistem Elektronik</b></h2>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card rounded-5 shadow-lg gradient-bg">
                <div class="card-body">
                    <h5 class="card-title text-center text-white">E-Office</h5>
                    <a href="https://eoffice.tegalkab.go.id/" class="btn btn-dark btn-block rounded-5"><b>></b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card rounded-5 shadow-lg gradient-bg">
                <div class="card-body">
                    <h5 class="card-title text-center text-white">Segalengko</h5>
                    <a href="https://play.google.com/store/apps/details?id=tegalkab.smartcityslawi" class="btn btn-dark btn-block rounded-5"><b>></b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card rounded-5 shadow-lg gradient-bg">
                <div class="card-body">
                    <h5 class="card-title text-center text-white">Flipbook</h5>
                    <a href="https://flipbook.tegalkab.go.id/" class="btn btn-dark btn-block rounded-5"><b>></b></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card rounded-5 shadow-lg gradient-bg">
                <div class="card-body text-center ">
                    <h5 class="card-title text-white">Ponggol</h5>
                    <a href="https://ponggol.tegalkab.go.id/" class="btn btn-dark btn-block rounded-5"><b>></b></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--KONTAK-->
<div class="container">
    <h2 class="text-center text-dark my-5">
        <span class="text-center"><b>Hubungi</span> Kami </b>
    </h2>
    <div class="row justify-content-center rounded-5">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="gradient-bg text-white rounded-5 p-3 mb-3">
                <h3 class="text-light text-center">Contact Us</h3>
                <p class="p-3 text-light" style="text-align:justify">
                    Kami senang mendengar dari Anda. Jika Anda memiliki
                    pertanyaan, saran, atau ingin berbagi pengalaman dengan kami,
                    jangan ragu untuk menghubungi kami. Tim kami siap membantu
                    Anda.
                </p>
            </div>
            <table class="table-bordered rounded-5 w-100 ">
                <tbody>
                    <tr>
                        <td class="p-2">
                            <h2>LOKASI</h2>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            <p><b>Kantor :</b> Dinas Komunikasi dan informatika kab. tegal</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            <p>Jl. DR. Soetomo No.1, Dukuh Ringin, Dukuhwringin, Kec. Slawi, Kabupaten Tegal, Jawa Tengah 52415</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            <p>Tegal, Jawa Tengah</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            <p>Indonesia</p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <form class="col-lg-4 col-md-6 mb-4">
            <div class="form-group">
                <label for="exampleInputNama1">Nama</label>
                <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" />
                <small id="namaHelp" class="form-text text-muted">Nama Harus Memiliki Minimal 5 Huruf</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputNoTelp1">No Telp</label>
                <input type="tel" class="form-control" id="exampleInputNoTelp1" />
            </div>
            <div class="form-group">
                <label for="exampleInputNoTelp1">Pesan</label>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-dark">Kirim Pesan</button>
        </form>
    </div>
</div>

<!--contactend-->


@endsection