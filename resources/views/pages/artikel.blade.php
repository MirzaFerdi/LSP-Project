@extends('layouts.main')

@section('content')
<div class="container-fluid p-5">
  <div class="position-relative pb-5">
    <h2 class="fw-bold text-center">Artikel</h2>
    <div
      class="position-absolute rounded start-50 translate-middle-x"
      style="bottom: 2.9rem; height: 0.3rem; width: 5rem; background: #000"
    ></div>
  </div>
  <h5 class="text-center" style="margin-top: -2rem; padding-bottom: 2rem;">Berita Terbaru Seputar Klub Motor</h5>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="shadow border border-0 card h-100">
        <img
          src="https://images.unsplash.com/photo-1558980395-be8a5fcb4251?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          class="card-img-top"
          alt="..."
        />
        <div class="card-body">
          <p class="text-body-secondary">10-Desember-2023</p>
          <h5 class="card-title">
            Klub Motor Adalah Tempat yang Cocok untuk Mencari Teman
            dan Koneksi Baru
          </h5>
          <p class="card-text paragraf">
            klub motor merupakan tempat yang cocok untuk mencari teman dan
            koneksi baru, serta bagaimana komunitas ini dapat memperkaya
            kehidupan sosial dan pengalaman berkendara Anda.
          </p>
          <p class="text-end"><a href="#">Baca Selengkapnya</a></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="shadow border border-0 card h-100">
        <img src="https://images.unsplash.com/photo-1541417770319-381fc687373c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="text-body-secondary">05-Desember-2023</p>
          <h5 class="card-title">
            Tips Berkendara bersama Klub Motor:
            Keamanan dan Komunikasi yang Efektif
          </h5>
          <p class="card-text paragraf">
            tips-tips penting tentang berkendara dalam formasi kelompok
            bersama klub motor, termasuk aspek keamanan, komunikasi yang
            efektif, dan tata cara yang perlu diperhatikan agar perjalanan
            bersama menjadi lancar dan aman.
          </p>
          <p class="text-end"><a href="#">Baca Selengkapnya</a></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="shadow border border-0 card h-100">
        <img src="https://images.unsplash.com/photo-1591103796863-ac38edff14b7?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="text-body-secondary">05-Desember-2023</p>
          <h5 class="card-title">
            Klub Motor dan Aksi Sosial: Membawa Dampak Positif bagi
            Masyarakat
          </h5>
          <p class="card-text paragraf">
            klub motor turut berperan dalam aksi sosial dan kegiatan amal
            yang membawa dampak positif bagi masyarakat sekitar. Klub motor
            tidak hanya berkumpul untuk berkendara, tetapi juga untuk
            memberikan kontribusi kepada lingkungan sekitar.
          </p>
          <p class="text-end"><a href="#">Baca Selengkapnya</a></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="shadow border border-0 card h-100">
        <img src="https://images.unsplash.com/photo-1634818013962-fff92d6ad0e9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="..." />
        <div class="card-body">
          <p class="text-body-secondary">30-Oktober-2023</p>
          <h5 class="card-title">
            Bergabung dengan Klub Motor: Manfaat dan Pengalaman yang Akan
            Anda Dapatkan
          </h5>
          <p class="card-text paragraf">
            manfaat bergabung dengan klub motor, seperti kesempatan untuk
            menjalin persahabatan, berbagi pengalaman, dan merasakan
            kebersamaan dalam komunitas yang memiliki minat yang sama.
          </p>
          <p class="text-end"><a href="#">Baca Selengkapnya</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
