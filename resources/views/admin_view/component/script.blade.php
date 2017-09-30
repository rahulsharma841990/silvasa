<script src="{{asset('admin_temp/global/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('admin_temp/global/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('admin_temp/global/js/jquery-ui.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{asset('admin_temp/global/js/html5shiv.js')}}"></script>
<script src="{{asset('admin_temp/global/js/respond.min.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('admin_temp/global/vendors/iCheck/custom.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/jquery.pulsate.js')}}"></script>
@if(!empty(@$js))

		@foreach($js as $script)
			@include('admin_view.component.plugins.js.'.$script)
		@endforeach
	@endif
<!--LOADING SCRIPTS FOR PAGE-->

{{-- <script src="assets/vendors/jquery-jvectormap/jquery-jvectormap-2.0.1.min.js"></script>
<script src="assets/vendors/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendors/jquery-jvectormap/jquery-jvectormap-us-lcc-en.js"></script>
<script src="assets/vendors/jquery-jvectormap/gdp-data.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.categories.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.pie.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.tooltip.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.fillbetween.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.stack.js"></script>
<script src="assets/vendors/flot-chart/jquery.flot.spline.js"></script>
<script src="assets/vendors/jquery-animateNumber/jquery.animateNumber.min.js"></script>
<script src="assets/vendors/jquery.sparkline.min.js"></script>
<script src="assets/vendors/skycons/skycons.js"></script>
<script src="assets/js/index.js"></script> --}}
<!--CORE JAVASCRIPT-->

<script src="{{asset('admin_temp/global/js/core.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/system-layout.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/jquery-responsive.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/DataTables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin_temp/assets/vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{asset('admin_temp/assets/js/table-advanced.js')}}"></script>
<script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
@if(@$dataTable != null)
	{!! @$dataTable->scripts() !!}
@endif
<!--<script>jQuery(document).ready(function () {
    "use strict";
    JQueryResponsive.init();
    Layout.init();
})
</script>;--> 
{{-- <script>jQuery(document).ready(function () {
    index.init();
});


</script> --}}
{{-- <script>jQuery(document).ready(function () {
    table_advanced.init();
});


</script> --}}
</body>

<!-- Mirrored from next-themes.com/mtek/code/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 03:04:20 GMT -->
</html>