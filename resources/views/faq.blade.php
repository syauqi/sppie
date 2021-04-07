@include('includes.header')

<body>
    @include('includes.navbar')

    <div class="container mt-5">
        <section class="content">
            <div class="row">
                <div class="col-md-10 text-start">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">FAQ PUSAKA</p>
                    <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="1200">PERTANYAAN YANG SERING DIAJUKAN</h1>
                    <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="d-sm-block d-none" />
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Dibawah ini merupakan berbagai macam pertanyaan yang sering diajukan sekaligus jawaban yang
                        dapat anda baca dan dapat anda telusuri dengan mudah
                    </p>
                    <a href="#" data-aos="fade-up" data-aos-duration="1800"
                        class="btn btn-outline-primary px-4 py-2">Jelajahi ▾</a>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="content mt-4">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apa itu SPPIE?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        SPPIE adalah sebuah website yang menyediakan sistem pembayaran SPP online untuk
                                        mempermudah pembayaran SPP anda agar dapat dilakukan dimanapun, kapanpun
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Apa tujuan SPIE?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        SPPIE dibuat untuk membuat kemudahan pengecekan data spp agar dapat diakses
                                        dimana saja dan kapan saja!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Bagaimana cara menggunakan SPPIE?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        1.
                                        Login ke aplikasi SPPIE Menggunakan Username & Password yang telah diberikan
                                        Segera login dengan username & password yang telah diberikan, setelah itu anda
                                        dapat langsung masuk ke aplikasi kami <br>
                                        2.Segera pilih menu "Data SPP" di sidebar kiri anda, lalu anda dapat melihat
                                        history pembayaran SPP anda
                                        Setelah itu anda dapat melihat riwayat pembayaran anda dimana saja dan kapan
                                        saja! <br>
                                    </div>
                                </div>
                            </div>
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
                    <h1 class="fw-bold">Lakukan lebih dengan SPPIE</h1>
                    <p class="lead">Tunggu apa lagi? segera coba aplikasi SPPIE agar anda dapat melihat history
                        pembayaran anda dimana saja kapan saja</p>
                    <a class="text-white" href="{{url('/auth')}}">Masuk
                        &raquo;</a>
                </div>
            </div>
        </section>
    </div>



    @include('includes.footer')
    @include('includes.script')

</body>

</html>