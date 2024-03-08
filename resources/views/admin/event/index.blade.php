@include('layouts.header')

<h1 style="color: #AF8F66"><i>All Events</i></h1>
<button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #E9967A " >
    Add Project
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
                <form action="{{ route('events.store') }}" method="post"
                    enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                    style="width: 90%; max-width: 50rem;">
                       @csrf
                    <h1 class="text-center pb-5 display-4 fs-3">
                        Add New Project
                    </h1>

                    <div class="mb-3">
                        <label class="form-label">Project Title</label>
                        <input type="text" class="form-control border" placeholder="Enter a title"
                            name="title">
                            @error('title')
                              <div class="text-danger">{{ $message }}</div>  
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Project Description</label>
                    <textarea type="text" class="form-control border" placeholder="Enter a description"
                            name="description">
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>  
                          @enderror
                        </textarea>

                    </div>

                   <div>
                    <label for="categories">Sélectionner des partenaires :</label>
                    <select class="form-control border" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                
                   </div>

                   
                    <div class="mb-3">
                        <label class="form-label">Event address</label>
                        <input type="text" class="form-control border" placeholder="Enter the author"
                            name="address">
                            
                    </div>


               

                    <div class="mb-3">
                        <label class="form-label">Date of Start</label>
                        <input type="date" class="form-control border" placeholder="Enter the year of publication"
                            name="start_date">
                            @error('start_date')
                            <div class="text-danger">{{ $message }}</div>  
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of End</label>
                        <input type="date" class="form-control border" placeholder="Enter the year of publication"
                            name="end_date">
                            @error('end_date')
                            <div class="text-danger">{{ $message }}</div>  
                          @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Project image </label>
                        <input type="file" class="form-control border" name="image">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>  
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date of End</label>
                        <input type="number" class="form-control border" placeholder="Enter the year of publication"
                            name="available_seats">
                            @error('available_seats')
                            <div class="text-danger">{{ $message }}</div>  
                          @enderror
                    </div>
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Add Project</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="pdf-list d-flex justify-content--start flex-wrap ">
     @foreach ($events as $event)
         <div class="col-3  card">
       
                <img src="{{ $event->getFirstMediaUrl("images") }}" alt="project image" class="w-75 h-75">
            <div class="card-body">
                <h5 class="card-title">
                   
                
                 
                </h5>
                <p class="card-text">
                    <i><b>{{ $event->title }}
                            
                            <br>
                        </b></i>

                
                {{-- <p>
                  <b>Description : {{ $project->description }}</b> 
                </p> --}}
                <p>
                   <b> Start Date : {{ $event->start_date }}</b>
                </p>
                <p>
                  <b> End Date :{{ $event->end_date }} </b> 
                </p>
                <p>  
                    <b> Partner :
                      
                        {{ $event->category->name }} 
                       
                         </b> 
                       
                  </p>
                  <a href="">
                  <button type="button" class="btn text-dark"  d style="background-color: #E9967A " >
                    Show Details
                </button>
            </a>
                 {{-- <div class="card-footer d-flex justify-content-evenly ">
                    <form action="" >
                        @method('PUT')
                        @csrf
                        
                        <button type="submit"class="btn btn-dark">Edit</button>
                    </form>
                    <form action="" method="post">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit"class="btn btn-secondary">Delete</button>
                    </form>
               
                 </div> --}}
                
         
                <!-- <a href="uploads/files/" class="btn btn-success">Open</a>

                <a href="uploads/files/" class="btn btn-primary"
                    download="">Download</a> -->
            </div>
        </div>
        @endforeach
        
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
