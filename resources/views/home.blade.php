
@include('layouts.nav')
    <section id="billboard" class="overflow-hidden">
     
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
    </section>


   



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

              {{-- @foreach ($projects as $project)
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
            </div>
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
  </body>
</html>