<nav class="navbar navbar-expand-lg sticky-top border ">
    <div class="container py-1">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('Images/Logo/Techster.jpg') }}" alt="Techster" width="100" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item px-2">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link" href="{{ route('all-services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('web-development') }}">Web Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('graphic-design') }}">Graphic Designing</a></li>
                        <li><a class="dropdown-item" href="{{ route('seo-services') }}">SEO Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('qa-services') }}">Quality Assurance</a></li>
                        <li><a class="dropdown-item" href="{{ route('networking-services') }}">Networking Services</a></li>
                        <li><a class="dropdown-item" href="{{ route('ios-development') }}">iOS App Development</a></li>
                        <li><a class="dropdown-item" href="{{ route('android-development') }}">Android App Development</a></li>
                    </ul>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('team') }}">Team</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
{{--            <div class="d-flex">--}}
{{--                --}}
{{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </div>--}}
        </div>
    </div>
</nav>
