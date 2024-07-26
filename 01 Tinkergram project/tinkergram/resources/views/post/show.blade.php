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
                <div class="">
                <h2 class="">{{$user->name}}</h2>
                </div>
                <div class="">
                <a class="btn btn-outline-dark" href="{{ route('profile') }}">Back</a>
                </div>
            </div>
            <small class="">Author</small>
            <h4 class="mt-3"> Description</h4>
            <p class="mt-3"> {{$post->caption}}</p>
        </div>
   
    </div>
    
</div>
@endsection
