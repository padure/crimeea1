@extends('layouts.frontend')
@section('title', '| Servicii')

@php
    $service = "";
    if(request()->routeIs('service.index')) {
        $service = "active";
    }
@endphp

@section('meta_description', 'Bucurați-vă de o experiență de relaxare de neegalat la Sauna Crimeea. Oferim servicii de înaltă calitate, inclusiv jacuzzi, aqua-șoc, hammam, salină și multe altele. Rezervați acum pentru o vacanță relaxantă în Chișinău.')
@section('meta_keywords', "Sauna Crimeea, Relaxare, Spațiu Wellness, Jacuzzi, Aqua-Șoc, Bazin cu Filtru, Hammam, Salina, Închiriere Saună, Prețuri Saună, Banchet, Karaoke, Wi-Fi, Masaj, Rezervări, Copii Gratis, Adresă Saună, Oferte Speciale, Saună 24/7, Chișinău, Tratamente cu Sare, Vacanță Relaxantă")

@section('content')
    <!-- Service Start -->
    <div class="container px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Serviciile noastre</h6>
                <h1>Experiențe de Relaxare</h1>
                <p class="pl-4">
                    La Sauna Crimeea, vă punem la dispoziție o varietate de servicii și facilități pentru a vă asigura o experiență de relaxare unică. De la saune cu aburi, până la masaje terapeutice, suntem aici pentru a vă ajuta să vă reîncărcați bateriile și să vă revigorați corpul și mintea.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service1.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Sală de Banchet</h4>
                    <p class="text-white px-3 mb-3">Organizați evenimente speciale la Sauna Crimeea într-o sală de banchet elegantă și confortabilă, potrivită pentru orice ocazie.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service2.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Cameră de odihnă</h4>
                    <p class="text-white px-3 mb-3">Dispunem de cameră de odihnă confortabilă pentru a vă odihni și recupera după o zi plină de relaxare.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service3.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Jacuzzi</h4>
                    <p class="text-white px-3 mb-3">Iată o modalitate excelentă de a vă destinde și de a vă elibera de stres. Jacuzzi-ul nostru oferă o experiență de relaxare extraordinară.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service4.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hammam</h4>
                    <p class="text-white px-3 mb-3">Bucurați-vă de tratamente relaxante în hammam-ul nostru, unde aburul și procedurile speciale vă vor revigora corpul și mintea.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service5.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Sauna</h4>
                    <p class="text-white px-3 mb-3">Încălziți-vă în saună și simțiți cum tensiunea se topește, lăsând loc relaxării profunde și a purificării.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service6.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Zonă de odihnă</h4>
                    <p class="text-white px-3 mb-3">Relaxați-vă într-un spațiu liniștit și confortabil, dedicat pur și simplu odihnei.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service7.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Salină</h4>
                    <p class="text-white px-3 mb-3">Relaxați-vă într-un mediu salin unic, care vă poate aduce beneficiile terapiei cu sare pentru sănătatea dumneavoastră.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
            <div class="service-item col-md-3">
                <img class="img-fluid" src="{{ asset('imagini/services/service8.jpg') }}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Bazin cu filtru</h4>
                    <p class="text-white px-3 mb-3">Relaxați-vă într-un bazin cu filtru modern și curat, perfect pentru a vă răcori și a vă bucura de apă cristalină.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Vezi detalii</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->
@endsection

@push('styles')
    <style>
        .service-item .service-text{
            background: none!important;
        }
        .service-item .service-text:hover{
            cursor: pointer;
        }
    </style>
@endpush

@push('scripts')

@endpush
