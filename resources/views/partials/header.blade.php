<header id="site-header" class="site-header" role="banner">
    <div class="container">
        <div class="site-logo-wrap">
            <hgroup>
                <h1 class='site-title site-title-no-desc'> <a  style="color:#FFFFFF;" href='{{ route('home') }}' title='{{ config('app.name', 'Laravel Shops') }}' rel='home'>{{ config('app.name', 'Laravel Shops') }}</a></h1>
            </hgroup>
        </div>
        <nav id="primary-nav" class="primary-nav" role="navigation">
            <ul id="menu-gd-menu" class="menu">
                <li class="gd-menu-item menu-item menu-item-type-post_type_archive menu-item-object-gd_place"><a href="{{ route('login') }}">Login</a></li>
                <li class="gd-menu-item menu-item menu-item-type-post_type_archive menu-item-object-gd_property"><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
        <div class="dt-nav-toggle  dt-mobile-nav-button-wrap"><a href="#primary-nav"><i class="fas fa-bars"></i></a></div>
    </div>
</header>