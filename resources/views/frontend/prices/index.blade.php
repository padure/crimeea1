@extends('layouts.frontend')
@section('title', '| Prețuri')

@php
    $prices = "";
    if(request()->routeIs('prices.index')) {
        $prices = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <div class="container-fluid" style="margin: 50px 0 90px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('imagini/price1.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-0 pb-lg-0">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-4">
                        <div class="bg-white">
                            <div class="p-4">
                                <h2>Prețuri pentru Sauna Crimeea</h2>
                                <p><strong>Preț: 500 lei/oră pentru maximum 6 persoane</strong></p>
                                <p>50 lei/oră pentru fiecare persoană în plus</p>
                                <p>Rezervarea minimă este de 4 ore</p>
                                <p>Doar la Sauna noastră, dacă rezervaţi și achitați sauna pentru 5 ore, a șasea oră o primiţi GRATIS!</p>
                                <p>Copiii până la vârsta de 6 ani beneficiază de gratuitate la prezentarea certificatului de naștere</p>

                                <h3>Servicii incluse în preț:</h3>
                                <ul>
                                    <li>Bazin cu filtru</li>
                                    <li>Jacuzzi</li>
                                    <li>Aqua-șoc</li>
                                    <li>Cameră de odihnă</li>
                                    <li>Duș și Baie</li>
                                    <li>Sală de Banchet</li>
                                    <li>TV</li>
                                    <li>Boxe</li>
                                    <li>Karaoke</li>
                                    <li>Wi-Fi</li>
                                    <li>Frigider</li>
                                    <li>Cuptor cu microunde</li>
                                </ul>

                                <p><strong>Lucruri interzise:</strong> Cu mături, miere, făină, zaț de cafea sau alte produse cosmetice se interzice!</p>

                                <h3>Servicii adiționale contra cost:</h3>
                                <ul>
                                    <li>Hammam și Salina - 100 lei</li>
                                    <li>1 prosop (arenda) - 50 lei</li>
                                    <li>1 prosop (procurarea) - 200 lei</li>
                                    <li>1 mătură de stejar canadian - 200 lei</li>
                                    <li>1 mătură de stejar obișnuit - 100 lei</li>
                                    <li>1 mătură personală - 150 lei</li>
                                    <li>Servicii de masaj conform tarifelor aprobate</li>
                                </ul>

                                <p>Închirierea saunei se face cu programare preventivă și plata în avans</p>
                                <p><strong>Pentru persoane în stare de ebrietate, intrarea este INTERZISĂ !!!</strong></p>
                                <p><strong>Adresa:</strong> mun. Chișinău, str. Frumuşica 1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>

    </style>
@endpush

@push('scripts')

@endpush
