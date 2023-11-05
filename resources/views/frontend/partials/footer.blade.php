<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="mb-3 text-white"><span class="text-primary">SAUNA</span> Crimeea</h1>
                </a>
                <p>Oferim o gamă variată de servicii de relaxare. La Sauna Crimea, avem tot ce iți trebuie pentru a-ți rasfăța trupul și mintea. Fiecare serviciu este conceput pentru a te face să te simți minunat.</p>
                <p><i class="fa fa-map-marker-alt mr-2"></i>mun. Chiținău str. Frumuşica 1, Republica Moldova</p>
                <p><i class="fa fa-phone-alt mr-2"></i><a href="tel:+37378953583">+37378953583</a></p>
                <p><i class="fa fa-envelope mr-2"></i>crimeea@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="{{ url('https://www.facebook.com/SaunaCrimeea') }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="{{ url('https://www.instagram.com/sauna.crimea.frumusica/') }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5">
                <div class="row">
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Linkuri Utile</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="{{ route('home.index') }}"><i class="fa fa-angle-right mr-2"></i>Acasă</a>
                            <a class="text-white-50 mb-2" href="{{ route('about.index') }}"><i class="fa fa-angle-right mr-2"></i>Despre noi</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Servicii</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Prețuri</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Galerie</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contacte</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4">Serviciile Noastre</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bazin cu Filtru</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Jacuzzi</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Aqua-Șoc</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Saună</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Salină</a>
                            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Hammam</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="{{ route('home.index') }}">{{ config('app.name', 'Sauna Crimeea') }}</a>. Toate Drepturile Rezervate.</p>
            </div>
        </div>
    </div>
</div>
