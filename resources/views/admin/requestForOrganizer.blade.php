@include('layouts.header')

    <h1>Organizer Requests</h1>

 
<table id="fresh-table" class="table">
    <thead>
        <th data-field="name">ID</th>
        <th data-field="name">Name</th>
        <th data-field="name">Email</th>
        <th data-field="name">Action</th>
     
      
      
    </thead>
    <tbody>
   
      @foreach ($requests as $request)
          
      
    <tr>
        <td>{{ $request->id}} </td>
        <td>{{ $request->name}} </td>
        <td>{{ $request->email}} </td>
        <td><a href="{{ route('AcceptOrganizer',$request->id) }}" class="accept" data-toggle="modal"><i
            class="material-icons" data-toggle="tooltip" title="Accept"
            style="color: green;font-size: 30px;">check_circle</i>
    </a>
        <a href="{{ route('RejectOrganizer',$request->id) }}" class="reject" data-toggle="modal">
            <i class="material-icons" data-toggle="tooltip" title="Reject" style="color: red;font-size: 30px;">cancel</i>
        </a>
    </td>
    </tr> 
    @endforeach
 
  </div>
      
     
    
    </tbody>
  </table>