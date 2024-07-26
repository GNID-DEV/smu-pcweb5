@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-4">
               <form action="{{ route('profile.postEdit', $profile->user_id)}}" enctype="multipart/form-data" method="post">
                   @csrf
                   @if ($profile == null)
                       <div>where my profile</div>
                   @endif
                   
                   {{-- Profile Pic --}}
                   <div class="form-group row">
                       <label for="profilepic">Profile picture</label>
                       <input type="file" name="profilepic" id="profilepic">
                   </div>

                   {{-- Description --}}
                   <div class="form-group row">
                       <label for="description">Description</label>
                       <textarea class="form-control" type="text" name="description" id="description" rows="5" value="{{ $profile->description }}"></textarea>
                       {{-- <input class="form-control" type="text" name="description" id="description" value="{{ $profile->description }}"> --}}
                   </div>


                   <div class="form-group row">
                       <button type="submit" class="btn btn-primary">Update profile</button>
                   </div>
               </form>
           </div>
           <div class="col-4"></div>
       </div>
   </div>
@endsection
