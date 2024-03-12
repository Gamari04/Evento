@include('layouts.header')

<h1 style="color: #AF8F66"><i>All Events</i></h1>

<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>
                <div class="d-flex align-items-center">
                    <img
                        src="{{ $event->getFirstMediaUrl('images') }}"
                        alt=""
                        style="width: 100px; height: 100px"
                        class=""
                    />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">{{ $event->title}}</p>
                        <p class="text-muted mb-0">{{ $event->description }}</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1">Software engineer</p>
                <p class="text-muted mb-0">IT department</p>
            </td>
            <td>
                <a href="{{ route('AcceptEvent',$event->id) }}" class="accept" data-toggle="modal">
                <i
                class="material-icons" data-toggle="tooltip" title="Accept"
                style="color: green;font-size: 30px;">check_circle</i>
        </a>
             <a href="{{ route('RejectEvent',$event->id) }}" class="reject" data-toggle="modal"> 
                <i class="material-icons" data-toggle="tooltip" title="Reject" style="color: red;font-size: 30px;">cancel</i>
            </a>
        </td>
            
        </tr>
        @endforeach
    </tbody>
</table>




<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
