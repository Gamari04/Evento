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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

</header><!-- End Header -->
@include('layouts.nav')
<!-- ======= Hero Section ======= -->
<style>
  html,
body,
.intro {
  height: 100%;
}

.mask-custom {
  background: rgba(24, 24, 16, .2);
  border-radius: 2em;
  backdrop-filter: blur(15px);
  border: 2px solid rgba(255, 255, 255, 0.05);
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
}
</style>
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(images/festivalfeat.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                            Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                            <section class="intro" >
                              <div class="bg-image h-100" >
                                <div class="mask d-flex align-items-center h-100" style="background-color: rgba(61, 162, 195, 0.1);">
                                  <div class="container">
                                    <div class="card mask-custom p-4">
                                      <div class="card-body">
                                        <p class="h1 font-weight-bold mb-4 text-white">Discover the Amazing City</p>
                                        <div class="row justify-content-center">
                                          <div class="col-md-6 mb-3 mb-md-0">
                                            <div id="basic" class="form-outline form-white">
                                              <input type="text" id="form1" class="form-control form-control-lg" />
                                              <label class="form-label" for="form1">What are you looking for?</label>
                                            </div>
                                          </div>
                                          <div class="col-md-4 mb-3 mb-md-0">
                                            <div id="location" class="form-outline form-white">
                                              <input type="text" id="form2" class="form-control form-control-lg" />
                                              <label class="form-label" for="form2">Location</label>
                                            </div>
                                          </div>
                                          <div class="col-md-2">
                                            <input class="btn  btn-block btn-lg" type="submit" value="Search" style="background-color: #AF8F66"/>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </section>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                            style="background-color: #AF8F66">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                            Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                            Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et
                            tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
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


<section id="gallery">
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div style="width:100%;height:204px;">
                            <img src="{{ $event->getFirstMediaUrl('images') }}" alt=""
                                class="card-img-top "style="max-width:100%;max-height:100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <p class="card-text">{{ $event->category->name }}</p>
                            
                            <a href="{{ route('events.show',$event->id) }}" class="btn btn-outline-success btn-sm">Show Details </a>
                            <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>







</section>


@include('layouts.footer')



<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  const basicAutocomplete = document.querySelector('#basic');
const data = ['Museum', 'Party', 'Restaurant', 'Concert', 'Architecture'];
const dataFilter = (value) => {
  return data.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

new mdb.Autocomplete(basicAutocomplete, {
  filter: dataFilter
});

const locationAutocomplete = document.querySelector('#location');
const dataL = ['Madrid', 'Rome', 'Lisbon', 'Paris', 'London'];
const dataFilterL = (value) => {
  return dataL.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

new mdb.Autocomplete(locationAutocomplete, {
  filter: dataFilterL
});
</script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
