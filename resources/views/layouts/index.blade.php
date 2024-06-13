<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('dashboard-title')</title>
   @yield('dashboard-header')
  <meta name="description" content="">
  <meta property="og:title" content="NARENDRA MADHU ASSOCIATES">
  <meta property="og:description" content="One-stop Solutions For Legal Advice">
  <meta property="og:image" content="http://ecard.narendramadhuassociates.com/assets/img/hero/IMG-20230825-WA0108.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:url" content="http://ecard.narendramadhuassociates.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('assets\css\plugins\swiper-bundle.min.css') }} ">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
  
  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('assets\css\vendor\bootstrap.min.css') }}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">

  <!-- Dark css here -->
  <link rel="stylesheet" href="{{ asset('assets\css\dark.css') }}">

  <!-- Rtl css here -->
  <link rel="stylesheet" href="{{ asset('assets\css\rtl.css') }}">
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    {{-- if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.documentElement.classList.remove("dark");
    }  --}}
    document.documentElement.classList.add("light");

    
  </script>

</head>

<body class="bg-light_primary_bg">

    <!-- Preloader start -->
    {{-- <div id="preloader">
        <div class="loader--border"></div>
    </div> --}}
    <!-- Preloader end -->

    {{-- <button class="light__dark--btn style__fixed" id="light__to--dark">
        <svg class="dark--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"></path></svg>
        <svg class="light--mode__icon" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"></path></svg>
    </button> --}}

    {{-- @include('layouts.header') --}}

<main class="main__content_wrapper" style="border:4px solid black;height: 100%;">
     @yield('dashboard-content')
    </main>



    <!-- Scroll top bar -->
    <button id="scroll__top" style="background: black"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
   <!-- All Script JS Plugins here  -->
    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


   <script src="{{ asset('assets\js\vendor\popper.js') }}" defer="defer"></script>
   <script src="{{ asset('assets\js\vendor\bootstrap.min.js') }}" defer="defer"></script>
   <script src="{{ asset('assets\js\plugins\swiper-bundle.min.js') }}"></script>
   <script src="{{ asset('assets\js\plugins\isotope.pkgd.min.js') }}"></script>
   <script src="{{ asset('assets\js\plugins\imagesloaded.pkgd.min.js') }}"></script>

  <!-- Customscript js -->
  <script src="{{ asset('assets\js\script.js') }}"></script>

  <!-- Dark to light js -->
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.getElementById("light__to--dark")?.classList.add("dark--version");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.getElementById("light__to--dark")?.classList.remove("dark--version");
    } 
  </script>
  @yield('Footer-script')
</body>

</html>