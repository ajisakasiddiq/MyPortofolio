<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

     {{-- style --}}
     @stack('prepend-style')
    @include('includes.dashboard-style')
    @stack('addon-style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('includes.dashboard-navbar')
        @include('includes.dashboard-sidebar')
  
            @yield('content')
        
        {{-- footer --}}
            @include('includes.-dashboard-footer')



<!-- footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

 <!-- Bootstrap core JavaScript -->
 @stack('prepend-script')
 @include('includes.dashboard-script')
 @stack('addon-script')
</body>

</html>