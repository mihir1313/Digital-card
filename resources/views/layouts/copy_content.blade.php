@extends('layouts.index')
@section('dashboard-title', 'Home')
@section('dashboard-content')


    <div class="container">
        <div class="view_counter"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
            </svg> View:<span id="visitorCount">0</span></div>
        <div class="hero__section--inner d-flex align-items-center">
            <div class="hero__thumbnail position__relative">
                <img class="hero__thumbnail--media light_img" src="{{ asset('assets\img\hero\IMG-20230825-WA0108.jpg') }}"
                    alt="img">
                {{-- <img class="hero__thumbnail--media dark_img" src="{{ asset('assets\img\hero\main.jpg') }}" alt="img"> --}}

            </div>
            <div class="hero__content">
                {{-- <span class="hero__content--subtitle text__secondary mb-10">HELLO  I'M</span> --}}
                <h2 class="hero__content--title mb-15">NARENDRA MADHU ASSOCIATES</h2>
                <h3 class="hero__content--subtitle2 mb-20" style="font-size:22px">Law Firm</h3>
                <h6 class="hero__content--subtitle mb-20" style="font-size:16px">One-stop Solutions For Legal Advice</h5>
                    {{-- <h4 class="hero__content--subtitle2 mb-20">For Legal Advice</h4> --}}
                    {{-- <p class="hero__content--desc mb-30">There are many variations of sum availabled 
                            in alley of type and scrambled it some.</p> --}}
                    <div class="hero__content--footer d-flex align-items-center">
                        {{-- <a class="btn hero__content--btn" href="#">About Me</a> --}}
                        <div class="social__share">
                            {{-- <span class="social__share--title">Follow Me: </span> --}}
                            <ul class="social__share--wrapper d-flex">
                                <li class="social__share--child"><a class="social__share--link2"
                                        style="border:0px;background:#fff;color:#696969"
                                        onclick="window.open('tel:9825744681');">
                                        <svg width="25" height="34" fill="currentColor" stroke="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                            </path>
                                        </svg>
                                        <span class="visually-hidden">Call</span>
                                    </a>
                                </li>
                                <li class="social__share--child"><a class="social__share--link2"
                                        style="border:0px;background:#fff;color:#696969"
                                        href="https://api.whatsapp.com/send?phone=919825744681&text=Hi,%20Narendra%20Madhu%20Associates"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                            height="100" viewBox="0,0,256,256" style="fill:#696969;">
                                            <g fill="#696969" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(4,4)">
                                                    <path
                                                        d="M32,10c-12.15,0 -22,9.85 -22,22c0,4.065 1.10725,7.86972 3.03125,11.13672l-2.81641,10.54688l11.0625,-2.47461c3.173,1.775 6.82866,2.79102 10.72266,2.79102c12.15,0 22,-9.85 22,-22c0,-12.15 -9.85,-22 -22,-22zM32,14c9.941,0 18,8.059 18,18c0,9.941 -8.059,18 -18,18c-3.731,0 -7.19631,-1.13513 -10.07031,-3.07812l-6.13867,1.37305l1.5625,-5.85547c-2.103,-2.946 -3.35352,-6.54345 -3.35352,-10.43945c0,-9.941 8.059,-18 18,-18zM24.47266,21.73633c-0.367,0 -0.95698,0.13564 -1.45898,0.68164c-0.493,0.547 -1.90039,1.86088 -1.90039,4.54688c0,2.676 1.9438,5.27191 2.2168,5.62891c0.273,0.367 3.77045,6.04552 9.31445,8.22852c4.596,1.81 5.53502,1.45142 6.54102,1.35742c0.998,-0.086 3.22278,-1.31298 3.67578,-2.58398c0.452,-1.272 0.45155,-2.3628 0.31055,-2.5918c-0.137,-0.222 -0.49502,-0.35981 -1.04102,-0.63281c-0.546,-0.274 -3.22456,-1.59344 -3.72656,-1.77344c-0.495,-0.18 -0.86175,-0.27452 -1.21875,0.27148c-0.367,0.546 -1.40742,1.77481 -1.73242,2.13281c-0.315,0.367 -0.62978,0.40972 -1.17578,0.13672c-0.546,-0.273 -2.30181,-0.84608 -4.38281,-2.70508c-1.619,-1.441 -2.71234,-3.22553 -3.02734,-3.76953c-0.316,-0.545 -0.03472,-0.84223 0.23828,-1.11523c0.248,-0.238 0.54731,-0.63227 0.82031,-0.94727c0.264,-0.324 0.35711,-0.54511 0.53711,-0.91211c0.189,-0.357 0.09303,-0.68208 -0.04297,-0.95508c-0.135,-0.274 -1.19369,-2.96897 -1.67969,-4.04297c-0.408,-0.904 -0.83456,-0.93045 -1.22656,-0.93945c-0.317,-0.016 -0.68402,-0.01562 -1.04102,-0.01562z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="visually-hidden">Whatapp</span>
                                    </a>
                                </li>

                                <li class="social__share--child"><a class="social__share--link2"
                                        style="border:0px;background:#fff;color:#696969"
                                        href="https://www.google.com/maps/place/NARENDRA+MADHU+ASSOCIATES/@23.0788717,72.526596,17z/data=!3m1!4b1!4m6!3m5!1s0x395e83a030eff2c7:0xde43b4c2deca4c6e!8m2!3d23.0788717!4d72.526596!16s%2Fg%2F11v17n5bkq?entry=ttu"
                                        target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"
                                            style="fill:#696969;">
                                            <path
                                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                        </svg>
                                        <span class="visually-hidden">Location</span>
                                    </a>
                                </li>
                                <li class="social__share--child"><a class="social__share--link2"
                                        style="border:0px;background:#fff;color:#696969"
                                        href="Mailto:narendramadhu.legal@gmail.com" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="visually-hidden">mail</span>
                                    </a>
                                </li>
                                <li class="social__share--child"><a class="social__share--link2"
                                        style="border:0px;background:#fff;color:#696969"
                                        href="http://www.narendramadhuassociates.com/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"
                                            style="fill:#696969;">
                                            <path
                                                d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z" />
                                        </svg>
                                        <span class="visually-hidden">Website</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="hero__content--footer d-flex align-items-center"> --}}
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__info">
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#fff;border:1px solid black">
                                            <svg width="25" height="34" fill="#696969" stroke="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                                </path>
                                            </svg>
                                        </span>
                                        <div class="contact__info--content">
                                            {{-- <h3 class="contact__info--title" style="float: left">Call Us</h3> --}}
                                            <p class="contact__info--desc">
                                                <a href="tel:+880254615566">+91 9825744681</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#fff;border:1px solid black">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                viewBox="0 0 24 24" fill="#696969" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                        </span>
                                        <div class="contact__info--content">
                                            {{-- <h3 class="contact__info--title" style="float: left">Email Us</h3> --}}
                                            <p class="contact__info--desc">
                                                <a href="mailto:info@example.com"
                                                    style="font-size: 16px;">narendramadhu.legal@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#fff;border:1px solid black">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"
                                                style="fill:#696969;">
                                                <path
                                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                            </svg>
                                        </span>
                                        <div class="contact__info--content">
                                            {{-- <h3 class="contact__info--title" style="float: left">Address</h3> --}}
                                            <p class="contact__info--desc">
                                                <a href="tel:+880254615566">906-907,Satyam 64,Opp. Gujarat <br> High Court
                                                    S. G. Highway, Sola,<br> Ahmedabad, Gujarat-380060</a>
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="contact__info--items d-flex align-items-center">
                                                <span class="contact__info--icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                </span>
                                                <div class="contact__info--content">
                                                    <h3 class="contact__info--title">Address</h3>
                                                    <p class="contact__info--desc" style="font-size: 13px;">
                                                        906-907, Satyam 64,<br> Opp. Gujarat High Court,<br> S. G. Highway, Sola, Ahmedabad, Gujarat-380060
                                                    </p>
                                                </div>
                                            </div> --}}
                                </div>
                            </div>
                        </div>

                        {{-- <div class="contact__info">
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#b9b9b9">
                                            <svg width="25" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg>
                                        </span>
                                        <div class="contact__info--content">
                                            <h3 class="contact__info--title"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Call Us</h3>
                                            <p class="contact__info--desc">
                                                <a href="tel:+919825744681" class="text-right">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;9825744681</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#b9b9b9">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </span>
                                        <div class="contact__info--content">
                                            <h3 class="contact__info--title">Email Us</h3>
                                            <p class="contact__info--desc">
                                                <a href="mailto:narendramadhu.legal@gmail.com">narendramadhu.legal@gmail.com</a> <br>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact__info--items d-flex align-items-center">
                                        <span class="contact__info--icon" style="background:#b9b9b9">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </span>
                                        <div class="contact__info--content">
                                            <h3 class="contact__info--title"> &nbsp; &nbsp; &nbsp;Address<br></h3>
                                            <p class="contact__info--desc">
                                                                                                
906-907, Satyam 64,<br> Opp. Gujarat High Court,<br> S. G. Highway,<br> Sola,<br> Ahmedabad, Gujarat-380060
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                        {{-- </div> --}}
                        <div class="social__share d-flex align-items-center">
                            <ul class="social__share--wrapper d-flex">
                                <li class="social__share--child"><a class="social__share--link"
                                        style="border:1px solid black;background:#fff;color:#696969" target="_blank" href="https://www.facebook.com/profile.php?id=100095084097649">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            width="20px" height="20px">
                                            <path
                                                d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z" />
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
                                </li>
                                <li class="social__share--child">
                                    <a class="social__share--link"
                                        style="border:1px solid black;background:#fff;color:#696969" target="_blank" href="https://www.instagram.com/narendra_madhu_associates/">
                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            width="20px" height="20px">
                                            <path
                                                d="M 4 2 C 2.898438 2 2 2.898438 2 4 L 2 20 C 2 21.101563 2.898438 22 4 22 L 20 22 C 21.101563 22 22 21.101563 22 20 L 22 4 C 22 2.898438 21.101563 2 20 2 Z M 4 4 L 20 4 L 20 8 L 16.453125 8 C 15.355469 6.777344 13.765625 6 12 6 C 10.234375 6 8.644531 6.777344 7.546875 8 L 4 8 Z M 17 5 L 17 7 L 19 7 L 19 5 Z M 12 8 C 14.222656 8 16 9.777344 16 12 C 16 14.222656 14.222656 16 12 16 C 9.777344 16 8 14.222656 8 12 C 8 9.777344 9.777344 8 12 8 Z M 12 10 C 11.800781 10 11.601563 10 11.402344 10.097656 C 11.699219 10.300781 12 10.601563 12 11 C 12 11.601563 11.601563 12 11 12 C 10.601563 12 10.300781 11.800781 10.097656 11.402344 C 10 11.601563 10 11.800781 10 12 C 10 13.101563 10.898438 14 12 14 C 13.101563 14 14 13.101563 14 12 C 14 10.898438 13.101563 10 12 10 Z" />
                                        </svg>
                                        <span class="visually-hidden">Instagram</span>
                                    </a>
                                </li>
                                <li class="social__share--child"><a class="social__share--link"
                                        style="border:1px solid black;background:#fff;color:#696969" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/> </svg>
                                        <span class="visually-hidden">Linkedin</span>
                                    </a>
                                </li>
                                <li class="social__share--child">
                                    <a class="social__share--link"
                                        style="border:1px solid black;background:#fff;color:#696969" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16"> <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/> </svg>
                                        <span class="visually-hidden">Youtube</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="phoneNumber" placeholder="WhatsApp number..."
 aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" style="font-size: 11px;border:1px solid #008000;color:#008000;padding: 7px;"
                type="button" onclick="shareOnWhatsApp()"> <svg xmlns="http://www.w3.org/2000/svg" x="0px"
                    y="0px" width="30" height="30" viewBox="0,0,256,256" style="fill:#008000;">
                    <g fill="#008000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                        font-family="none" font-weight="none" font-size="none" text-anchor="none"
                        style="mix-blend-mode: normal">
                        <g transform="scale(4,4)">
                            <path
                                d="M32,10c-12.15,0 -22,9.85 -22,22c0,4.065 1.10725,7.86972 3.03125,11.13672l-2.81641,10.54688l11.0625,-2.47461c3.173,1.775 6.82866,2.79102 10.72266,2.79102c12.15,0 22,-9.85 22,-22c0,-12.15 -9.85,-22 -22,-22zM32,14c9.941,0 18,8.059 18,18c0,9.941 -8.059,18 -18,18c-3.731,0 -7.19631,-1.13513 -10.07031,-3.07812l-6.13867,1.37305l1.5625,-5.85547c-2.103,-2.946 -3.35352,-6.54345 -3.35352,-10.43945c0,-9.941 8.059,-18 18,-18zM24.47266,21.73633c-0.367,0 -0.95698,0.13564 -1.45898,0.68164c-0.493,0.547 -1.90039,1.86088 -1.90039,4.54688c0,2.676 1.9438,5.27191 2.2168,5.62891c0.273,0.367 3.77045,6.04552 9.31445,8.22852c4.596,1.81 5.53502,1.45142 6.54102,1.35742c0.998,-0.086 3.22278,-1.31298 3.67578,-2.58398c0.452,-1.272 0.45155,-2.3628 0.31055,-2.5918c-0.137,-0.222 -0.49502,-0.35981 -1.04102,-0.63281c-0.546,-0.274 -3.22456,-1.59344 -3.72656,-1.77344c-0.495,-0.18 -0.86175,-0.27452 -1.21875,0.27148c-0.367,0.546 -1.40742,1.77481 -1.73242,2.13281c-0.315,0.367 -0.62978,0.40972 -1.17578,0.13672c-0.546,-0.273 -2.30181,-0.84608 -4.38281,-2.70508c-1.619,-1.441 -2.71234,-3.22553 -3.02734,-3.76953c-0.316,-0.545 -0.03472,-0.84223 0.23828,-1.11523c0.248,-0.238 0.54731,-0.63227 0.82031,-0.94727c0.264,-0.324 0.35711,-0.54511 0.53711,-0.91211c0.189,-0.357 0.09303,-0.68208 -0.04297,-0.95508c-0.135,-0.274 -1.19369,-2.96897 -1.67969,-4.04297c-0.408,-0.904 -0.83456,-0.93045 -1.22656,-0.93945c-0.317,-0.016 -0.68402,-0.01562 -1.04102,-0.01562z">
                            </path>
                        </g>
                    </g>
                </svg>Share on WhatsApp</button>
        </div>
        <div class="input-group mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <button class="btn">Save to Contacts</button>
                    </div>
                    <div class="col-6 col-md-6">
                        <button class="btn ">Btn</button>
                    </div>
                    {{-- <div class="col-6 col-md-6">
                        <button class="btn">Btn</button>
                    </div>
                    <div class="col-6 col-md-6">
                        <button class="btn">Btn</button>
                    </div> --}}
                </div>
            </div>    
    </div>
    </div>


    <div class="container mt-5">
        <div class="section__heading mb-10">
            <span class="section__heading--subtitle" style="color:black;">Scan QR for making payments</span>
            </p>
        </div>
        <img src="{{ asset('assets/img/advs/payqr3.png') }}" alt="">
    </div>
    {{-- <section class="about__section about__section--bg section--padding" id="about"> --}}
    <div class="container mb-4">
        <div class="about__section--inner d-flex">
            <div class="about__content">
                <div class="section__heading mb-30">
                    <span class="section__heading--subtitle" style="color:black;">ABOUT US</span>
                    <p class="contact__info--des">Narendra Madhu Associates is an India based Law Firm having offices in
                        multiple locations. Our services cover a wide range of legal advice. We have been successfully
                        utilizing our expertise in advising a wide range of clientele including Semi-Governments, Public
                        sectors, Corporates and individuals.
                    </p>
                </div>
                <div class="about__info">
                    <ul class="about__info--wrapper d-flex">
                        <li class="about__info--items">
                            {{-- ▶️ --}}
                            Lawyers For High Court
                        </li>
                        <li class="about__info--items">Lawyers For Property Case</li>
                        <li class="about__info--items">Lawyers For Criminal</li>
                        <li class="about__info--items">Civil Lawyers</li>
                        <li class="about__info--items">Family Case Lawyers</li>
                        <li class="about__info--items">Lawyers For Matrimonial Cases</li>
                        <li class="about__info--items">Lawyers For Revenue</li>
                        <li class="about__info--items">Lawyers For Debt Recovery Tribunal</li>
                        <li class="about__info--items">Lawyers For Cooperative Society</li>
                        <li class="about__info--items">Lawyers For Legal Advisor</li>
                        <li class="about__info--items">Lawyers For Will</li>
                        <li class="about__info--items">Lawyers For Supreme Court</li>
                        <li class="about__info--items">Lawyers For Family Court</li>
                        <li class="about__info--items">Lawyers For Land Disputes</li>
                        <li class="about__info--items">Lawyers For Corporate Law</li>
                        <li class="about__info--items">Lawyers For Cyber Law</li>
                        <li class="about__info--items">Lawyers For NCLT</li>
                        <li class="about__info--items">Lawyers For NDPS</li>
                    </ul>
                    {{-- <a class="about__btn primary__btn" href="#">Hire Me</a> --}}
                </div>
            </div>
            {{-- <div class="about__thumbnail">
                        <div class="about__thumbnail--media position__relative">
                            <img class="position__relative" src="assets/img/other/about.png" alt="img">
                        </div>
                        <div class="about__experience text-center">
                            <h4 class="about__experience--title title-stroke">27+</h4>
                            <span class="about__experience--subtitle">Experience Working</span>
                        </div>
                    </div> --}}
        </div>
    </div>
    <div class="container mt-5">
        <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
            <div class="section__heading max-width-580">
                <span class="section__heading--subtitle" style="color:black;">Our Accomplished Advocates</span>
                {{-- <h2 class="section__heading--title">Blog Latest of News 
                            tricks & Updates</h2>  --}}
            </div>
        </div>
        <div class="blog__section--inner">
            <div class="row">
                {{-- width: 200px; / Set the width to your desired size /
                height: 150px; / Set the height to your desired size /
                object-fit: cover; --}}
              
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">
                            <div class="blog__card--thumbnail" style="max-height: 360px;">
                                <img src="{{ asset('assets/img/advs/adv1.jpg') }}" alt="img" class="img-fluid">
                            </div>
                            <div class="blog__card--content" style="text-align: center;">
                                {{-- <span class="blog__card--tag" style="">Ajit M Khatri</span> --}}
                                <h1 class="mb-12" style="font-weight: 700;">Adv. Ajit M Khatri</h1>
                                <h2 class="mb-12">Chief of the Firm</h2>
                                <h2 class="mb-12">(Ex Add. Collector)</h2>
                                <h3 style="font-size: 16px;">+91 95108 11333</h3>
                            </div>
                    </article>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">
                            <div class="blog__card--thumbnail" style="max-height: 360px;">
                                <img src="{{ asset('assets/img/advs/adv2.jpg') }}" alt="img">
                            </div>
                            <div class="blog__card--content" style="text-align: center;">
                                <h1 class="mb-12" style="font-weight: 700;font-size: 20px;">Adv. Vishweshwar P. Pujara</h1>
                                <h2 class="mb-12">(B.com,LLB)</h2>
                                <h3 style="font-size: 16px;">+91 9898576690</h3>
                            </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">
                            <div class="blog__card--thumbnail" style="max-height: 360px;">
                                <img src="{{ asset('assets/img/advs/adv3.jpg') }}" alt="img">
                            </div>
                            <div class="blog__card--content" style="text-align: center;">
                                <h1 class="mb-12" style="font-weight: 700;">Adv. Ruchika K. Soni</h1>
                                <h2 class="mb-12">(B.com,LLB)</h2>
                                <h3 style="font-size: 16px;">+91 9510811333</h3>
                            </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">
                            <div class="blog__card--thumbnail" style="max-height: 360px;">
                                <img src="{{ asset('assets/img/advs/adv4.jpg') }}" alt="img">
                            </div>
                            <div class="blog__card--content" style="text-align: center;">
                                <h1 class="mb-12" style="font-weight: 700;">Adv. Bhumika G. Patel</h1>
                                <h2 class="mb-12">(M.A,LLB)</h2>
                                <h3 style="font-size: 16px;">+91 9898037281</h3>
                            </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">

                        <div class="blog__card--thumbnail mt-2" style="max-height: 360px;">
                            <img src="{{ asset('assets/img/advs/adv5.jpg') }}" alt="img">
                        </div>
                        <div class="blog__card--content" style="text-align: center;">
                            <h1 class="mb-12" style="font-weight: 700;font-size: 21px;">Advisor. Rajnikant Vedant</h1>
                            <h2 class="mb-12" style="font-size: 17px;">(Ex DY. Collector,Ex.DY.DDO,G.A.S)</h2>
                            <h3 style="font-size: 16px;">+91 9925421908</h3>
                        </div>

                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black;">
                    <article class="blog__card">
                        <div class="blog__card--thumbnail" style="max-height: 360px;">
                            <img src="{{ asset('assets/img/advs/adv6u.jpg') }}" alt="img">
                        </div>
                        <div class="blog__card--content" style="text-align: center;">
                            <h1 class="mb-12" style="font-weight: 700;">Adv. Vijaykumar B. Madhu</h1>
                            <h2 class="mb-12">(B.A,LLB)</h2>
                            <h3 style="font-size: 16px;">+91 9558861888</h3>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6" style="border-top: 2px solid black; border-bottom: 2px solid black;">
                    <article class="blog__card">
                        <div class="blog__card--thumbnail" style="max-height: 360px;">
                            <img src="{{ asset('assets/img/advs/adv7.jpg') }}" alt="img">
                        </div>
                        <div class="blog__card--content" style="text-align: center;">
                            <h1 class="mb-12" style="font-weight: 700;font-size: 16px;">Adv. Sindhi ShahidKhan SabirKhan</h1>
                                <h2 class="mb-12">(B.A,LLB)</h2>
                                <h3 style="font-size: 16px;">+91 9601513964</h3>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}


    {{-- <section class="services__section section--padding" id="servives">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">CREATIVE SERVICE</span>
                        <h2 class="section__heading--title">What can i do for service
                            clients you</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                    </div>
                </div>
                <div class="services__section--inner">
                    <div class="row mb--n30">
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color1 mb-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">Web Development</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color1" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color2 mb-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">Creative Design</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color2" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color3 mb-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">Project Consultancy</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color3" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color4 mb-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">24/7 Support</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color4" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color5 mb-25">
                                    <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"></path></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">Awesome Idea</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color5" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-30">
                            <div class="services__card">
                                <span class="services__card--icon color6 mb-25">
                                    <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z"></path></svg>
                                </span>
                                <div class="services__card--content">
                                    <h3 class="services__card--title mb-15">Development Design</h3>
                                    <p class="services__card--desc mb-20">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                                    <a class="services__card--link color6" href="services.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End sevices section -->

    <!-- Start about section -->
    {{-- <section class="about__section about__section--bg section--padding" id="about">
            <div class="container">
                <div class="about__section--inner d-flex">
                    <div class="about__content">
                        <div class="section__heading mb-30">
                            <span class="section__heading--subtitle text__secondary">ABOUT ME</span>
                            <h2 class="section__heading--title">I can design world for leading ui/ux</h2> 
                        </div>
                        <div class="about__info">
                            <h3 class="about__info--title text__secondary mb-20">PERSONAL INFOS:</h3>
                            <ul class="about__info--wrapper d-flex">
                                <li class="about__info--items">First Name: Maras</li>
                                <li class="about__info--items">Last Name: Faron</li>
                                <li class="about__info--items">Address: Dubai</li>
                                <li class="about__info--items">Phone: +28921184010</li>
                                <li class="about__info--items">Age: 24 Years</li>
                                <li class="about__info--items">Email: you@mail.com</li>
                                <li class="about__info--items">Nationality: Tunisian</li>
                                <li class="about__info--items">Skype: Roben.Boris</li>
                                <li class="about__info--items">Freelance: Available</li>
                                <li class="about__info--items">Languages: French, English</li>
                            </ul>
                            <a class="about__btn primary__btn" href="#">Hire Me</a>
                        </div>
                    </div>
                    <div class="about__thumbnail">
                        <div class="about__thumbnail--media position__relative">
                            <img class="position__relative" src="assets/img/other/about.png" alt="img">
                        </div>
                        <div class="about__experience text-center">
                            <h4 class="about__experience--title title-stroke">27+</h4>
                            <span class="about__experience--subtitle">Experience Working</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </section> --}}

    <!-- End about section -->

    <!-- Start brand section -->
    {{-- <div class="brand__section brand__section--bg border__bottom section--padding">
            <div class="container">
                <div class="brand__section--inner">
                    <div class="brand__logo--child">
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand1.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-1.png" alt="brand-logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand2.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-2.png" alt="brand-logo">
                        </div>
                    </div>
                    <div class="brand__logo--child">
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand3.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-3.png" alt="brand-logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand4.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-4.png" alt="brand-logo">
                        </div>
                    </div>
                    <div class="brand__logo--child">
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand5.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-5.png" alt="brand-logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand6.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-6.png" alt="brand-logo">
                        </div>
                    </div>
                    <div class="brand__logo--child">
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand7.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-7.png" alt="brand-logo">
                        </div>
                        <div class="brand__logo--items">
                            <img class="brand__logo--img brand_logo_light" src="assets/img/logo/brand8.png" alt="brand-logo">
                            <img class="brand__logo--img brand_logo_dark" src="assets/img/logo/dark-log-8.png" alt="brand-logo">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- End brand section -->

    <!-- Start resume section -->

    <!-- End resume section -->

    <!-- Start skills Section -->
    {{-- <section class="skills__section section--padding pt-0">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">SKILLs</span>
                        <h2 class="section__heading--title">Skill of Best Masters Software Skills.</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                    </div>
                </div>
                <div class="skills__section--inner d-flex justify-content-between">
                    <div class="skills__step">
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">Node.js</span>
                                <span class="skills__count width_60">60%</span>
                            </div>
                            <div class="skills__field width_60">
                                
                            </div>
                        </div>
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">JavaScript</span>
                                <span class="skills__count width_75">75%</span>
                            </div>
                            <div class="skills__field width_75">
                                
                            </div>
                        </div>
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">Web Design</span>
                                <span class="skills__count width_90">90%</span>
                            </div>
                            <div class="skills__field width_90">
                                
                            </div>
                        </div>
                    </div>
                    <div class="skills__step">
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">HTML</span>
                                <span class="skills__count width_100">100%</span>
                            </div>
                            <div class="skills__field width_100">
                                
                            </div>
                        </div>
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">CSS</span>
                                <span class="skills__count width_90">90%</span>
                            </div>
                            <div class="skills__field width_90">
                                
                            </div>
                        </div>
                        <div class="skills__items">
                            <div class="skills__text">
                                <span class="skills__name">React.js</span>
                                <span class="skills__count width_70">70%</span>
                            </div>
                            <div class="skills__field width_70">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End skills Section -->

    <!-- Start portfolio section -->
    {{-- <section class="portfolio__section portfolio__section--bg section--padding" id="portfolio">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">Gallery</span>
                      
                    </div>
                 
                </div>
                <div class="portfolio__section--inner">
                    <div class="button-group filters-button-group mb-50">
                        <button class="filters__button--items button is-checked" data-filter="*">Show All</button>
                      
                    </div>
                    <div class="portfolio__grid mb--n30">
                        <div class="element-item web" data-category="web">
                            <div class="portfolio__card" data-value="view1">
                                    <div class="portfolio__image--card">
                                    <img src="{{ asset('assets/img/advs/view1.jpg') }}" alt="Not Found!">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <div class="element-item graphics" data-category="graphics">
                            <div class="portfolio__card" data-value="view2">
                                    <div class="portfolio__image--card">
                                        <img src="{{ asset('assets/img/advs/view2.jpg') }}" alt="img">
                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                            </div>
                        </div>
                        <div class="element-item development" data-category="development">
                            <div class="portfolio__card" data-value="view3">
                                    <div class="portfolio__image--card">
                                        <img src="{{ asset('assets/img/advs/view3.jpg') }}" alt="img">

                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                            </div>
                        </div>
                        <div class="element-item mobile" data-category="mobile">
                            <div class="portfolio__card" data-value="view4">
                                    <div class="portfolio__image--card">
                                        <img src="{{ asset('assets/img/advs/view4.jpg') }}" alt="img">

                                    </div>
                                    <div class="portfolio__content">
                                        <span class="portfolio__zoom text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                                        </span>
                                        <p class="portfolio__desc text-white">Promote your blog posts, case udie, and thehe branded videos.</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End portfolio section -->

    <!-- Start testimonial section -->
    <div class="container mt-5">
        <div class="section__heading text-center mb-50">
            <span class="section__heading--subtitle" style="color:black;">Latest feedback</span>
            {{-- <h2 class="section__heading--title">We are people say me</h2>  --}}
        </div>
        <div class="testimonial__inner testimonial__swiper--activation swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial__items text-center">
                        <div class="testimonial__content mb-30">
                            <ul class="rating__wrapper d-flex justify-content-center">
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                            </ul>
                            <p class="testimonial__desc">“ A top-notch law firm that consistently goes above and beyond to
                                meet their clients' needs."</p>
                        </div>
                        <div class="testimonial__author">
                            {{-- <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img"> --}}
                            <h3 class="testimonial__author--title">Dr. Ritesh M Prajapati Tharad</h3>
                            <span class="testimonial__author--subtitle">Manager</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__items text-center">
                        <div class="testimonial__content mb-30">
                            <ul class="rating__wrapper d-flex justify-content-center">
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                            </ul>
                            <p class="testimonial__desc">“I believe this person is good because I consider them to have a
                                clear understanding and sense of freedom.</p>
                        </div>
                        <div class="testimonial__author">
                            {{-- <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img"> --}}
                            <h3 class="testimonial__author--title">Imtiyaj</h3>
                            <span class="testimonial__author--subtitle">Manager</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__items text-center">
                        <div class="testimonial__content mb-30">
                            <ul class="rating__wrapper d-flex justify-content-center">
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                                <li class="rating__list"><span class="rating__icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="28"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg></span></li>
                            </ul>
                            <p class="testimonial__desc">Excellent service</p>
                        </div>
                        <div class="testimonial__author">
                            {{-- <img class="testimonial__author--media" src="assets/img/other/testimonial-author-thumb.png" alt="img"> --}}
                            <h3 class="testimonial__author--title">Siddharaj Shah</h3>
                            <span class="testimonial__author--subtitle">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial__pagination swiper-pagination"></div>
        </div>
    </div>
    {{-- <span class="testimonial__position--icon left">
                <svg width="260" height="260" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"></path></svg>
            </span>
            <span class="testimonial__position--icon right">
                <svg width="260" height="260" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z"></path></svg>
            </span> --}}



    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <span class="section__heading--subtitle" style="color:black;">Location Address</span>

                <a href="https://www.google.com/maps/place/Satyam+64/@23.0789249,72.5266424,17z/data=!3m1!4b1!4m6!3m5!1s0x395e834a21ba17fd:0x72c1991fc6b54e3c!8m2!3d23.0789249!4d72.5266424!16s%2Fg%2F11fy9dkzm6?entry=ttu"
                    target="_blank">906-907, Satyam 64, Opp. Gujarat High Court, S. G. Highway,
                    Sola, Ahmedabad, Gujarat-380060 <i class="fa fa-external-link" aria-hidden="true"></i></a>

                <iframe width="100%" height="63%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=906-907, Satyam 64, Opp. Gujarat High Court, S. G. Highway,
                            Sola, Ahmedabad, Gujarat-380060&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>


            </div>
        </div>
    </div>


    <!-- Start blog section -->
    {{-- <section class="blog__section section--padding" id="blog">
            <div class="container">
                <div class="section__heading--topbar d-flex align-items-center justify-content-between mb-50">
                    <div class="section__heading max-width-580">
                        <span class="section__heading--subtitle text__secondary">LATEST BLOGS</span>
                        <h2 class="section__heading--title">Blog Latest of News 
                            tricks & Updates</h2> 
                    </div>
                    <div class="section__heading--right max-width-450">
                        <p class="section__heading--desc">Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                    </div>
                </div>
                <div class="blog__section--inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog1.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">UI /UX DESIGN</span>
                                        <h3 class="blog__card--title mb-12">Angular team welarges to trequests blog</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog2.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">HTML AND CSS</span>
                                        <h3 class="blog__card--title mb-12">How to create a website using html</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <article class="blog__card">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
                                    <div class="blog__card--thumbnail">
                                        <img src="assets/img/blog/blog3.png" alt="img">
                                    </div>
                                    <div class="blog__card--content">
                                        <span class="blog__card--tag">Shopify</span>
                                        <h3 class="blog__card--title mb-12">We mack team welarges to trequests blog</h3>
                                        <p class="blog__card--desc">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    {{-- <footer class="footer footer__section footer__bg">
            <div class="container">
                <div class="main__footer d-flex justify-content-between align-items-center">
                    <p class="copyright__content mb-0">Developed with <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </span>  by <span><a class="text__secondary" href="#">Morex</a></span>© 2023</p>
                    <ul class="footer__menu d-flex">
                        <li><a class="footer__menu--link" href="shop.html">Terms & Condition</a></li>
                        <li><a class="footer__menu--link" href="about.html"> Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer> --}}

@endsection


@section('Footer-script')

    <script>
        $(document).ready(function() {

            $.getJSON("https://api.countapi.xyz/hit/mysite.com/visits", function(response) {
    {{-- $("#visits").text(response.value); --}}
    console.log(response)
});
            function getVisitorCount() {
                const count = localStorage.getItem('visitorCount');
                return count ? parseInt(count) : 0;
            }


            function updateVisitorCount() {
                const count = getVisitorCount();
                if (!countedToday()) {
                    localStorage.setItem('visitorCount', count + 1);
                    markAsCountedToday();
                }
                $('#visitorCount').text(getVisitorCount());
            }

            function countedToday() {
                const lastCountedDate = localStorage.getItem('lastCountedDate');
                if (!lastCountedDate) return false;

                const today = new Date().toLocaleDateString();
                return lastCountedDate === today;
            }

            function markAsCountedToday() {
                const today = new Date().toLocaleDateString();
                localStorage.setItem('lastCountedDate', today);
            }

            updateVisitorCount();
        });

        $('.portfolio__card').click(function() {

            var img = $(this).data("value");

            alert(img);
        });

        function shareOnWhatsApp() {
            {{-- alert('hello') --}}
            // Get the inputted phone number
            const phoneNumber = document.getElementById('phoneNumber').value;
            console.log(phoneNumber.length);
            if(phoneNumber == '' || phoneNumber == null){
                alert('Please enter valid mobile number');
                return false;
            }
            if(phoneNumber.length == 10){
                const encodedPhoneNumber = encodeURIComponent(phoneNumber);
    
                // Define your message and URL
                const message = "Check out this link: http://ecard.narendramadhuassociates.com";
                const whatsappURL = `https://api.whatsapp.com/send?phone=${encodedPhoneNumber}&text=${encodeURIComponent(message)}`;
    
                // Open WhatsApp in a new tab or the WhatsApp app if available
                window.open(whatsappURL);
            }else{
                alert("Enter a valid number.");
            }
            // Encode the phone number
        }
    </script>

@endsection
