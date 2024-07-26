@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">

        <div class="container">
          <div class="row justify-content-center mx-auto">
          
              {{-- Image Container --}}
              <div class="d-inline-flex p-3">
                <img class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
              </div>
              
              {{-- User Info --}}
              <div class="col mt-4">
                
              {{-- Edit profile Hyperlink --}}
                <div class="d-flex justify-content-end">
                <a class="btn btn-outline-dark" href="/profile/edit">&#9998; &nbsp; Edit Profile</a>
              </div>

              {{-- Username --}}
              <h1 class="text-danger">{{ $user->name }}</h1>
              
              {{-- Post Count --}}
              <span><strong class="text-danger">{{ $postscount }}</strong> posts</span>
              
              {{-- Profile Description --}}
              <div class="mt-3">
                <h4 class="">Profile Description</h4>
                
                <div class="mb-3 text-muted">
                  {{$profile->description}}
                </div>
              </div>


            </div>
          </div>
    </div>

      </div>
          {{-- Posts --}}
          <div class="card mt-3 p-3">
            <h1 class="text-left m-3 ">My Posts</h1>
          
            <div class="row">
            
              @foreach($posts as $post)
              <div class="col-4">
                <a href="/post/{{$post->id}}">
                  <img class="w-100 shadow p-2 mb-4 bg-white" src="/storage/{{$post->image}}" >
                </a>
              </div>
              @endforeach
              
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
