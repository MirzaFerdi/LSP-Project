@extends('layouts.main')

@section('content')
    <!-- Contact -->
    <div id="#contact-us" class="container-fluid">
        <div class="position-relative pb-5 p-5">
            <h2 class="fw-bold text-center">Kontak Kami</h2>
            <div class="position-absolute rounded start-50 translate-middle-x"
                style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #000"></div>
        </div>
        <div class="row bgImg">
            <div data-aos="fade-right" data-aos-duration="1250" class="col-md-7 py-5 header-contact"
                style="padding-inline: 5.3rem">
                <h1 class="fw-bold lh-1 text-white" style="font-size: 4.4rem; font-weight: 900rem">
                    HUBUNGI KAMI
                </h1>
                <h4 class="fw-bold text-white"> Jangan ragu untuk menghubungi kami</h4>

              <p class="text-white mt-5">
                <i class="fas fa-home mr-3"></i> Jl. Sepanjang Jalan, No.12,
                Lumajang, Jawa Timur
              </p>
              <p class="text-white ">
                <i class="fas fa-envelope mr-3"></i> rkingriders42@gmail.com
              </p>
              <p class="text-white "><i class="fas fa-phone mr-3"></i> +62 08123456789</p>
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
