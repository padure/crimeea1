@extends('layouts.frontend')
@section('title', '| Acasă')

@php
    $home = "";
    if(request()->routeIs('home.index')) {
        $home = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <!-- Carousel Start -->
    @include('frontend.partials.carousel')
    <!-- Carousel End -->

    <!-- About Start -->
    @include('frontend.partials.about')
    <!-- About End -->

    <!-- Service Start -->
    @include('frontend.partials.service')
    <!-- Service End -->

    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('imagini/program1.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Ore de funcționare</h6>
                        <h1 class="mb-4">Relaxare Non-Stop <br> Zi și Noapte</h1>
                        <p>La Sauna Crimeea, suntem aici pentru dumneavoastră 24/7. Indiferent de momentul zilei sau al nopții, suntem gata să vă oferim o experiență de relaxare inegalabilă. Veniți oricând vă simțiți nevoia să vă eliberați de stres și să vă reîncărcați bateriile.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->

    <!-- Pricing Start -->
    <div class="container">
        <div class="col-10 m-auto">
            <h1 class="mb-2 text-center">Descoperiți Tarifele Noastre</h1>
        </div>
    </div>
    @include('frontend.partials.pricing')
    <!-- Pricing End -->

    <!-- Contacts -->
    @include('frontend.partials.contacts')
    <!-- Contacts End -->
@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
