<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nauthemes.net/html/naar/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Oct 2025 05:29:25 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>A.K. Fire Engineering - gallery</title>

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicons -->
    <link rel="icon" href="assets/images/logo/favicon.ico" type="image/png">
    <link rel="icon" href="assets/images/logo/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="assets/images/logo/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/images/logo/android-chrome-192x192.png" sizes="192x192" type="image/png">
    <link rel="icon" href="assets/images/logo/android-chrome-512x512.png" sizes="512x512" type="image/png">
    <link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.png" sizes="180x180">
    <link rel="manifest" href="assets/images/logo/site.webmanifest">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color.css" title="color" /><!-- Color -->
    <link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="color2" /> <!-- Color2 -->
    <link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="color3" /> <!-- Color3 -->
    <link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="color4" /> <!-- Color4 -->
</head>

<body itemscope>
    <div class="preloader">
        <div class="loader-inner ball-scale-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div><!-- Preloader -->
    <main>

    <style>
  /* Custom gallery styles */
  .gallery-section { padding: 50px 0; background: #f8f9fa; }
  .gallery-title { font-weight: 700; letter-spacing: -0.5px; margin-bottom: 18px; }
  .gallery-sub { color: #6c757d; margin-bottom: 30px; }

  .gal-card {
    border: 0;
    overflow: hidden;
    border-radius: 12px;
    position: relative;
    transition: transform .35s ease, box-shadow .35s ease;
    box-shadow: 0 6px 20px rgba(25, 25, 25, .06);
  }

  .gal-card img {
    display: block;
    width: 100%;
    height: 280px;                /* base height on desktop */
    object-fit: cover;
    transition: transform .6s ease;
    will-change: transform;
  }

  .gal-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(25,25,25,.12);
  }

  .gal-card:hover img { transform: scale(1.06); }

  .gal-overlay {
    position: absolute;
    inset: 0;
    display:flex;
    align-items:flex-end;
    padding: 14px;
    background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,.45) 100%);
    color: #fff;
    opacity: 0;
    transition: opacity .25s ease;
  }

  .gal-card:hover .gal-overlay { opacity: 1; }

  .gal-caption {
    font-size: 0.95rem;
    margin: 0;
    text-shadow: 0 2px 6px rgba(0,0,0,.45);
  }

  .gal-action {
    margin-left: auto;
    display:flex;
    gap:8px;
  }

  .gal-action .btn {
    padding: 6px 9px;
    border-radius: 8px;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.14);
    color: #fff;
    backdrop-filter: blur(4px);
  }

  /* responsive adjustments */
  @media (min-width: 992px) {
    .gal-card img { height: 320px; }
  }
  @media (max-width: 575px) {
    .gal-card img { height: 180px; }
  }

  /* small decorative header underline */
  .underline {
    height:4px;
    width:56px;
    background: linear-gradient(90deg,#ff6b6b,#ffb86b);
    border-radius: 3px;
    margin-top:8px;
  }
</style>

        <!-- header -->
        <?php include 'header.php' ?>


        <section>
            <div class="gap black-layer opc8 overlap144">
                <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
                <div class="container">
                    <div class="pg-tp-wrp">
                        <h1 itemprop="headline">Gallery</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                    </div><!-- Page Top Wrap -->
                </div>
            </div>
        </section>
        <section class="gallery-section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="gallery-title">Our Gallery</h2>
      <p class="gallery-sub">Fire safety projects, installations and training — a visual tour.</p>
      <div class="underline mx-auto"></div>
    </div>

    <!-- Grid -->
    <div class="row g-3">
      <!-- Example item: duplicate & change src/caption for each image -->
      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g14.jpg" data-caption="Fire Safety Tips — Project 14">
          <img src="assets/images/gallery/g14.jpg" alt="Fire Safety Tips - 14" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Fire Safety Tips</p>
              <small>Installation overview</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g1.jpg" data-caption="Fire Safety Tips — Project 1">
          <img src="assets/images/gallery/g1.jpg" alt="Fire Safety Tips - 1" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Extinguisher Training</p>
              <small>On-site demo</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- Repeat for all images -->
      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g2.jpg" data-caption="Fire Safety Tips — Project 2">
          <img src="assets/images/gallery/g2.jpg" alt="Fire Safety Tips - 2" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Alarm System</p>
              <small>System wiring</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- add remaining images similarly -->
      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g3.jpg" data-caption="Fire Safety Tips — Project 3">
          <img src="assets/images/gallery/g3.jpg" alt="Fire Safety Tips - 3" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Hydrant Check</p>
              <small>Maintenance</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- Copy/paste and update data-src/data-caption/img paths for g4..g13 -->
      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g4.jpg" data-caption="Fire Safety Tips — Project 4">
          <img src="assets/images/gallery/g4.jpg" alt="g4" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Demo</p>
              <small>Site visit</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <!-- Continue adding items for g5..g13 -->
      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g5.jpg" data-caption="Project 5">
          <img src="assets/images/gallery/g5.jpg" alt="g5" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Training</p>
              <small>Group session</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g6.jpg" data-caption="Project 6">
          <img src="assets/images/gallery/g6.jpg" alt="g6" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Panel Setup</p>
              <small>Control panel</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g7.jpg" data-caption="Project 7">
          <img src="assets/images/gallery/g7.jpg" alt="g7" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Inspection</p>
              <small>Checklist</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g8.jpg" data-caption="Project 8">
          <img src="assets/images/gallery/g8.jpg" alt="g8" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Installation</p>
              <small>Ceiling units</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g9.jpg" data-caption="Project 9">
          <img src="assets/images/gallery/g9.jpg" alt="g9" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Training Drill</p>
              <small>Evacuation</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g10.jpg" data-caption="Project 10">
          <img src="assets/images/gallery/g10.jpg" alt="g10" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Safety Signage</p>
              <small>Placement</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g11.jpg" data-caption="Project 11">
          <img src="assets/images/gallery/g11.jpg" alt="g11" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Fire Drill</p>
              <small>Staff practice</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g12.jpg" data-caption="Project 12">
          <img src="assets/images/gallery/g12.jpg" alt="g12" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Maintenance</p>
              <small>Device testing</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <figure class="gal-card" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#galleryModal" data-src="assets/images/gallery/g13.jpg" data-caption="Project 13">
          <img src="assets/images/gallery/g13.jpg" alt="g13" loading="lazy">
          <figcaption class="gal-overlay">
            <div>
              <p class="gal-caption mb-1">Workshop</p>
              <small>Hands-on</small>
            </div>
            <div class="gal-action">
              <button class="btn btn-sm" aria-label="View">🔍</button>
            </div>
          </figcaption>
        </figure>
      </div>

    </div>
  </div>
</section>

<!-- Modal / Lightbox -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-sm-down modal-xl modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn btn-dark position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close">✕</button>
        <img id="galleryModalImg" src="" alt="" class="w-100 d-block rounded">
        <div id="galleryModalCaption" class="text-white mt-2 small p-3"></div>
      </div>
    </div>
  </div>
</div>


        <!-- footer -->
        <?php include 'footer.php' ?>


    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/downCount.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/styleswitcher.js"></script>
    <script src="assets/js/fancybox.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4XGd9qpQIEkbfL6QpR6qk2jQ9S9_5Uww"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // When any .gal-card is clicked, populate modal image and caption
  document.querySelectorAll('.gal-card').forEach(card => {
    card.addEventListener('click', function () {
      const src = this.getAttribute('data-src') || this.querySelector('img').src;
      const caption = this.getAttribute('data-caption') || this.querySelector('img').alt;
      const modalImg = document.getElementById('galleryModalImg');
      const modalCaption = document.getElementById('galleryModalCaption');

      modalImg.src = src;
      modalImg.alt = caption;
      modalCaption.textContent = caption;
    });

    // keyboard accessibility: Enter opens modal
    card.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); this.click(); }
    });
  });
</script>
</body>

<!-- Mirrored from nauthemes.net/html/naar/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Oct 2025 05:29:26 GMT -->

</html>