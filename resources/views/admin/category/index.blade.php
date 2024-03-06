@include('layouts.header')
<br>
<h1 style="color: #AF8F66"><i>All Categories</i></h1>
<button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #54a054b1 " >
    Add Category
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
                <form action="{{ route('categories.store') }}" method="post"
                    enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                    style="width: 90%; max-width: 50rem;">
                       @csrf
                    <h1 class="text-center pb-5 display-4 fs-3">
                        Add New Category
                    </h1>

                    <div class="mb-3">
                        <label class="form-label">Name of the Category</label>
                        <input type="text" class="form-control border" placeholder="Enter a title"
                            name="name">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>  
                          @enderror
                    </div>

    
                                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn "style="background-color: #54a054b1 " >Add Category</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<table id="fresh-table" class="table">
    <thead>
        <th data-field="name">ID</th>
      <th data-field="id">Name</th>
     
      
      
    </thead>
    <tbody>
   
      @foreach ($categories as $category)
          
      
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
       
              <!-- <td><button  class="btn btn-default"><a href="edit.php?id=">Edit</a></button></td>-->
              <td>
                <form action="{{ route('categories.edit',$category->id) }}" >
                @method('PUT')
                @csrf
                
                <button type="submit"  class="btn btn-default"><lord-icon
                    src="https://cdn.lordicon.com/ylvuooxd.json"
                    trigger="hover"
                    colors="primary:#9ce5f4,secondary:#000000,tertiary:#000000,quaternary:#a5e830"
                    style="width:30px;height:30px">
                </lord-icon></button>
               </form>
            </td> 
              <td>
                <form action="{{ route('categories.destroy',$category->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button  class="btn btn-default"><lord-icon
                    src="https://cdn.lordicon.com/skkahier.json"
                    trigger="hover"
                    style="width:30px;height:30px">
                </lord-ico></button>
            </form>
        </td>
    </tr> 
    @endforeach
 
  </div>
      
     
    
    </tbody>
  </table>
</div>

    </div>


    
    

   
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>