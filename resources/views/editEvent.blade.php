
@include('layouts.nav')
<section class="container mx-auto">
<form action="{{ route('events.update',$event->id) }}" method="POST"
                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                        style="width: 90%; max-width: 50rem;">
                        @csrf
                        @method('PUT')
                        
                           
                        <h1 class="text-center pb-5 display-4 fs-3">
                            Edit the Event
                        </h1>

                        <div class="mb-3">
                            <label class="form-label">Event Title</label>
                            <input type="text" class="form-control border" placeholder="Enter a title"
                                name="title" value="{{ $event->title }}">
                        </div>
 
                        <div class="mb-3">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control border" placeholder="Enter a title"
                                    name="description" value="{{ $event->description }}">
                            </div>

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control border" placeholder="Enter a title"
                                        name="address" value="{{ $event->address }}">
                                </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" class="form-control border" placeholder="Enter a title"
                                        name="start_date" value="{{ $event->start_date }}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="form-label">End Date</label>
                                        <input type="date" class="form-control border" placeholder="Enter a title"
                                            name="end_date" value="{{ $event->end_date }}">
                                    </div>
                        <div class="mb-3">
                            <label class="form-label">User Role</label>
                            <select class="form-control border" name="role_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="file" class="form-control border" name="image">
                        </div>
                      

                        {{-- <div class="mb-3">
                            <label class="form-label"> Book Cover </label>
                            <input type="file" class="form-control border" name="book_cover">
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label"> File </label>
                            <input type="file" class="form-control border" name="file">
                        </div> --}}

                        <div class="modal-footer">
                         
                            <button type="submit" class="btn btn-primary" >Edit Event</button>
                        </div>
                    </form>
                </section>