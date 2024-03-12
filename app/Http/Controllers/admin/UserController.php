<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('admin.users.index', compact('users'));
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin');
    }
    public function edit($id)
    {
        // return view('admin.category.edit',[ 'category'=>$category]);
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, User $user)
    {

        $user->roles()->sync([$request->input('role_id')]);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function submitOrganizerRequest()
    {
        $user = Auth::user(); 
        if ($user) {
            $user->update(['organizer_request_status' => 'pending']);
    
        }

        return redirect()->back();
    }
    public function showRequests()
    {
        $requests = User::where('organizer_request_status', 'pending')->get();

        return view('admin.requestForOrganizer', compact('requests'));
    }
    public function AcceptOrganizer($id)
    {
        $user = User::findOrFail($id);

         $user->update(['organizer_request_status' => 'accepted']); 
         $organizerRole = Role::where('name', 'organizer')->first();
         $user->roles()->attach($organizerRole);
         return redirect()->back();
    }
    public function RejectOrganizer($id)
    {
        $user = User::findOrFail($id);

         $user->update(['organizer_request_status' => 'rejected']); 
         return redirect()->back();
    }
    public function showCreatedEvents($id)
    {
        $user = User::findOrFail($id);
        $createdEvents = $user->createdEvents;
        
        return view('MyEvents', compact('user', 'createdEvents'));
    }
    public function statistic()
    {
        $totalEvents = Event::count();
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $totalReservations=Reservation::count();
        return view('admin.dashboard', compact('totalEvents', 'totalUsers','totalCategories','totalReservations'));
    }
    public function BannedUser($id)
    {
        $user = User::findOrFail($id);

         $user->update(['status' => 'Banned']); 
         return redirect()->back();
    }
}
