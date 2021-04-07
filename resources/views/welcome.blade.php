@include('includes.header')

<body>

    @include('includes.navbar')

    <header class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 my-auto">
                    <p class="label-top text-primary" data-aos="fade-up" data-aos-duration="900">PUSAKA —
                        PANTAU SEKOLAH SMK</p>
                    <h1 data-aos="fade-up" data-aos-duration="1100">Pantau & laporkan sekolah anda kapanpun, dimanapun
                    </h1>
                    <p data-aos="fade-up" data-aos-duration="1300">
                        PUSAKA atau yang disebut Pantau Sekolah SMK akan menjadi
                        tempat anda untuk melaporkan kondisi sekolah anda dengan mudah
                        untuk dipantau oleh Dinas Pendidikan Provinsi Jawa Barat.
                    </p>
                    <a data-aos="fade-up" data-aos-duration="1500" href="{{route('login')}}"
                        class="btn btn-primary px-5 py-2 mb-2 mb-md-0">Mulai sekarang &nbsp; →
                    </a>
                    <a data-aos="fade-up" data-aos-duration="1700" href="#cara-lapor"
                        class="btn btn-outline-primary px-5 py-2">Cara lapor
                    </a>
                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1700">
                    <img style="width: 80%" src="{{url('main-assets/images/hero-image.webp')}}" alt=""
                        class="img-fluid d-none d-lg-block d-print-block float-md-end" srcset="" />
                </div>
            </div>
        </div>
    </header>

    <section class="about-section mt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG PUSAKA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">APA ITU PUSAKA?</h1>
                    <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="mx-auto" />
                    <p data-aos="fade-up" data-aos-duration="1600">
                        PUSAKA yang disingkat Sistem Pemantauan Sekolah berfungsi untuk
                        menyambungkan pihak sekolah dengan pusat agar pemantauan dapat
                        dilakukan dengan terorganisir dan mempercepat respon dari pusat
                        dengan adanya laporan online. Dengan adanya PUSAKA, diharapkan
                        semua sekolah dapat membuat laporan kerusakan ataupun laporan lain
                        dan dapat mempermudah proses pemantauan.
                    </p>
                    <a href="{{url('/faq')}}" data-aos="fade-up" data-aos-duration="1800"
                        class="btn btn-outline-primary px-4 py-2">Baca lebih lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-2 mt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1600">
                    <img src="{{url('main-assets/images/body-image-1.webp')}}" class="img-fluid" alt="" srcset="" />
                </div>
                <div class="col-md-7 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">KEMUDAHAN MENGGUNAKAN
                        PUSAKA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">Melapor kondisi sekolah tak pernah semudah ini</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">
                        Dengan adanya PUSAKA, kemudahan dalam melapor kondisi sekolah
                        rutin dapat dirasakan. Dengan adanya fitur laporan online,
                        pemantau dapat dengan mudah menerima informasi dari sekolah yang
                        sedang dilanda kerusakan/bencana dengan cepat tanpa harus datang
                        ke lokasi.
                    </p>
                    <a id="cara-lapor" href="{{route('login')}}">
                        <p data-aos="fade-up" data-aos-duration="1600" class="text-primary"
                            style="text-decoration: none"> Lapor sekarang →</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="instruction-section mt-100">
        <div class="container">
            <div class="row">
                <div class="header-instruction text-center">
                    <div class="col-md-7 mx-auto">
                        <p class="text-primary label-top" data-aos="fade-up" data-aos-duration="1000">BAGAIMANA
                            PUSAKA
                            BEKERJA</p>
                        <h1 data-aos="fade-up" data-aos-duration="1200">CARA PELAPORAN & PENGGUNAAN</h1>
                        <p data-aos="fade-up" data-aos-duration="1400">
                            {{-- Untuk anda yang masih baru kenal dengan kami, kami berikan
                            caranya kok dibawah bagaimana caranya untuk menggunakan aplikasi
                            ini --}}
                            Cara pelaporan dan penggunaan pada aplikasi PUSAKA, akan kami jelaskan secara rinci dibawah
                            ini.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="mb-3"><i
                            class="lni lni-camera icon-top bg-primary px-3 py-2 text-center"></i></p>
                    <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top">LANGKAH PERTAMA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2">Ambil foto bagian sekolah yang perlu
                        pihak sekolah laporkan</h1>
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Segera foto bagian sekolah yang terkena dampak bencana atau
                        terkena dampak hal lainnya yang ingin dilaporkan dan dipantau oleh
                        pusat.
                    </p>
                    <a href="{{url('/faq')}}">
                        <p class="text-primary" style="text-decoration: none" data-aos="fade-up"
                            data-aos-duration="1800"> Selengkapnya →</p>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{url('main-assets/images/section-1.png')}}" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{url('main-assets/images/section-2.png')}}" class="img-fluid" alt="" />
                </div>
                <div class="col-md-8 my-auto">
                    <p class="mb-3" data-aos="fade-up" data-aos-duration="1000"><i
                            class="lni lni-lock icon-top bg-primary px-3 py-2 text-center"></i></p>
                    <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top">LANGKAH KEDUA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2">
                        Login kedalam aplikasi PUSAKA dengan menekan tombol masuk di
                        bagian menu
                    </h1>
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Lalu anda dapat login kedalam aplikasi kami, untuk segera
                        melaporkan bagian sekolah yang ingin dilaporkan atau ingin kami
                        pantau.
                    </p>
                    <a href="{{url('/faq')}}">
                        <p class="text-primary" style="text-decoration: none" data-aos="fade-up"
                            data-aos-duration="1800"> Selengkapnya →</p>
                    </a>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8 my-auto">
                    <p class="mb-3" data-aos="fade-up" data-aos-duration="1000"><i
                            class="lni lni-upload icon-top bg-primary px-3 py-2 text-center"></i></p>
                    <p data-aos="fade-up" data-aos-duration="1200" class="text-primary label-top">LANGKAH KETIGA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1400" class="mt-2">
                        Setelah masuk, Upload foto laporan dan isi form yang telah kami sediakan
                    </h1>
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Siapkan gambar yang telah anda ambil dan isi detail form yang
                        telah kami sediakan, setelah itu data anda akan kami pantau dan
                        kami proses!
                    </p>
                    <a href="{{url('/faq')}}">
                        <p class="text-primary" style="text-decoration: none" data-aos="fade-up"
                            data-aos-duration="1800"> Selengkapnya →</p>
                    </a>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1800">
                    <img src="{{url('main-assets/images/section-3.png')}}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bonus-section mt-100">
        <div class="container">
            <div class="bg-primary text-white p-5 rounded" data-aos="fade-up" data-aos-duration="1600" style="box-shadow:
            0 1.7px 1.7px rgba(0, 0, 0, 0.011),
            0 3.9px 3.9px rgba(0, 0, 0, 0.016),
            0 6.7px 6.7px rgba(0, 0, 0, 0.02),
            0 10.3px 10.3px rgba(0, 0, 0, 0.023),
            0 15.2px 15.2px rgba(0, 0, 0, 0.027),
            0 22.3px 22.3px rgba(0, 0, 0, 0.03),
            0 33.5px 33.5px rgba(0, 0, 0, 0.034),
            0 53.4px 53.4px rgba(0, 0, 0, 0.039),
            0 100px 100px rgba(0, 0, 0, 0.05);">
                <h1 class="fw-bold">Lakukan lebih dengan PUSAKA</h1>
                <p class="lead">Tunggu apa lagi? segera laporkan kondisi sekolah anda ke pusat untuk segera di pantau
                    dan segera ditindak sesuai tindakan yang akan dilakukan</p>
                <a class="text-white" href="{{url('/login')}}">Masuk
                    &raquo;</a>
            </div>
        </div>
    </section>

    @include('includes.footer')
    @include('includes.script')

</body>

</html>