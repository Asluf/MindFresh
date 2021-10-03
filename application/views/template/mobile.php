<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/head'); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<style>
		

		.form-control-borderless {
			border: none;
		}

		.form-control-borderless:hover,
		.form-control-borderless:active,
		.form-control-borderless:focus {
			border: none;
			outline: none;
			box-shadow: none;
		}


		.BgImage {
			display: block;
			justify-content: center;
			align-items: center;
			text-align: center;

			background-size: 640 426;
			background-repeat: no-repeat;
			background-position: center center;
			border-radius: 5px;
		}

		@media (max-width: 768px) {
			.carousel-inner .carousel-item>div {
				display: none;
			}

			.carousel-inner .carousel-item>div:first-child {
				display: block;
			}
		}

		.carousel-inner .carousel-item.active,
		.carousel-inner .carousel-item-next,
		.carousel-inner .carousel-item-prev {
			display: flex;
		}

		/* display 3 */
		@media (min-width: 768px) {

			.carousel-inner .carousel-item-right.active,
			.carousel-inner .carousel-item-next {
				transform: translateX(33.333%);
			}

			.carousel-inner .carousel-item-left.active,
			.carousel-inner .carousel-item-prev {
				transform: translateX(-33.333%);
			}
		}

		.carousel-inner .carousel-item-right,
		.carousel-inner .carousel-item-left {
			transform: translateX(0);
		}

		#invest {

			height: 550px;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

	<style>
		.product-category li a.active {
			background: #C33764;
			color: white;

		}

		.product-category li a {
			color: black;
		}

		.product-categoryy li a.active {
			background: #C33764;
			color: white;

		}

		.product-categoryy li a {
			color: black;
		}
	</style>
	<script>
		function bk() {
			document.getElementById('grade-div').style.display = "none";
		}

		function bkk() {
			document.getElementById('grade-div').style.display = "block";
		}
	</script>

</head>

<body class="goto-here bg-light">

	<?php
	$this->load->view('template/navbar2');
	?>
	<form name="search_form" id="search_form" style="padding-bottom: 0; padding-top:0;">
		<div class="card-body row no-gutters align-items-center d-flex p-2 pt-2">

			<div>
				<input class="form-control-sm" name="searchbox" id="searchbox" style="width: 210px;border-bottom:3px solid orangered;" type="search" placeholder="Search Here">
			</div>
			<div>
				<a href="#" onclick="gg()"> <i class="fas fa-search h4 text-body pl-1"></i> </a>
			</div>


		</div>
	</form>


	<div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
		<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<div class="ml-md-0">
					<h1 class="text-dark" style="font-size:17px;"><b>- Mobile -</b></h1>
				</div>
				<p class="text-dark">Join us Directly or Connect Virtually</p>
			</div>
		</div>
	</div>
	<div class="tab-pane fade show active" id="Mobile" role="tabpanel" aria-labelledby="Mobile-tab">
		<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
			<?php $this->load->view('template/card/mobile');
			?>
		</div>
	</div>







	<?php $this->load->view('template/footerfont2');  ?>
	<?php $this->load->view('template/footer');  ?>
	<script>
		// jQuery("h1").fitText(1.2);
		function gg() {
			x = document.getElementById('searchbox').value;
			window.location = "<?php echo base_url(); ?>" + "index.php/Homepage/search_/" + x;
			// alert(document.getElementById('searchbox').value);
			// $.ajax({
			// 	url: "<?php echo base_url(); ?>index.php/Search/"
			// })
		}
	</script>

</body>

</html>