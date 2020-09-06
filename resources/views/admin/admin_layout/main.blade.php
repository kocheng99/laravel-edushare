<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
{{-- <title>@yield('title') - {{config('app.name')}}</title> --}}
<title>@yield('title')</title>
 
  <!-- General CSS Files -->
{{-- <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="{{asset('/assets/modules/fontawesome/css/all.min.css')}}"> --}}
 

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/assets/css/components.css')}}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div> 
      
      @include('admin.admin_layout.header')
      @include('admin.admin_layout.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('content-title')</h1>
          </div>

          @include('alert.alerts')
          @yield('content')
          
          
        </section>
        
      </div>

      @yield('modal')

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  @stack('before-script')

  <!-- General JS Scripts -->
  {{-- <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js')}}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> --}}
  <script src="{{asset('/assets/modules/jquery.min.js')}}"></script>
  {{-- <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
  <script src="{{asset('/assets/modules/popper.js')}}"></script>
  {{-- <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  <script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
  {{-- <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js')}}"></script> --}}
  <script src="{{asset('/assets/modules/jquery.nicescroll.min.js')}}"></script>
  {{-- <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js')}}"></script> --}}
  <script src="{{asset('/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  @stack('page-script')
  
  
  <!-- Template JS File -->
  <script src="{{asset('/assets/js/scripts.js')}}"></script>
  <script src="{{asset('/assets/js/custom.js')}}"></script>
  
  <!-- Page Specific JS File -->
  @stack('after-script')

</body>
</html>
