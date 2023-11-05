<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{ route('home.index') }}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">SAUNA</span> Crimeea</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ route('home.index') }}" class="nav-item nav-link {{ $home??"" }}">Acasă</a>
                <a href="{{ route('about.index') }}" class="nav-item nav-link {{ $about??"" }}">Despre noi</a>
                <a href="{{ route('service.index') }}" class="nav-item nav-link {{ $service??"" }}">Servicii</a>
                <a href="{{ route('prices.index') }}" class="nav-item nav-link {{ $prices??"" }}">Prețuri</a>
                <a href="{{ route('gallery.index') }}" class="nav-item nav-link {{ $gallery??"" }}">Galerie</a>
                <a href="{{ route('contacts.index') }}" class="nav-item nav-link {{ $contacts??"" }}">Contacte</a>
            </div>
        </div>
    </nav>
</div>
