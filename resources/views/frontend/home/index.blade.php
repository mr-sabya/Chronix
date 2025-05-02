@extends('frontend.layouts.app')

@section('content')

@if($theme == 1)
<!-- home one -->
<livewire:frontend.home.home-one.index />
<!-- home one -->
@elseif($theme == 2)
<!-- home two -->
<livewire:frontend.home.home-two.index />
<!-- home two -->
@elseif($theme == 3)
<!-- home three -->
<livewire:frontend.home.home-three.index />
<!-- home three -->
@elseif($theme == 4)
<!-- home three -->
<livewire:frontend.home.home-four.index />
<!-- home three -->
@elseif($theme == 5)
<!-- home three -->
<livewire:frontend.home.home-five.index />
<!-- home three -->
@endif


@endsection