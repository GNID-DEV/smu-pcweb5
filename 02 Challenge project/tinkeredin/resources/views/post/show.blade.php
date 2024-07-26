@extends('layouts.app')

@section('content')

<div class="container">
   
    <div class="row justify-content-md-center">
        
        {{-- Image --}}
        <div class="col-sm">
            <img class="w-100 shadow p-2 mb-4 bg-white" src="/storage/{{ $post->image }}">
        </div>

        {{-- Write-up --}}
        <div class="col-sm">
            <div class="d-flex justify-content-between mt-3">
                
                {{-- Post Title --}}
                <div class="mt-5">
                <h3 class="display-4">{{ $post->title }}</h3>
                </div>  
                
                {{-- <div class="">
                <h2 class="">{{$user->name}}</h2>
                </div> --}}

                <div class="">
                <a class="btn btn-outline-dark" href="{{ route('profile') }}">Back</a>
                </div>
            </div>
            <div class="mt-n3">
            <small class="">Movie Title</small>
            </div>
            <div class="mt-5">
            <h4 class=""> Description</h4>
            <p class="mt-3"> {{$post->caption}}</p>
            </div>
        </div>

    </div>
    
</div>
@endsection
