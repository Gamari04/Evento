<!DOCTYPE html>
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
                        <div class="card-body w-100 ">
                            {{-- @foreach($artProject->getMedia('images') as $image)
                            <img src="{{ $image->getUrl() }}" alt="project image" class="w-100 h-25">
                        @endforeach --}}
                            <p class="card-text"><strong>
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
                                <div class="modal-body">
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