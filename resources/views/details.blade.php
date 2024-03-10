{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  

</head>
<body>
    @include('layouts.nav')
    <div class="container-fluid">
        
        <div class="row">
           
            <div class="col-md-12" style="background-image: url({{ $event->getFirstMediaUrl('images') }});background-position: right:20%; height: 682px; ">
                
                <div class="d-flex justify-content-center align-items-center h-100" >
                    <div class="card  text-dark w-50 h-75 "style="background-color:  #E0CBBB; ">
                        <div class="card-body w-100 "> --}}
                            {{-- @foreach($artProject->getMedia('images') as $image)
                            <img src="{{ $image->getUrl() }}" alt="project image" class="w-100 h-25">
                        @endforeach --}}
                            {{-- <p class="card-text"><strong>
                            </strong> </p>
                            <p class="card-text"><strong>Title:
                        </strong><i>{{ $event->title }}</i> </p>
                        
                            <p class="card-text"><strong>Description:</strong><i>{{ $event->description }}</i></p>
                            <p class="card-text"><strong>Date of Start:</strong> <i>{{ $event->start_date }}</i></p>
                            <p class="card-text"><strong>Date of End:</strong> <i>{{ $event->end_date }}</i></p>
                            
                                <p><strong class="text-secondary">Category:</strong> <i>{{ $event->category->name }} </i></p> 
                            
                            <p><strong class="text-secondary">Address : </strong><i>{{ $event->address }}  </i> 
                            </p>
                            
           
                           
                            
                        </div>
                      
                           
                           
                    
                     
                           <button type="button" class="btn text-dark mx-auto mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
                            Reserve Now
                         </button>
                    
                    
                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body"> --}}
                                    {{-- <form action="{{ route('assign',$artProject->id) }}" method="POST"
                                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                                        style="width: 90%; max-width: 50rem;">
                                           @csrf
                                        <h1 class="text-center pb-5 display-4 fs-3">
                                            Add New Artists
                                        </h1>
                
                
                                       <div>
                                        <label for="partners">Select Artists :</label><br>
                                        <select class="js-example-basic-multiple select2 " name="users[]" multiple="multiple" style="width: 100%;">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}" >
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                       </div>
                
                
                                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" >Add Artist</button>
                                        </div>
                                    </form> --}}
                                    {{-- <form method="POST" action="{{ route('reservation', Auth::user()) }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">How Many Tickets You Need ?</label>
                                            <input type="text" class="form-control border" placeholder="Enter Number of Tickets"
                                                name="number_ticket">
                                                
                                        </div>
                                        <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                                        <input type="hidden" class="form-control" name="event_id" value="{{ $event->id }}">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button>
                                    </div>
                                    </form>
                                </div>
                
                            </div>
                        </div>
                    </div>
                
                
                    </div>
               
                </div>
            </div>
        </div>
    </div>
  
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
           
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->

  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 <body>
    @include('layouts.nav')
    {{-- <section class="vh-100" style="background-color: #9de2ff;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <div class="d-flex text-black">
                    <div class="flex-shrink-0"> --}} 
                      {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                        alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;"> --}}
{{-- 
                        @foreach($company->getMedia('images') as $image)
                        <img src="{{ $image->getUrl() }}"  alt="Generic placeholder image" class="img-fluid"
                        style="width: 180px; border-radius: 10px;">
                    @endforeach
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-1">{{ $company->name}}</h5>
                      <p class="mb-2 pb-1" style="color: #4e4d4d;">{{ $company->created_at}}</p><br>
                      <p class="mb-2 pb-1">{{ $company->description}}</p>
                      <p class="mb-2 pb-1">More about us :</p>
                      @foreach($company->getMedia('videos') as $video)
                      <video width="320" height="240" controls>
                          <source src="{{ $video->getUrl() }}" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>
                  @endforeach --}}
                      {{-- <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                        style="background-color: #efefef;">
                        <div>
                          <p class="small text-muted mb-1">Articles</p>
                          <p class="mb-0">41</p>
                        </div>
                        <div class="px-3">
                          <p class="small text-muted mb-1">Followers</p>
                          <p class="mb-0">976</p>
                        </div>
                        <div>
                          <p class="small text-muted mb-1">Rating</p>
                          <p class="mb-0">8.5</p>
                        </div>
                      </div> --}}
                      {{-- <div class="d-flex pt-1">
                        <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                        <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      {{-- <div class="container-fluid">
        
        <div class="row">
           
            <div class="col-md-12" >
        
                <div class="d-flex justify-content-center align-items-center h-100" >
                    <div class="card  text-dark w-50 h-75 ">
                        <div class="card-body w-100 ">
                            @foreach($company->getMedia('images') as $image)
                            <img src="{{ $image->getUrl() }}" alt="project image" class="w-100 h-25">
                        @endforeach
                            <p class="card-text"><strong>
                            </strong> </p>
                            <p class="card-text"><strong>Title:
                        </strong><i>{{ $company->name}}</i> </p>
                        
                            <p class="card-text"><strong>Description:</strong><i>{{ $company->description }}</i></p>
                            <p class="card-text"><strong>Date of Start:</strong> <i>{{ $company->created_at}}</i></p>
                            <p class="card-text"><strong>More about us:</strong></p>
                            @foreach($company->getMedia('videos') as $video)
                            <video width="320" height="240" controls>
                                <source src="{{ $video->getUrl() }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endforeach
                            <p class="card-text"><strong>About the Partner : </strong> <br>
                               
                            
           
                            <p class="card-text"><strong>Artists : </strong>
                            
                            </p>
                        </div>

                    </div>
                    
                
                  
                
                
                    
               
                </div>
            </div>
        </div>
    </div> --}}



    <section class="h-100 gradient-custom-2"style="background-color: #faf0e6; ">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-9 col-xl-7">
            <div class="card">
              <div class=" d-flex flex-column" >
                
                <img src="{{ $event->getFirstMediaUrl('images') }}" alt="Generic placeholder image" class=""
                style="width: 100%;">
        
              </div>  
                {{-- <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;"> --}}
                  {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                    alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                    style="width: 150px; z-index: 1"> --}}
                  {{-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                    style="z-index: 1;">
                    Edit profile
                  </button> --}}
                {{-- </div> --}}
            
              {{-- </div> --}}
              <div class="p-4 text-black" style="background-color: #f8f9fa;">
               
                {{-- <div class="d-flex justify-content-end text-center py-1">
                  <div>
                    <p class="mb-1 h5">253</p>
                    <p class="small text-muted mb-0">Photos</p>
                  </div>
                  <div class="px-3">
                    <p class="mb-1 h5">1026</p>
                    <p class="small text-muted mb-0">Followers</p>
                  </div>
                  <div>
                    <p class="mb-1 h5">478</p>
                    <p class="small text-muted mb-0">Following</p>
                  </div>
                </div> --}}
              </div>
              <div class="card-body p-4 text-black">
                <div class="mb-5">
                  <h1>{{ $event->title}}</h1>
                  <p class="ray text-secondary">{{ $event->category->name}}</p>
                  <p class="text-secondary">{{ $event->address}}</p>    
           
                 <p>Available Seats :<p class="text-secondary">{{ $event->available_seats}}</p></p>
                  <p class="lead fw-normal mb-1">About</p>
                  <div class="p-4" style="background-color: #f8f9fa;">
                    <p class="font-italic mb-1">{{ $event->description}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vitae iste adipisci optio, numquam voluptatum est ea quod? Qui et vero veniam, eos at delectus ex perspiciatis cumque culpa ducimus?</p>
                  
   
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <button type="button" class="btn text-dark mx-auto mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
                        Reserve Now
                     </button>
               

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 
              
                 <form method="POST" action="{{ route('reservation', Auth::user()) }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">How Many Tickets You Need ?</label>
                        <input type="text" class="form-control border" placeholder="Enter Number of Tickets"
                            name="number_ticket">
                            
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
                    <input type="hidden" class="form-control" name="event_id" value="{{ $event->id }}">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Buy Now</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>


</div>

</div>
</div>
</div>
</div>


                </div>
               
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
           
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>