    <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
@include('components.head')
@include('components.icon')
    <!-- START SITE -->
<div id="wrapper">
    @include('components.navbar')
    @yield('content')
 </div>
    <!-- end wrapper -->
@include('components.footer')
@include('components.script')

</html>
        