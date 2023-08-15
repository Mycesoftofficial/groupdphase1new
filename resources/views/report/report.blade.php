<!DOCTYPE html>
<html>
    @include('layouts.auth_includes.links')
	<style>
		.row{
			display: flex;
			justify-content: space-between;
		}
	</style>
	<body>

        @include('component.header')

        @include('component.settings')

        @include('component.sidebar')
		<div class="mobile-menu-overlay"></div>
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">	
				<div class="min-height-200px">
					<div class="page-header">
						@include('notification')
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">COP REPORTS</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											GENERATING REPORTS
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="form-group">
							<form action="{{route('report')}}" method="GET">@csrf
								<div class="row">
									<div class="col-md-9">
										<label for="state">Search REPORTS</label>
										<div class="d-flex">
                                            
											{{-- <select class="custom-select2 form-control" name="RecDate" id="state" onchange="this.form.submit()">
												<option selected disabled>Enter REPORTS DATE</option>
											</select> --}}

                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Search By Exact Date :</label>
                                                    <input
                                                        type="text"
                                                        name="CreatedAt"
                                                        id="state"
                                                        class="form-control date-picker"
                                                        placeholder="Select Date"
                                                    />
                                                </div>
                                            </div>
											<button type="submit" class="btn btn-success ml-3" style="background: gold; border:none;">
												<div class="d-flex align-items-center">
													<i class="bi bi-search" style="font-size: 24px;"></i>
													<span class="ml-2" style="font-size: 18px;">Search</span>
												</div>
											</button>
                                        
										</div>
									</div>
								</div>
							</form>
						</div>
						
						
                    </div>
						@php
								$selectedDate = $selectedDate ?? old('CreatedAt');
						@endphp
						@if (count($reports) > 0)
								<div class="card-box pb-10">
									<div class="h5 pd-20 mb-0">Generated Report</div>
									<table class="data-table table nowrap">
										<thead>
											<tr>
												<th class="table-plus">Report Name</th>
												<th>Report Date</th>
												<th>Report year</th>
												<th>Action</th>
												<th>Action</th>

												
											</tr>
										</thead>
										<tbody>
											@foreach ($reports as $report)
											<tr>
												<td class="table-plus">
													<div class="name-avatar d-flex align-items-center">
														
														<div class="txt">
															<div class="weight-600">COP REPORT</div>
														</div>
													</div>
												</td>
												<td>{{ $selectedDate }}</td>

												<td>{{ $report->RecYear }}</td>
												
												<td>  <a href="{{ route('download.report', ['selectedDate' => $selectedDate]) }}" class="btn btn-primary btn-lg">
													Download
												</a></td>
												<td>
													<a href="#" class="btn btn-primary btn-lg btn-preview"
													   data-report-id="{{ $report->id }}"
													   data-selected-date="{{ $selectedDate }}">
														Preview
													</a>
												</td>
												
												
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
						@else
								<p>No reports found for {{ $selectedDate }}. Please select a date and click the search button to generate the report.</p>
						@endif
							
						
						<!-- content_to_print.blade.php -->



						<div style="display: none">
							@include('content_to_print', ['selectedDate' => $selectedDate, 'reports' => $reports])
						</div>
							
						
						
				</div>	
		
        @include('layouts.dash_includes.footer')
			</div>
		</div>
		<!-- welcome modal end -->
        @include('layouts.auth_includes.scripts')
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<script>
			const previewButtons = document.querySelectorAll(".btn-preview");

function openPreview(reportId, selectedDate) {
    const previewURL = `{{ route('preview.report', ['reportId' => 'REPLACE_REPORT_ID', 'selectedDate' => 'REPLACE_SELECTED_DATE']) }}`;
    const actualURL = previewURL.replace('REPLACE_REPORT_ID', reportId).replace('REPLACE_SELECTED_DATE', selectedDate);
    window.open(actualURL, '_blank');
}

previewButtons.forEach(previewButton => {
    previewButton.addEventListener("click", () => {
        const reportId = previewButton.getAttribute('data-report-id');
        const selectedDate = previewButton.getAttribute('data-selected-date');
        openPreview(reportId, selectedDate);
    });
});

		</script>
		
		
	</body>
</html>
<style>
    body {
        background-image: url('background.jpg');
        background-size: cover;
    }

    .blur {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(8px);
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .popup {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 500px; /* Set maximum width for the popup */
        width: 90%; /* Set a responsive width for the popup */
    }
</style>

<!-- Add this script in your HTML -->





  







