<!DOCTYPE html>
<html>
	@include('layouts.auth_includes.links')
	<body>
    @include('component.loader')

		@include('component.header')

		@include('component.settings')

		@include('component.sidebar')
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">
				<div class="title pb-20">
					<h2 class="h3 mb-0">Dashboard Overview</h2>
				</div>

				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $totalMales }}</div>
									<div class="font-14 text-secondary weight-500">
										Total Male
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy fa fa-male" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $totalFemales }}</div>
									<div class="font-14 text-secondary weight-500">
										Total Female
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<i class="icon-copy fa fa-female" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark">{{ $totalRecords }}</div>
									<div class="font-14 text-secondary weight-500">
										Total Records
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i class="icon-copy fa fa-address-book" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Recent Report</div>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus">Report Name</th>
								<th>Report Date</th>
								<th>Report year</th>
								<th>Action</th>								
							</tr>
						</thead>
						<tbody>
							@php
								$selectedDate = $selectedDate ?? old('RecDate');
						@endphp
						@foreach ($recentReports as $report)
							<tr>
								<td class="table-plus">
									<div class="name-avatar d-flex align-items-center">
										
										<div class="txt">
											<div class="weight-600">COP REPORT</div>
										</div>
									</div>
								</td>
								<td>{{ $report->RecDate }}</td>

								<td>{{ $report->RecYear }}</td>
								
								<td>  <a href="{{ route('download.report', ['selectedDate' => $selectedDate]) }}" class="btn btn-primary btn-lg">
									Download
								</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
              @include('layouts.dash_includes.footer')
			</div>
		</div>
        @include('layouts.auth_includes.scripts')
		<script>
			const previewButtons = document.querySelectorAll(".btn-preview");
		
			function openPreviews(reportIds, selectedDate) {
				reportIds.forEach(reportId => {
					const previewURL = `{{ route('preview.report', ['reportId' => 'REPLACE_REPORT_ID', 'selectedDate' => 'REPLACE_SELECTED_DATE']) }}`;
					const actualURL = previewURL.replace('REPLACE_REPORT_ID', reportId).replace('REPLACE_SELECTED_DATE', selectedDate);
					window.open(actualURL, '_blank');
				});
			}
		
			previewButtons.forEach(previewButton => {
				previewButton.addEventListener("click", () => {
					const reportIds = Array.from(previewButtons).map(btn => btn.getAttribute('data-report-id'));
					const selectedDate = previewButton.getAttribute('data-selected-date');
					openPreviews(reportIds, selectedDate);
				});
			});
		</script>
