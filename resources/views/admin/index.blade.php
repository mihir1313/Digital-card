<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('admin-title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin\assets\img\favicon.ico') }}" rel="icon">
  <link href="{{ asset('admin\assets\img\apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  {{-- {{ asset('assets\css\vendor\bootstrap.min.css') }} --}}
  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin\assets\vendor\bootstrap\css\bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin\assets\vendor\bootstrap-icons\bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('admin\assets\vendor\boxicons\css\boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('admin\assets\vendor\quill\quill.snow.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('admin\assets\vendor\uill\quill.bubble.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('admin\assets\vendor\remixicon\remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('admin\assets\vendor\simple-datatables\style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

@include('admin.header')
@include('admin.sidebar')


  <main id="main" class="main">
      
      @yield('admin-content')            
    
  </main><!-- End #main -->

@include('admin.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script>
    var BASE_URL = "{{ url('/') }}";
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
  
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="{{ asset('admin\assets\vendor\apexcharts\apexcharts.min.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\bootstrap\js\bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\chart.js\chart.umd.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\echarts\echarts.min.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\quill\quill.min.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\simple-datatables\simple-datatables.js') }}"></script>
  <script src="{{ asset('admin\assets\vendor\tinymce\tinymce.min.js') }}"></script>
  {{-- <script src="{{ asset('admin\assets\assets\vendor\php-email-form\validate.js') }}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('admin\assets\js\main.js') }}"></script>
  @yield('admin-footer')
</body>

</html>