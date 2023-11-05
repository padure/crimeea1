@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $service = "";
    if(request()->routeIs('service.index')) {
        $service = "active";
    }
@endphp

@section('meta_description', '')
@section('meta_keywords', "")

@section('content')
    <!-- Service Start -->
    @include('frontend.partials.service')
    <!-- Service End -->
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
