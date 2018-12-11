<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    @yield('head')
</head>

<body>
    <!-- Main navbar -->
    @include('partials.navbar')
    <!-- /Main navbar -->
    
    <!-- Main content -->
    @yield('body')
    <!-- /main content -->
    @include('partials.footer')
    <script>
            function openNav() {
              document.getElementById("myNav").style.width = "100%";
            }
            
            function closeNav() {
              document.getElementById("myNav").style.width = "0%";
            }
            </script>
    @yield('foot')
</body>
</html>