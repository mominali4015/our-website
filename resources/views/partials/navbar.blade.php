<nav class="navbar navbar-expand-lg py-0 bg-white sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('Images/Logo/Techster.jpg') }}" alt="Techster" width="100" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1">
                    <a class="nav-link p-3 {{ request()->routeIs('home') ? 'nav-active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link p-3 {{ request()->routeIs('all-services') ? 'nav-active' : '' }}" href="{{ route('all-services') }}" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu p-0">
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('web-development') }}">Web Development</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('graphic-design') }}">Graphic Designing</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('seo-services') }}">SEO Services</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('qa-services') }}">Quality Assurance</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('networking-services') }}">Networking Services</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('ios-development') }}">iOS App Development</a></li>
                        <li><a class="dropdown-item text-small py-2" href="{{ route('android-development') }}">Android App Development</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link p-3 {{ request()->routeIs('blogs') ? 'nav-active' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link p-3 {{ request()->routeIs('team') ? 'nav-active' : '' }}" href="{{ route('team') }}">Team</a>
                </li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link p-3 " href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Portfolio
                    </a>
                    <ul class="dropdown-menu p-0">
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('about') }}">About Us</a></li>
                        <li><a class="dropdown-item border-bottom text-small py-2" href="{{ route('testimonials') }}">Testimonials</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link p-3 {{ request()->routeIs('contact') ? 'nav-active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
