<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/image/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>assets/image/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>assets/image/favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>assets/image/favicon/site.webmanifest" />
    <link rel="mask-icon" href="<?=base_url()?>assets/image/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <style>
        
        #hero {
        background: url('<?= base_url("assets/image/hero2.jpg") ?>') top center;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/main.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/styles/responsive.css" />
  </head>
  <body>
    <nav id="nav" class="navbar navbar-expand-lg sticky-top py-2 shadow">
      <div class="container gap-3">
        <a class="navbar-brand" href="#">
          <img src="<?=base_url()?>assets/image/marin_logo 1.svg" width="90" alt="Logo" class="d-inline-block align-text-top" />
        </a>
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
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav fw-semibold gap-3">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#keunggulan">Keunggulan</a>
            <a class="nav-link" href="#berita">Berita</a>
            <a class="nav-link" href="#tentang">Tentang</a>
            <a class="nav-link" href="#kontak">Kontak</a>
          </div>
        </div>
      </div>
    </nav>

    <main id="home">
      <section id="hero" class="d-flex justify-content-center align-items-center vh-100 p-6">
        <div class="container position-relative">
          <div class="col-md-6">
            <h1 class="fw-bold mb-4">MARIN - Aplikasi Teknologi untuk Kemajuan Nelayan</h1>
            <p class="mb-4">
              Aplikasi terpercaya yang memberikan<br />
              informasi terkini dan membantu meningkatkan kesejahteraan nelayan Indonesia.
            </p>
            <a href="<?=base_url('index.php/Login')?>" class="btn btn-yellow me-3 my-3 mb-4">Get Started</a>
            <a href="<?=base_url('index.php/register')?>" class="btn btn-outline-light me-3 my-3 mb-4">Sign Up</a>
          </div>
        </div>
      </section>

      <section id="keunggulan" class="sections-bg-gray p-6">
        <div class="sections-header text-center d-flex justify-content-center align-items-center flex-column">
          <h2 class="fw-bold">Alasan Memilih Kami</h2>
          <p>
            Pilihan yang tepat untuk kemajuan sektor perikanan: <br />
            MARIN, solusi teknologi yang mendukung kesejahteraan nelayan Indonesia.
          </p>
        </div>

        <div class="container text-center mt-5 d-flex flex-column align-items-center justify-content-center">
          <div class="row mb-3 g-3">
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-hand-pointer icon-left"></i>
                <span>Mudah Digunakan</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-cloud icon-left"></i>
                <span>Informasi Maritim</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-comment icon-left"></i>
                <span>24/7 Support</span>
              </div>
            </div>
          </div>
          <div class="row mb-3 g-3">
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-lock icon-left"></i>
                <span>Keamanan Data</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-desktop icon-left"></i>
                <span>Uji Coba Gratis</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="rounded-circle fa-solid fa-circle-check icon-left"></i>
                <span>Harga Bersaing</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="berita" class="sections-bg-navy p-6">
        <div class="container">
          <div class="sections-header text-center d-flex justify-content-center align-items-center flex-column">
            <h2 class="fw-bold">Berita</h2>
            <p>Menyajikan berita terbaru dan informasi terkait kemaritiman Indonesia untuk menjaga nelayan tetap terhubung dengan perkembangan sektor perikanan.</p>
          </div>
          <div id="card" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4"></div>
        </div>
      </section>

      <section id="tentang" class="sections-bg-gray p-6">
        <div class="container">
          <div class="sections-header text-center d-flex justify-content-center align-items-center flex-column">
            <h2 class="fw-bold">Tentang Kami</h2>
            <p class="fw-semibold">Kami adalah tim yang berkomitmen untuk memajukan sektor perikanan dengan mengembangkan solusi teknologi yang memberdayakan nelayan Indonesia.</p>
          </div>

          <div class="row text-center">
            <div class="col-xl-3 col-sm-6 mt-5">
              <div class="bg-white rounded shadow py-5 px-4">
                <img src="<?=base_url()?>assets/image/alfi.jfif" alt="Alfisyhari" class="team-photo img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                <h5 class="mb-0">Alfisyhari</h5>
                <span class="small text-uppercase text-muted">Front End Developer</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item">
                    <a href="https://github.com/alfisyhari" target="_blank" class="social-link"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/alfsyhri_/" target="_blank" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/alfisyhari/" target="_blank" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mt-5">
              <div class="bg-white rounded shadow py-5 px-4">
                <img src="<?=base_url()?>assets/image/johan.png" alt="Johan Reza Fauzi" class="team-photo img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                <h5 class="mb-0">Johan Reza Fauzi</h5>
                <span class="small text-uppercase text-muted">Front End Developer</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item">
                    <a href="https://www.github.com/johanrza/"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/johanrza/"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.linkedin.com/in/johanreza/"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mt-5">
              <div class="bg-white rounded shadow py-5 px-4">
                <img src="<?=base_url()?>assets/image/ramin.jpg" alt="Moch. Ramin" class="team-photo img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                <h5 class="mb-0">Moch. Ramin</h5>
                <span class="small text-uppercase text-muted">Support System</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mt-5">
              <div class="bg-white rounded shadow py-5 px-4">
                <img src="<?=base_url()?>assets/image/arif.jpg" alt="Muhammad Arif" class="team-photo img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" />
                <h5 class="mb-0">Muhammad Arif</h5>
                <span class="small text-uppercase text-muted">Support System</span>
                <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="kontak" class="mx-auto sections-bg-navy p-6">
        <div class="container">
          <h2 class="mb-5 fw-bold text-center">Kontak Kami</h2>

          <div id="alert-successful" class="alert alert-success alert-dismissible fade show mx-auto d-none" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i>
            <strong>Terima Kasih!</strong> Pesan berhasil dikirim dan tunggu balasan dari kami.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <div id="alert-unsuccessful" class="alert alert-danger alert-dismissible fade show mx-auto d-none" role="alert">
            <i class="fa-solid fa-circle-xmark me-2"></i>
            <strong>Gagal Terkirim!</strong> Mohon maaf terjadi kesalahan saat mengirim pesan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <div class="row my-1 box-shadow bg-body-tertiary">
            <div class="col-md-4 p-0">
              <img src="<?=base_url()?>assets/image/contact-img.jpg" alt="Contact Image" class="img-fluid" />
            </div>
            <div class="form col-md-8 px-5">
              <form class="w-100" name="submit-to-google-sheet">
                <div class="mb-3">
                  <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" required />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="off" required />
                </div>
                <div class="mb-3">
                  <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" autocomplete="off" required />
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" rows="3" name="message" placeholder="Enter your message" autocomplete="off" required></textarea>
                </div>

                <button type="submit" id="btn-submit" class="btn btn-yellow w-100 p-3">Submit</button>

                <button class="btn btn-yellow w-100 p-3 d-none" id="btn-loading" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer id="footer" class="footer sections-bg-gray">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="<?=base_url()?>assets/" class="footer-title d-flex align-items-center">
              <span>Marin</span>
            </a>
            <p>Aplikasi terpercaya yang memberikan informasi terkini dan membantu meningkatkan kesejahteraan nelayan Indonesia.</p>
            <div class="social-links d-flex mt-4">
              <a href="https://github.com/johanrza/CapstoneProjectSIB4" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Navigasi</h4>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#keunggulan">Keunggulan</a></li>
              <li><a href="#berita">Berita</a></li>
              <li><a href="#tentang">Tentang</a></li>
              <li><a href="#kontak">Kontak</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6 footer-links">
            <h4>Get Started</h4>
            <ul>
              <li><a href="<?=base_url('index.php/login')?>">Sign In</a></li>
              <li><a href="<?=base_url('index.php/register')?>">Sign Up</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              Jakarta Selatan<br />
              DKI Jakarta <br />
              <strong>Email:</strong> infomarinteams@gmail.com<br />
            </p>
          </div>
        </div>
      </div>
      <div class="container mt-4 text-center">
        <div class="copyright">
          &copy; Copyright 2023 <strong><span>Marin</span></strong
          >. All Rights Reserved
        </div>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
    <script src="<?=base_url()?>assets/scripts/navigation.js"></script>
    <script src="<?=base_url()?>assets/scripts/article.js" type="module"></script>
    <script src="<?=base_url()?>assets/scripts/contact-submit.js"></script>
  </body>
</html>
