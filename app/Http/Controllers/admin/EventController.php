<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('category')->where('status', 'pending')->get();
        $categories=Category::all();
        return view('admin.event.index', compact('events','categories'));
    }
    // public function store(StoreEventRequest $request)
    // {
    //     $events = Event::create($request->all());
    //     $events->addMediaFromRequest('image')->toMediaCollection('images');
    //     $events->update(['status' => 'pending']);
    //     return redirect()->route('events.index');
    // }
    public function show(Event $event){
        return view('details',compact('event'));
    }
    public function AcceptEvent($id)
    {
        $event = Event::findOrFail($id);

        $event->update(['status' => 'accepted']); 
         return redirect()->back();
    }
    public function RejectEvent($id)
    {
        $event = Event::findOrFail($id);

        $event->update(['status' => 'rejected']); 
         return redirect()->back();
    }
}
