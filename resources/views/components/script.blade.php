 <script src="{{asset('template/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.js')}}"></script>
    <script src="{{asset('template/js/plugins.js')}}"></script>
    <!-- FlexSlider JavaScript
    ================================================== -->
    <script src="{{asset('template/js/jquery.flexslider.js')}}"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{asset('template/js/map.js')}}"></script>

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{--   <link rel="stylesheet" href="/resources/demos/style.css"> --}}
  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
        $(window).load(function() {
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed: 1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    </script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
   
   
    

</body>