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
        $events = Event::with('category')->get();
        $categories=Category::all();
        return view('admin.event.index', compact('events','categories'));
    }
    public function store(StoreEventRequest $request)
    {
        $events = Event::create($request->all());
        $events->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->route('events.index');
    }
    public function show(Event $event){
        return view('details',compact('event'));
    }
  
}
