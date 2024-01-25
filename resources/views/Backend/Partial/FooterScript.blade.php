<!-- Required vendors -->
<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/global/global.min.js') }}"></script>
	<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/apexchart/apexchart.js') }}"></script>

	<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/peity/jquery.peity.min.js') }}"></script>
	<!-- Dashboard 1 -->
	<script src="{{ url('https://workload.dexignlab.com/xhtml/js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ url('https://workload.dexignlab.com/xhtml/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ url('https://workload.dexignlab.com/xhtml/js/custom.min.js') }}"></script>
	<script src="{{ url('https://workload.dexignlab.com/xhtml/js/dlabnav-init.js') }}"></script>
	<script src="{{ url('https://workload.dexignlab.com/xhtml/js/demo.js') }}"></script>
    <script src="{{ url('https://workload.dexignlab.com/xhtml/js/styleSwitcher.js') }}"></script>
	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},
					800:{
						items:2
					},
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>