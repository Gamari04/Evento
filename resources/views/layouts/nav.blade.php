<!DOCTYPE html>
<html>
  <head>
    <title>Furnics Furniture Store</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
  </head>
  <body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <style>
        .cstm-height-card .card-img-top {
  height: 100px;
  object-fit: cover;
}
    </style>
    
    <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('images/EVENTO.svg')}}" class="logo " style="max-width: 120px">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon" width="50" height="50">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/main-logo.png')}}" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link me-4 active " href="/"  >Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#about-us">About Us</a>
                </li>
                @if(auth()->user() && auth()->user()->hasRole('organizer'))
                <li class="nav-item">
                    <a class="nav-link me-4" href="#about-us">My Events</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-4" href="#about-us">New Event</a>
                  </li>
                @endif
                <li class="nav-item">
                    <form method="POST" action="{{ route('organizer') }}" id="organizerRequestForm">
                        @csrf
                           <button type="submit" class="btn btn-primary" id="submitOrganizerRequest">Became Organizer</button>
                    </form>
                  
                    
                </li>
             
              </ul>
              
            </div>
            
          </div>
        </div>
      </nav> 
      <div id="successMessage" style="display: none;" class="alert alert-success mt-3">
        Congratulations! Your request to become an organizer has been successfully submitted. We will review your request soon. Thank you!
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            var submitButton = document.getElementById('submitOrganizerRequest');
            var successMessage = document.getElementById('successMessage');
            var organizerRequestForm = document.getElementById('organizerRequestForm');
    
            submitButton.addEventListener('click', function() {
                // Affichez le message de réussite
                successMessage.style.display = 'block';
                setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
            });
        });
    </script>