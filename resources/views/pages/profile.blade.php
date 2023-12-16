@extends('layouts.main')

@section('content')
<div class="container-md p-5">
  <div class="position-relative pb-5">
    <h2 class="fw-bold text-center">Profile</h2>
    <div
      class="position-absolute rounded start-50 translate-middle-x"
      style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #000"
    ></div>
  </div>
  <!-- <h5 class="text-center" style="margin-top: -2rem; padding-bottom: 2rem;">Deskripsi Mengenai Klub</h5>       -->
  <div class="div d-flex justify-content-center">
    <img
      class="img-fluid rounded w-25 h-25"
      src="{{ asset("img/logo.png")}}"
      alt="logo"
      width="75%"
    />
  </div>
  <div data-aos="fade-down" data-aos-duration="1250" class="row">
    <div class="col-12 " style="padding: 3rem 12rem 3rem 12rem;">
      <p class="paragraf lh-base ">
        Klub Motor Harley-Davidson Road King Riders adalah sebuah komunitas
        yang mengusung semangat petualangan dan kebebasan di jalan raya.
        Dengan fokus pada pengalaman berkendara yang mendebarkan, klub ini
        menawarkan kesempatan bagi para anggotanya untuk merasakan kebebasan
        yang unik dan persaudaraan yang erat. Kelebihan klub ini terletak
        pada semangat persaudaraan yang kuat di antara anggotanya, komitmen
        terhadap keselamatan berkendara, serta beragam kegiatan sosial dan
        amal yang membawa dampak positif bagi masyarakat sekitar. Dengan
        pengalaman yang kaya dalam mengarungi jalan-jalan panjang, klub ini
        menjadi tempat yang cocok bagi para pecinta petualangan dan
        kebebasan di jalan raya.
      </p>
      <p class="paragraf lh-base ">
        Dalam setiap perjalanan, klub motor ini mempromosikan keselamatan
        berkendara sebagai prioritas utama, memastikan bahwa setiap anggota
        merasakan kepuasan dan keamanan dalam setiap petualangan. Selain
        itu, klub ini juga aktif dalam kegiatan sosial dan amal,
        berkontribusi pada masyarakat sekitar dan menciptakan dampak
        positif. Dengan semangat persaudaraan yang erat dan komitmen
        terhadap pengalaman berkendara yang tak terlupakan, klub motor
        Harley-Davidson Road King Riders menjadi wadah yang unik bagi para
        pecinta petualangan dan kebebasan di jalan raya.
      </p>
    </div>
  </div>
</div>
@endsection
