@extends('backend.layouts.app')

@section('title', $title)

@section('content')
<div class="container-fluid">
    <livewire:backend.tag.index />
</div>
@endsection