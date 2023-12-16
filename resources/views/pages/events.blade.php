@extends('layouts.main')

@section('content')
<div class="container-fluid p-5">
    <div class="position-relative pb-5">
      <h2 class="fw-bold text-center">Events</h2>
      <div
        class="position-absolute rounded start-50 translate-middle-x"
        style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #000"
      ></div>
    </div>
    <h5 class="text-center" style="margin-top: -2rem; padding-bottom: 2rem;">Event-event Yang Kita Selenggarakan</h5>
    <div class="row row-cols-1 row-cols-md-2 g-1">
      <div class="col">
        <div class="shadow border border-0 card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://garditour.co.id/wp-content/uploads/2023/05/BROCHURE-STREET-VIBRATIONS-01-scaled.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Street Vibration Fall Rally 2023</h5>
                <p class="card-text paragraf">CCM mengadakan tour Harley Davidson yang diadakan di Reno, Nevada, USA. Peserta hanya membayar tiket registrasi untuk mendapat pengalaman konvoi bersama klub motor Harley Davidson CCM.</p>
                <p class="card-text"><small class="text-body-secondary">3 Bulan yang Lalu</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="shadow border border-0 card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://www.naikmotor.com/wp-content/uploads/2023/08/Kustomfest-2023_Retro-Future-696x696.jpg" class="img-fluid rounded-start h-100" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Kustomfest 2023</h5>
                <p class="card-text paragraf">Kustomfest 2023 yang digelar tahunan ini mengangkat tema "Retro Future". Hal ini tidak lepas dari sejarah Panjang produk-produk otomotif yang terkategorikan dalam berbagai era.</p>
                <p class="card-text"><small class="text-body-secondary">3 Bulan yang Lalu</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="shadow border border-0 card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://akcdn.detik.net.id/community/media/visual/2021/11/24/harley-davidson-club-indonesia.jpeg?w=700&q=90" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Ride To Bali</h5>
                <p class="card-text paragraf">HDCI akan menggelar acara "Berkibarlah Benderaku" di Nusa Dua, Bali pada 25- 27 November 2023 yang rencananya akan dibuka oleh Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Uno.</p>
                <p class="card-text"><small class="text-body-secondary">6 Bulan yang Lalu</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
