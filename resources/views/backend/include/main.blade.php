<!DOCTYPE html>
<html lang="en">
	@include('backend.include.head')
	<body class="no-skin">
		@include('backend.include.topbar')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			@include('backend.include.sidebar')
			
			@yield('content')

			@include('backend.include.footer')

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		@include('backend.include.script')
	</body>
</html>
