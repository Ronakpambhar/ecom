<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom Admin</title>
    <!-- {{ asset('') }} -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}"/>
    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
@yield('linkcss')

</head>
<body>
<div class="main-wrapper">
      <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
</div>
@yield('content')
<!-- {{ asset('') }} -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
@yield('linkjs')
<script>
     $(".preloader").fadeOut();
      // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

// if url is empty, skip the menu dividers and reset the menu selection to default
if (newURL != "") {

    // if url is "-", it is this page -- reset the menu:
    if (newURL == "-" ) {
        resetMenu();            
    } 
    // else, send page to designated URL            
    else {  
      document.location.href = newURL;
    }
}
}

// resets the menu selection upon entry to this page:
function resetMenu() {
document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>