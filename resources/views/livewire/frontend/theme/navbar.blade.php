<header id="masthead" class="site-header">
    <div class="container">
        <div class="hgroup-wrap d-flex justify-content-between align-items-sm-center">
            <div class="site-identity">
                <p class="site-title">
                    <a href="index.html">
                        <img src="{{ asset('assets/frontend/img/white-logo.png') }}" alt="logo">
                    </a>
                </p>
            </div>
            <div class="main-navigation">
                <nav id="navigation" class="navigation d-none d-lg-inline-block">
                    <ul>
                        <li class="active">
                            <a href="{{ route('home') }}" wire:navigate>home</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" wire:navigate>about us</a>
                        </li>
                        <li>
                            <a href="{{ route('portfolio') }}" wire:navigate>portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('blog.index') }}" wire:navigate>blog</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" wire:navigate>contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="side-nav d-flex justify-content-between align-items-center">
                <div class="header-icon-group">
                    <div class="header-social social-links">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=en">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-search-icon d-inline-block">
                        <a href="#" class="search-icon">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="header-btn d-inline-block">
                    <a href="contact.html" class="button-round-primary">Get A Quote</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>