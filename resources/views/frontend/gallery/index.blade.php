@extends('layouts.frontend')
@section('title', '| Galerie')

@php
    $gallery = "";
    if(request()->routeIs('gallery.index')) {
        $gallery = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <!-- Service Start -->
    @include('frontend.partials.gallery')
    <!-- Service End -->
@endsection

@push('styles')
    <style>
        #modalImage {
            max-height: 70vh;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
        #nextButton {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }
        #prevButton {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }
        .btn-close{
            position: absolute;
            top: 5%;
            right: 2%;
            transform: translateY(-50%);
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function () {
        // Imaginile din galerie
        var images = document.getElementsByClassName("img-thumbnail");
        var currentImageIndex = 0;
        var modalImage = document.getElementById("modalImage");

        // Afiseaza imaginea in fereastra modală
        function showImage(index) {
            modalImage.src = images[index].src;
            currentImageIndex = index;
        }

        // Afișează prima imagine la încărcarea paginii
        showImage(currentImageIndex);

        // Deschide fereastra modală la click pe imagine
        $(".img-thumbnail").click(function () {
            showImage($(this).index());
        });

        // Navigare între imagini
        $("#prevButton").click(function () {
            if (currentImageIndex > 0) {
                showImage(currentImageIndex - 1);
            }
        });

        $("#nextButton").click(function () {
            if (currentImageIndex < images.length - 1) {
                showImage(currentImageIndex + 1);
            }
        });
    });
    </script>
@endpush
