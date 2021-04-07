@include('includes.header')

<body>

    @include('includes.navbar')

    <div class="container">
        <section class="content mt-5">
            <div class="row">
                <div class="col-md-12 mx-auto text-start">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG KAMI</p>
                    <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="1200">APA ITU PUSAKA?</h1>
                    <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="d-sm-block d-none" />
                    <p data-aos="fade-up" data-aos-duration="1600">
                        PUSAKA yang disingkat Sistem Pemantauan Sekolah berfungsi untuk
                        menyambungkan pihak sekolah dengan pusat agar pemantauan dapat
                        dilakukan dengan terorganisir dan mempercepat respon dari pusat
                        dengan adanya laporan online. Dengan adanya PUSAKA, diharapkan
                        semua sekolah dapat membuat laporan kerusakan ataupun laporan lain
                        dan dapat mempermudah proses Pemantauan
                    </p>
                    <a href="#" data-aos="fade-up" data-aos-duration="1800"
                        class="btn btn-outline-primary px-4 py-2">Jelajahi ▾</a>
                </div>
            </div>
        </section>
    </div>

    <section class="about-section-2 mt-100" style="background-color: #d7edff">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1600">
                    <img src="{{url('main-assets/images/about-image-1.webp')}}" class="img-fluid" alt="" srcset="" />
                </div>
                <div class="col-md-7 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG PUSAKA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">Dibuat untuk memudahkan pemantauan dan laporan</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">
                        {{-- Taukah kamu, PUSAKA dibuat dalam rangka membantu sekolah yang terkena bencana agar dapat
                        melaporkan kondisi sekolah ke pusat tanpa ribet dan mudah --}}
                        Pusaka dibuat untuk membantu proses pemantaun dan pelaporan sekolah agar lebih mudah dan lebih
                        terorganisir.
                    </p>
                    <a id="cara-lapor" href="{{route('login')}}">
                        <p data-aos="fade-up" data-aos-duration="1600" class="text-primary"
                            style="text-decoration: none"> Selengkapnya →</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-2 " style="background-color: #f2f6fb">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-7 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG PUSAKA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">Dengan PUSAKA semua jadi lebih mudah!</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">
                        {{-- Pihak pusat tidak perlu lagi untuk datang ke tempat untuk memantau dan mencatat kondisi sekolah
                        yang terkena bencana atau musibah. Apalagi dengan maraknya kasus COVID-19, PUSAKA siap jadi
                        alternatif dan mempermudah proses pelaporan. --}}
                        Pihak pusat pun tidak perlu ke lokasi untuk memantau dan melihat kondisi sekolah, dengan PUSAKA
                        sekolah dapat melaporkan kondisi sekolah secara berkala untuk dipantau oleh pihak pusat.
                    </p>
                    <a id="cara-lapor" href="{{route('login')}}">
                        <p data-aos="fade-up" data-aos-duration="1600" class="text-primary"
                            style="text-decoration: none"> Selengkapnya →</p>
                    </a>

                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1600">
                    <img src="{{url('main-assets/images/about-image-2.webp')}}" class="img-fluid" alt="" srcset="" />
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-aos="fade-up" data-aos-duration="1600">
                    <img src="{{url('main-assets/images/about-image-3.webp')}}" class="img-fluid" alt="" srcset="" />
                </div>
                <div class="col-md-7 my-auto">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">TENTANG PUSAKA</p>
                    <h1 data-aos="fade-up" data-aos-duration="1200">Dapat digunakan dimana saja & kapan saja</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">
                        {{-- Versi android dari PUSAKA membuat laporan dapat dilakukan dimana saja dan kapan saja cukup
                        dengan smartphone! --}}
                        Dengan aplikasi mobile PUSAKA, membuat laporan dapat dilakukan dimana saja dan kapan saja dengan
                        smartphone anda.
                    </p>
                    <a id="cara-lapor" href="{{route('login')}}">
                        <p data-aos="fade-up" data-aos-duration="1600" class="text-primary"
                            style="text-decoration: none"> Selengkapnya →</p>
                    </a>
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