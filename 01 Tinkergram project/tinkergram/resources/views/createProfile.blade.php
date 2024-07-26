@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
                <div class="col">
                    <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        
                        {{-- Profile Pic --}}
                        <div class="form-group row">
                            <label for="profilepic">Upload your profile picture</label>
                            <input type="file" name="profilepic" id="profilepic">
                        </div>
                        {{-- Description Write-up --}}
                        <div class="form-group row">
                            <label for="description">Write something about yourself</label>
                            <textarea class="form-control" type="text" name="description" id="description" rows="3"></textarea>
                            {{-- <input class="form-control" type="text" name="description" id="description"> --}}
                        </div>


                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary">Create profile</button>
                        </div>
                    </form>
                </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection



