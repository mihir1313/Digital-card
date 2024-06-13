@php
$routeName = Route::currentRouteName();
@endphp

<header class="header__section  header__transparent">
    <div class="header__sticky">
        <div class="container">
            <div class="main__header d-flex justify-content-between align-items-center">
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="index.html">
                        <img class="main__logo--img logo_light" src="assets/img/logo/nav-log.png" alt="logo-img">
                        <img class="main__logo--img logo_dark" src="assets/img/logo/nav-log-white.png" alt="logo-img">
                    </a></h1>
                </div>
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__header--right d-flex align-items-center d-none d-lg-block">
                    <div class="header__menu menu_border--none">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#home">Home 5
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#about">About </a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#servives">Service  </a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#portfolio">Portfolio </a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#blog">Blog 
                                    </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="#contact">Contact </a>  
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <button class="primary__btn download__btn">
                        <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                        Download CV
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>