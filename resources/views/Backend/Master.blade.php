
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https:/workload.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name') }}</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ url('https://workload.dexignlab.com/xhtml/images/favicon.png') }}" />
	<link href="{{ url('https://workload.dexignlab.com/xhtml/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
	<link href="{{ url('https://workload.dexignlab.com/xhtml/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

	<!-- Style css -->
    <link href="{{ url('https://workload.dexignlab.com/xhtml/css/style.css') }}" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		@include('Backend.Partial.TopHeaderMenuBar')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				@include('Backend.Partial.LeftMainNavigationMenuBar')
				<div class="plus-box">
					<div class="text-center">
						<h4 class="fs-18 font-w600 mb-4">EnableTSHIRT E-Commerce Website</h4>
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded">Learn more <i class="fas fa-caret-right"></i></a>
					</div>
				</div>

				<div class="copyright">
					<p><strong>TSHIRT Project Management</strong> © 2024 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-6 col-sm-6 col-xxl-12">
										@yield('Main Content')
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
					
					
					
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            @include('Backend.Partial.Footer')
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('Backend.Partial.FooterScript')

</body>
</html>
