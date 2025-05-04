@extends('frontend.layouts.guest')

@section('content')

        <span class="text-center pt-1 mb-4 d-block login-with">
            <span>OR login With Email</span>
        </span>

        <!-- login form -->
        <livewire:frontend.auth.login />
        <!-- login form -->

    
@endsection