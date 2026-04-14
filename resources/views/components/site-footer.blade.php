@php
    $consultationUrl = request()->routeIs('home') ? '#consultation' : route('home') . '#consultation';
@endphp

<footer id="footer" class="footer home-footer">
  <div class="footer-content position-relative">
    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>ECK<span>in</span>TOSH<span>.</span></h3>
            <p>
              1234 Construction Drive <br>
              Building City, ST 12345<br><br>
              <strong>Phone:</strong> +1 (555) 123-4567<br>
              <strong>Email:</strong> contact@eckintosh-construction.com<br>
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigate</h4>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About us</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-3 col-md-3 footer-links">
          <h4>What We Do</h4>
          <ul>
            <li><a href="{{ route('services') }}">New Construction</a></li>
            <li><a href="{{ route('services') }}">Renovation & Fit-Out</a></li>
            <li><a href="{{ route('services') }}">Project Management</a></li>
            <li><a href="{{ route('services') }}">Infrastructure Works</a></li>
            <li><a href="{{ route('service-details') }}">Detailed Service View</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Project Focus</h4>
          <ul>
            <li><a href="{{ route('projects') }}">Residential delivery</a></li>
            <li><a href="{{ route('projects') }}">Commercial upgrades</a></li>
            <li><a href="{{ route('projects') }}">Industrial support works</a></li>
            <li><a href="{{ route('blog') }}">Construction insights</a></li>
            <li><a href="{{ $consultationUrl }}">Request consultation</a></li>
          </ul>
        </div><!-- End footer links column-->

      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ECKINTOSH Construction</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://Eckintosh.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://Eckintosh.com/upconstruction-bootstrap-construction-website-template/ -->
        Designed by <a href="https://Eckintosh.com/">Eckintosh</a> Distributed by <a
          href="https://Eckintosh.com">Eckintosh</a>
      </div>
    </div>
  </div>
</footer>
