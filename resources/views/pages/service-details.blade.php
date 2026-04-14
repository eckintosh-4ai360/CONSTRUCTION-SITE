<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Construction Services - ECKINTOSH Professional Solutions</title>
  <meta content="Detailed information about ECKINTOSH Construction services including new construction, renovations, and project management." name="description">
  <meta content="construction services, building services" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
  <x-site-header />

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/breadcrumbs-bg.jpg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Service Details</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Service Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="active">New Construction</a>
              <a href="#">Renovations</a>
              <a href="#">Project Management</a>
              <a href="#">Repairs</a>
              <a href="#">Design Services</a>
            </div>

            <h4>Professional Construction Excellence</h4>
            <p>ECKINTOSH Construction delivers comprehensive services combining quality craftsmanship with innovative project management. We handle projects of all sizes with precision and integrity.</p>
          </div>

          <div class="col-lg-8">
            <img src="{{ asset('assets/img/services.jpg') }}" alt="" class="img-fluid services-img">
            <h3>Complete Construction Services for Your Project</h3>
            <p>
              ECKINTOSH Construction provides end-to-end construction services tailored to your specific requirements. Our experienced team manages every phase of your project with professional expertise and attention to detail.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Comprehensive project planning and design consultation</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Expert construction management and oversight</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Quality assurance throughout construction phases</span></li>
            </ul>
            <p>
              We specialize in residential, commercial, and industrial construction projects. Our commitment to safety, compliance, and customer satisfaction ensures your project succeeds on schedule and within budget.
            </p>
            <p>
              From initial concept through final completion, ECKINTOSH Construction delivers reliable construction solutions with professional workmanship and proven expertise. Contact us today for your project consultation and free quote.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

  </main><!-- End #main -->
  <x-site-footer />

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>



