@extends('layouts.main')

@section('content')
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
        style="margin-top: -5rem; margin-bottom: 3rem">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 100vh">
                <img src="{{ asset('img/carousel/1.jpg') }}" class="img-fluid d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Road King Riders</h3>
                    <p>Embrace The Freedom, Ride With Road King Riders.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 100vh">
                <img src="{{ asset('img/carousel/2.jpg') }}" class="img-fluid d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Adventure with the Road King Riders</h3>
                    <p>Finding Freedom and Brotherhood in Every Journey.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 100vh">
                <img src="{{ asset('img/carousel/3.jpg') }}" class="img-fluid d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h3>Commitment to Driving Safety</h3>
                    <p>Maintaining the Safety and Warmth of the Community on Every Trip.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About -->
    <div class="container-fluid">
        <div class="text-center p-3 mb-5">
            <div class="position-relative pb-5">
                <h2 class="fw-bold text-center">Tentang Kami</h2>
                <div class="position-absolute rounded start-50 translate-middle-x"
                    style="
              bottom: 2.9rem;
              height: 0.3rem;
              width: 5rem;
              background: #B78A69;
            ">
                </div>
            </div>
            <div data-aos="fade-down" data-aos-duration="1250" class="row">
                <div class="col-6 p-3">
                    <p class="paragraf lh-base mx-5">
                        Klub Motor Road King Riders adalah sebuah komunitas yang
                        didedikasikan untuk para penggemar sepeda motor Harley-Davidson
                        dan sepeda motor klasik lainnya. Sejak didirikan, kami telah
                        menjadi tempat bagi para pengguna Road King untuk berkumpul,
                        berbagi pengalaman, dan merayakan semangat berkendara. Kami
                        memperjuangkan keselamatan berkendara, persaudaraan, dan
                        kontribusi positif kepada masyarakat.
                    </p>
                    <p class="paragraf lh-base mx-5">
                        Dengan berbagai kegiatan seperti perjalanan kelompok, acara amal,
                        dan kegiatan sosial, kami berusaha untuk memperkuat ikatan di
                        antara anggota kami dan memberikan pengalaman berkendara yang
                        menyenangkan dan bermakna. Klub Harley Road King Riders juga
                        menjadi sumber pengetahuan dan informasi seputar Harley-Davidson
                        Road King, serta menjadi wadah untuk pertemuan, diskusi, dan
                        pertukaran ide di antara para penggemar motor.
                    </p>
                    <p class="paragraf lh-base mx-5">
                        Bergabunglah dengan kami dan jadilah bagian dari komunitas yang
                        bersemangat, peduli, dan selalu siap menjelajahi petualangan di
                        atas Harley-Davidson Road King.
                    </p>
                </div>
                <div class="col-6 p-3">
                    <img class="img-fluid rounded" src="{{ asset('img/logo.png') }}" style="background-size: cover"
                        alt="logo" width="75%" />
                </div>
            </div>
        </div>
    </div>

    <!-- Visi Misi -->
    <section style="background-color: #292929">
        <div data-aos="fade-right" data-aos-duration="1250" class="container">
            <div class="row py-5">
                <div class="col-5 d-flex flex-column align-items-center">
                    <div class="shadow border border-0 card m-3">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold fs-4">Visi</h5>
                            <p class="card-text paragraf">
                                Menjadi komunitas yang solid dan terkemuka bagi para penggemar
                                sepeda motor Harley-Davidson Road King, yang menginspirasi
                                persaudaraan, petualangan, dan semangat berkendara yang
                                bertanggung jawab.
                            </p>
                        </div>
                    </div>
                    <div class="shadow border border-0 card m-3">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold fs-4">Misi</h5>
                            <p class="card-text"></p>
                            <ul class="paragraf">
                                <li>
                                    Membangun komunitas yang inklusif dan mendukung bagi para
                                    pengguna Harley-Davidson Road King.
                                </li>
                                <li>
                                    Mengadakan perjalanan kelompok dan acara yang mempromosikan
                                    keselamatan berkendara dan semangat petualangan.
                                </li>
                                <li>
                                    Memberikan kontribusi positif kepada masyarakat melalui
                                    kegiatan sosial dan aksi amal yang dilakukan oleh klub.
                                </li>
                                <li>
                                    Menjadi wadah untuk berbagi pengetahuan, pengalaman, dan
                                    informasi seputar Harley-Davidson Road King.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-7 text-center d-flex align-items-center justify-content-center" data-aos="fade-left"
                    data-aos-duration="1250">
                    <div class="text-white">
                        <h1 class="fw-bold lh-1" style="font-size: 4rem; font-weight: 900rem">
                            VISI MISI
                        </h1>
                        <h4 class="text-center text-center fst-italic fw-bold">
                            " Embrace The Freedom, Ride With Road King Riders "
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <div class="container-fluid p-3">
        <div class="position-relative pb-5">
            <h2 class="fw-bold text-center">Galeri Foto</h2>
            <div class="position-absolute rounded start-50 translate-middle-x"
                style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #B78A69"></div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1250" class="row imageGallery">
            <a href="https://images.unsplash.com/photo-1556036518-705db5129896?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1556036518-705db5129896?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                    class="img-fluid rounded" />
            </a>
            <a href="https://images.unsplash.com/photo-1556036519-53d0ae8014ea?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1556036519-53d0ae8014ea?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                    class="img-fluid rounded" />
            </a>
            <a href="https://images.unsplash.com/photo-1637151631996-28ab6a27d4a7?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODR8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1637151631996-28ab6a27d4a7?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8ODR8fG1vdG9yJTIwY2x1YnxlbnwwfDF8MHx8fDA%3D"
                    class="img-fluid rounded" />
            </a>
        </div>
        <div data-aos="fade-up" data-aos-duration="1250" class="row imageGallery">
            <a href="https://images.unsplash.com/photo-1636616545749-5e9a24ad843b?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTc2fHxtb3RvciUyMGNsdWJ8ZW58MHwxfDB8fHww"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1636616545749-5e9a24ad843b?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTc2fHxtb3RvciUyMGNsdWJ8ZW58MHwxfDB8fHww"
                    class="img-fluid rounded" />
            </a>
            <a href="https://images.unsplash.com/photo-1581089927612-11fa03ef5e99?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjQ4fHxtb3RvciUyMGNsdWJ8ZW58MHwxfDB8fHww"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1581089927612-11fa03ef5e99?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjQ4fHxtb3RvciUyMGNsdWJ8ZW58MHwxfDB8fHww"
                    class="img-fluid rounded" />
            </a>
            <a href="https://images.unsplash.com/photo-1603039997315-6dcb72ec1204?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1vdG9yY3ljbGUlMjBjbHVifGVufDB8MXwwfHx8MA%3D%3D"
                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="https://images.unsplash.com/photo-1603039997315-6dcb72ec1204?w=500&h=600&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDV8fG1vdG9yY3ljbGUlMjBjbHVifGVufDB8MXwwfHx8MA%3D%3D"
                    class="img-fluid rounded" />
            </a>
        </div>
    </div>

    <!-- Client -->
    <div class="container-fluid mb-5 p-3">
        <div class="position-relative pb-5">
            <h2 class="fw-bold text-center">Klien Kami</h2>
            <div class="position-absolute rounded start-50 translate-middle-x"
                style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #B78A69"></div>
        </div>
        <div class="row">
            <div class="d-flex col justify-content-center align-items-center">
                <img data-aos="fade-down" data-aos-duration="500" src="{{ asset('img/clients/merk1.png') }}"
                    alt="" width="100rem" style="background-size: cover" />
            </div>
            <div class="d-flex col justify-content-center align-items-center">
                <img data-aos="fade-down" data-aos-duration="1000" src="{{ asset('img/clients/merk2.png') }}"
                    alt="" width="100rem" style="background-size: cover" />
            </div>
            <div class="d-flex col justify-content-center align-items-center">
                <img data-aos="fade-down" data-aos-duration="1500" src="{{ asset('img/clients/merk3.png') }}"
                    alt="" width="100rem" style="background-size: cover" />
            </div>
            <div class="d-flex col justify-content-center align-items-center">
                <img data-aos="fade-down" data-aos-duration="2000" src="{{ asset('img/clients/merk4.png') }}"
                    alt="" width="100rem" style="background-size: cover" />
            </div>
            <div class="d-flex col justify-content-center align-items-center">
                <img data-aos="fade-down" data-aos-duration="2500" src="{{ asset('img/clients/merk5.png') }}"
                    alt="" width="100rem" style="background-size: cover" />
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="#contact-us" class="container-fluid">
        <div class="row bgImg">
            <div data-aos="fade-right" data-aos-duration="1250" class="col-md-7 py-5 header-contact"
                style="padding-inline: 5.3rem">
                <h1 class="fw-bold lh-1" style="font-size: 4.4rem; font-weight: 900rem">
                    HUBUNGI KAMI
                </h1>
                <h4 class="fw-bold">Jangan ragu untuk menghubungi kami</h4>
            </div>
            <div class="col-md-5 p-5">
                <div data-aos="fade-down" data-aos-duration="1250" class="rounded-4 m-3 p-5"
                    style="background-color: rgba(0, 0, 0, 0.5)">
                    <form action="#" method="post">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="floatingName" placeholder="Your Name"
                                style="height: -5rem" />
                            <label for="floatingName">Nama</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Your Email"
                                style="height: -5rem" />
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="mb-5 form-floating">
                            <textarea class="form-control" id="floatingMessage" placeholder="Message" style="height: 10rem"></textarea>
                            <label for="floatingMessage">Pesan</label>
                        </div>
                        <button type="submit" class="form-control btn rounded btn-contact">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
