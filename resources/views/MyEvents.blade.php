@include('layouts.nav')
<h1>Événements créés par {{ $user->name }}</h1>

<ul>
    @foreach ($createdEvents as $event)
        <li>{{ $event->address }}</li>
    @endforeach
</ul>