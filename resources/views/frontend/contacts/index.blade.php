@extends('layouts.frontend')
@section('title', '| Galerie')

@php
    $contacts = "";
    if(request()->routeIs('contacts.index')) {
        $contacts = "active";
    }
@endphp

@section('meta_description', '')
@section('meta_keywords', "")

@section('content')
    <!-- Service Start -->
    @include('frontend.partials.contacts')
    <!-- Service End -->
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
