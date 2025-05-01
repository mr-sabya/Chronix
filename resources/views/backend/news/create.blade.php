@extends('backend.layouts.app')

@section('title', $title)

@section('content')
<div class="container-fluid">
    <livewire:backend.news.manage />
</div>
@endsection