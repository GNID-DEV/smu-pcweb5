@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        {{-- User Profile --}}
        <div class="col-md-3">
            <div class="card bg-dark align-items-center" style="padding-bottom: 20px;">
                <img src="/storage/{{ $profile['background'] }}" style="width: 100%;" />
                <img src="/storage/{{ $profile['image'] }}" class="rounded-circle shadow mb-3" width="150" height="150" style="margin-top: -80px" />
                
                {{-- Username --}}
                <div class="text-center text-white mt-4">
                    <h2>{{ $user['name'] }}</h2>
                    <div class="mt-n2 text-secondary"><small>Author</small></div>
                </div>
                
                {{-- Profile Description --}}
                <div class="card-body">
                    {{-- <h5 style="text-align: center">Your Profile</h5> --}}
                    <p class="text-secondary" style="text-align: center">{{ $profile['description']}}</p>
                </div>
                
                {{-- Edit profile Hyperlink --}}
                <div class="mb-3">
                    <a class="btn btn-sm btn-outline-light" href="/profile/edit">&#9998; &nbsp; 
                        Edit Profile</a>
                </div>
            </div>
        </div>

        {{-- Posts --}}
        <div class="col-md-9">
            {{-- <div class="bg-light">
                <form enctype="multipart/form-data" method="post" style="display: flex; align-items: center">
                    <img src="/storage/{{ $profile['image'] }}" class="rounded-circle" width="40" height="40" style="margin: 0 10px" />
                    
                    
                    <div class="">
                        <a class="btn btn-md btn-success" href="/post/create">
                            &#8853; Create Post</a>
                    </div>
                </form>
            </div> --}}
            
            {{-- Posts --}}
            @foreach($posts as $post)
                <div class="card bg-outline-dark p-4 mb-3">
                    <div style="card-body">
                        
                        <div class="d-flex">
                        {{-- Edit Btn --}}
                        <div class="ml-auto"">
                        <a class="btn btn-sm btn-outline-dark" href="/post/{{$post->id}}/edit">&#9998; &nbsp;Edit &nbsp;</a>
                        
                        {{-- Delete Btn --}}
                        <a class="btn btn-sm btn-outline-danger" href="/post/delete/{{$post->id}}">&#8854; Delete</a>
                        
                        </div>                

                        </div>
                        
                        {{-- Post Title --}}
                        <div class="card-body">
                            <h3 class="display-4 text-center">{{ $post->title }}</h3>
                        </div>    
                                                
                        {{-- Post Image --}}
                        <div class="mx-auto">
                            <a href="/post/{{$post->id}}">
                                <img class="shadow-lg p-2 mb-4 bg-white rounded mx-auto d-block" style="height: 400px;" src="/storage/{{$post->image}}">
                            </a>
                        </div>

                        {{-- Caption --}}
                        <div class="my-4">
                        <span>{{ $post->caption }}</span><br />
                        </div>
                    
                        
                    </div>

                    
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
