
@include('layouts.header')

   
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color: #787d62">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary">Totale Reservations</b>
                                    <h4 class="mb-0"> {{  $totalReservations }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                    last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape  shadow text-center border-radius-xl mt-n4 position-absolute" style="background-color: #FFDAB9	">
                                    <i class="material-icons opacity-10">leaderboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary">Total Events</b >
                                    <h4 class="mb-0">{{ $totalEvents }}</h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than
                                    last month</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape  shadow-success text-center border-radius-xl mt-n4 position-absolute"  style="background-color: #D2B48C		">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary ">Total Categories</b>
                                    <h4 class="mb-0 ">{{ $totalCategories }}</h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than
                                    yesterday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape  shadow-info text-center border-radius-xl mt-n4 position-absolute" style="background-color: #EEE8AA	">
                                    <i class="material-icons opacity-10">person_add</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary ">All Users</b>
                                    <h4 class="mb-0 ">{{  $totalUsers }}</h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">Just updated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    

        <div class="fresh-table full-color-orange">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  
    <!-- <div class="col-lg-3 col-sm-6 col-12 mt-3 mb-3">
                  <button class="btn bg-gradient-success w-50 mb-0 toast-btn" type="button" data-target="successToast"><a href="form.php">ADD Client</a></button>
                </div> -->
{{--   

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="id">ID</th>
      <th data-field="name">Fullname</th>
      <th data-field="Email">Email</th>
      <th data-field="Role">Role</th>
      <th data-field="Role">Actions</th>
      
    </thead>
    <tbody>
   
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email }}</td>
        <td> @foreach ($user->roles as $role)
            {{ $role->name }}
        @endforeach</td>
              <!-- <td><button  class="btn btn-default"><a href="edit.php?id=">Edit</a></button></td>-->
              <td>
                <form action="{{ route('users.edit',$user->id) }}" >
                @method('PUT')
                @csrf
                
                <button type="submit"class="btn btn-default"><i class="material-icons text-sm me-2">edit</i></button>
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
  </table> --}}
</div>

    </div>


    
    

   
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>