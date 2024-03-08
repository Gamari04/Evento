@include('layouts.header')

<br>
<h1 style="color: #AF8F66"><i>All Users</i></h1>



<table id="fresh-table" class="table">
    <thead>
        <th data-field="name">ID</th>
      <th data-field="id">Name</th>
      <th data-field="id">Email</th>
      <th data-field="id">Role</th>
      <th data-field="id">Status</th>
     
      
      
    </thead>
    <tbody>
   
      @foreach ($users as $user)
          
      
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email}}</td>
        <td> @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach</td></td>
        <td>{{ $user->status }}</td>
       
              <!-- <td><button  class="btn btn-default"><a href="edit.php?id=">Edit</a></button></td>-->
              <td>
                <form action="{{ route('users.edit',$user->id) }}" >
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
                <form action="{{ route('users.destroy',$user->id)}}" method="post">
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