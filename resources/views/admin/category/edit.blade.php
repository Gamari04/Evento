@include('admin.header')

<section class="section">
    <div class="row">
        <div class="col-lg-10 mx-auto p-4">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center fs-4">Update the categorie</h5>
                    <form action="{{ route('categories.update',$category->id) }}" method="post"
                    enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                    style="width: 90%; max-width: 50rem;">
                       @csrf
                       @method('PUT')
                    <h1 class="text-center pb-5 display-4 fs-3">
                        Add New Category
                    </h1>

                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control border" placeholder="Enter a name"
                            name="name" value="{{old('name',$category->name)}}">
                            @error('title')
                              <div class="text-danger">{{ $message }}</div>  
                            @enderror
                    </div>

                    
                   
                        <button type="submit" class="btn "style="background-color: #54a054b1 " >Add Category</button>
                 
                </form>
                 
                </div>
            </div>
        </div>
    </div>
</section>