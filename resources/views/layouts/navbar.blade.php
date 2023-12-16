    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top">
        <div class="container">
          <a class="navbar-brand fw-bold text-white" href="#">Road King Riders</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="justify-content-end collapse navbar-collapse"
            id="navbarNavAltMarkup"
          >
            <div class="navbar-nav fw-semibold">
              <a class="nav-link" href="{{ Route('home')}}">Home</a>
              <a class="nav-link" href="{{ Route('artikel')}}">Artikel</a>
              <a class="nav-link" href="{{ Route('events')}}">Events</a>
              <a class="nav-link" href="{{ Route('produk')}}">Produk</a>
              <a class="nav-link" href="{{ Route('profile')}}">Profil</a>
              <a class="nav-link" href="{{ Route('contact')}}">Kontak Kami</a>
              <a class="nav-link" href="{{ Route('login')}}">Login</a>
            </div>
          </div>
        </div>
      </nav>
