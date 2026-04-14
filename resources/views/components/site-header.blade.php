@php
    $servicesActive = request()->routeIs('services') || request()->routeIs('service-details');
    $projectsActive = request()->routeIs('projects') || request()->routeIs('project-details');
    $blogActive = request()->routeIs('blog') || request()->routeIs('blog-details');
    $startProjectUrl = request()->routeIs('home') ? '#consultation' : route('home') . '#consultation';
@endphp

<header id="header" class="header d-flex align-items-center site-header">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <h1>ECK<span>in</span>TOSH<span>.</span></h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>Home</a></li>
        <li><a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>About</a></li>
        <li><a href="{{ route('services') }}" @class(['active' => $servicesActive])>Services</a></li>
        <li><a href="{{ route('projects') }}" @class(['active' => $projectsActive])>Projects</a></li>
        <li><a href="{{ route('blog') }}" @class(['active' => $blogActive])>Blog</a></li>
        <li><a href="{{ route('contact') }}" @class(['active' => request()->routeIs('contact')])>Contact</a></li>
        <li class="nav-cta"><a href="{{ $startProjectUrl }}">Start a Project</a></li>
      </ul>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->
