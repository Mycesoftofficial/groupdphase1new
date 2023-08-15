<!DOCTYPE html>
<html lang="en">
    @include('layouts.auth_includes.links')

	<style>
		body {
			font-family: 'Inter', sans-serif;
		}
	</style>
<body>
	<div class="blur" id="previewModal">
		<div class="popup">
    <!-- basic table  Start -->
    @include('report.inc.step1')
	@include('report.inc.step2')
	@include('report.inc.step3')
	@include('report.inc.step4')
	@include('report.inc.step5')
		</div>
	</div>
	

					</div>
					<!-- basic table  End -->
</body>
</html>