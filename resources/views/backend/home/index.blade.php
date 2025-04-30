@extends('backend.layouts.app')

@section('title', $title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- dashboard option -->
            <livewire:backend.home.dash-options />
        </div>
        <div class="col-12 col-xxl-6">
            <!-- quick draft -->
            <livewire:backend.home.quick-draft />
        </div>
        <div class="col-md-6 col-xxl-3">
            <!-- page analytics -->
            <livewire:backend.home.analytics />
        </div>
        <div class="col-md-6 col-xxl-3">
            <!-- recent activity -->
            <livewire:backend.home.recent-activity />
        </div>
    </div>
</div>
@endsection