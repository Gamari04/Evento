<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with('category')->where('status', 'accepted')->paginate(6);
        $categories=Category::all();
        return view('home', compact('events','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $events = Event::create($request->all());
        $events->addMediaFromRequest('image')->toMediaCollection('images');
        $events->update(['status' => 'pending']);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('details',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::all();
     return view('editEvent',compact('event', 'categories'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update($request->except('image'));

        if ($request->hasFile('image')) {
            $event->clearMediaCollection('images');
            $event->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $category = $request->query('category');
       


        $eventsQuery = Event::query();

        if ($query) {
            $eventsQuery->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'like', "%$query%")
                    ->orWhere('place', 'like', "%$query%");
            });
        }


        if ($category && $category != 0) {
            $eventsQuery->whereHas('category', function ($queryBuilder) use ($category) {
                $queryBuilder->where('id', $category);
            });
        }

      
        $events = $eventsQuery->get();

        $eventData = [];

        foreach ($events as $event) {
            $eventData[] = [
                'id' => $event->id,
                'title' => $event->title,
                'place' => $event->place,
                'imageUrl' =>  $event->getFirstMediaUrl('images'),
            ];
        }

        return response()->json($eventData);





    }
}
