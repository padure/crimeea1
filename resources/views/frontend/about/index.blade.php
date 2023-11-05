@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $about = "";
    if(request()->routeIs('about.index')) {
        $about = "active";
    }
@endphp

@section('meta_description', '')
@section('meta_keywords', "")

@section('content')
    <!-- About Start -->
    @include('frontend.partials.about')
    <!-- About End -->
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
