<div class="navbar-area bg-white">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <nav class="navbar navbar-expand-md navbar-two bg-white">
            <div class="container p-relative">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="image">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                <x-tabler-home class="icon" /> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patient.contact') }}" class="nav-link {{ request()->routeIs('patient.contact') ? 'active' : '' }}">
                                <x-tabler-address-book class="icon" /> Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('patient.faqs') }}" class="nav-link {{ request()->routeIs('patient.faqs') ? 'active' : '' }}">
                                <x-tabler-question-mark class="icon" /> Faqs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}">
                                <x-tabler-user-plus class="icon" /> Register
                            </a>
                        </li>
                        <li class="nav-btn">
                            <a href="{{ route('login') }}" class="default-btn">
                                Connexion
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
