<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  @stack('prepend-style')
  @include('includes.style-admin')
  @stack('addon-style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
  @include('includes.navbar-admin')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('includes.aside-admin')

@yield('content')



@include('includes.footer-admin')


</div>


@stack('prepend-script')
@include('includes.script-admin')
@stack('addon-script')


</body>
</html>
