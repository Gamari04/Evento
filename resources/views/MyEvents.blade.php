@include('layouts.nav')

<body>
    <h1>My Events</h1>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Status</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($createdEvents as $event)
            <tr>
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
             <span class="badge bg-success">Accepted</span>
             <span class="badge bg-warning text-dark">Pending</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
