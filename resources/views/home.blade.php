{{-- 
@include('layouts.nav') --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
</head>
{{-- <style>
  #header {
  background: url(images/festivalfeat.jpg) center center / cover no-repeat ;
}
</style>
<body>
@include('layouts.nav')
     <section id="header" class="jumbotron text-center">
       <h1 class="display-3">FOREST</h1>
       <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
     
  </section>
    
  <section id="gallery">
    <div class="container">
      <div class="row">
      <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Sunset</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
         <a href="" class="btn btn-outline-success btn-sm">Read More</a>
          <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
        </div>
       </div>
      </div>
    <div class="col-lg-4 mb-4">
    <div class="card">
        <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Sunset</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
         <a href="" class="btn btn-outline-success btn-sm">Read More</a>
          <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
        </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Sunset</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
         <a href="" class="btn btn-outline-success btn-sm">Read More</a>
          <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
        </div>
       </div>
      </div>
    </div>
  </div>
  </section>
   --}}
   <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>

              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>

          <li><a href="contact.html">Contact</a></li>
          <li><a href="index.html" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
</body>
</html>

    {{-- <section id="billboard" class="overflow-hidden">
     
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="banner-item image" style="background-image: url(images/festivalfeat.jpg); background-repeat: no-repeat; background-position: right; height: 682px;">
                    <div class="banner-content padding-large">
                      <h3 class="display-1 text-uppercase text-dark pb-2">Evento a unique <br>experience in event</h3>
                      <p>Aliquet donec ut arcu risus amet mattis diam gravida. Ac vestibulum quis proin in aliquam et et auctor. Amet urna est arcu euismod egestas morbi nunc lacus. Nec id rutrum mauris commodo habitant amet quisque. Velit ornare pellentesque facilisi in odio nibh.</p>                      
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
      <div class="swiper-pagination position-absolute"></div>
    </section> --}}


   



    <div class="container my-5">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
          {{-- @foreach ($events as $event) --}}
              <div class="col">
                  {{-- <a href="{{ route('show.event', $event->id) }}" class="card border border-gray-200 rounded-xl shadow hover:shadow-xl text-decoration-none"> --}}
                      <img src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_640.jpg" class="card-img-top rounded-t-lg" alt="">
                      <div class="card-body">
                          {{-- <h5 class="card-title mb-2 text-2xl font-bold text-gray-900">{{ $event->title }}</h5>
                          <p class="card-text mb-3 text-gray-700">{{ $event->description }}</p> --}}
                          <p class="card-text text-gray-500">
                              <i class="fas fa-money-bill-wave"></i>
                              {{-- @if ($event->price == 0)
                                  <span class="text-2xl font-bold text-gray-900 ml-3">Free</span>
                              @else
                                  Start At
                                  <span class="text-2xl font-bold text-gray-900">{{ $event->price }} MAD</span>
                              @endif --}}
                          </p>
                          <div class="d-flex justify-content-between my-4 text-gray-500">
                              {{-- <span><i class="fas fa-location-dot mr-1"></i>{{ $event->location }}</span> --}}
                              {{-- <span class="{{(($event->total_places - $event->total_reservations) <= 0)? 'text-decoration-line-through text-red-500' : '' ;}}">
                                  <i class="fas fa-chair"></i> {{ $event->total_places - $event->total_reservations }} Left
                              </span> --}}
                          </div>
                          <div class="d-flex justify-content-between my-4 text-gray-500">
                              {{-- <span><i class="fas fa-calendar"></i> {{ $event->date }}</span>
                              <span><i class="fas fa-clock"></i> {{ $event->duration }} (Mins)</span> --}}
                          </div>
                          {{-- <p class="position-absolute top-8 start-0 text-white font-bold bg-blue-600 px-3 py-2 rotate-45">{{ $event->category->title }}</p>
                      </div> --}}
                  </a>
              </div>
          {{-- @endforeach --}}
      </div>
  </div>
  

    
    <section id="collections" class="position-relative padding-large">
      <div class="container-fluid">
        <div class="row">
          <div class="swiper collection-swiper">
            <div class="swiper-wrapper">

              @foreach ($projects as $project)
              <div class="swiper-slide overflow-hidden">
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{ asset('images/wp.jpg') }}" class="card-img-top" alt="..." >
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div> --}}
             :
              {{-- <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="shop.html">Bed Rooms</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="{{ asset('images/product-item6.jpg')}}" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Room</h3>
                          <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique voluptates sint quibusdam.</p>
                          <ul>
                            <li>Various Types of Bedroom</li>
                            <li>Different Size of Bed</li>
                            <li>Comfortable and Clean Room</li>
                          </ul>
                          <a href="#" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  <!-- product-image -->
                  </div>                  
                </div>
              </div>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="shop.html">Kitchens</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="{{ asset('images/product-item7.jpg')}}" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Kitchen</h3>
                          <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique voluptates sint quibusdam.</p>
                          <ul>
                            <li>Various Types of Bedroom</li>
                            <li>Different Size of Bed</li>
                            <li>Comfortable and Clean Room</li>
                          </ul>
                          <a href="#" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  <!-- product-image -->
                  </div>                  
                </div>
              </div>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="shop.html">Guest Rooms</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="{{ asset('images/product-item8.jpg')}}" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Kitchen</h3>
                          <p>Assumenda temporibus quidem ipsam. fuga corporis iusto similique voluptates sint quibusdam.</p>
                          <ul>
                            <li>Various Types of Bedroom</li>
                            <li>Different Size of Bed</li>
                            <li>Comfortable and Clean Room</li>
                          </ul>
                          <a href="#" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  <!-- product-image -->
                  </div>                  
                </div>
              </div> --}}
            {{-- </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    

    @include('layouts.footer')

 

    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> 
   