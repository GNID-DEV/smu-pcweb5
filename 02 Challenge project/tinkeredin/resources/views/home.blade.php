@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-dark mb-3">
                <div class="alert alert-dismissible alert-secondary">
                    <h1>{{ __('Dashboard') }}</h1>
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="text-muted">{{ __('Welcome') }} <span class="text-danger">{{ Auth::user()->name }}</span> ! </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
