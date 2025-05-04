@extends('frontend.layouts.guest')

@section('content')


<span class="text-center pt-1 mb-4 d-block login-with">
    <span>OR Create New Account</span>
</span>


<!-- register form -->
<livewire:frontend.auth.register />
<!-- register form -->

@endsection