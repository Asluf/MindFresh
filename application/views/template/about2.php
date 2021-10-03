<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/head');   ?>

	<style>
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
	</style>

</head>

<body style="font-size:14px;">
	<?php 
		$this->load->view('template/navbar2');
	 ?>

	<div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
		<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<div class="ml-md-0">
					<h1 class="text-dark" style="font-size:17px;"><b>- About-Us -</b></h1>
				</div>
				<p class="text-black">We Say <span><b>Eat what you grow; Go vegan</b> </span></p>
			</div>
		</div>
	</div>


	<section class="ftco-section ftco-no-pb ftco-no-pt ftco-animate">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-md-5 img img-2 d-flex BgImage o-hidden" style="background-image:  url('<?php echo base_url(); ?>resources/images/10.jpeg'); overflow: hidden;">
				</div>
				<div class="col-md-7 py-2 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section-bold mb-4 mt-md-5">
						<div class="ml-md-0">
							<h2 class="mb-4" style="font-size:17px;">Who We Are</h2>
						</div>
					</div>
					<div class="pb-md-5">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt ftco-animate ">
		<div class="container">
			<div class="row">
				<div class="col-md-7 py-2 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section-bold mb-4 mt-md-2">
						<div class="ml-md-0">
							<h2 class="mb-4" style="font-size:17px;">Our Vision</h2>
						</div>
					</div>
					<div class="pb-md-5" style="margin-right:40px;">
						<p>Our vision is to have a significant, positive impact on the growth of the personal care and household
							care marketplace where safe and environmentally conscious products prevail and
							where there is a Krish Villa Organics® product in every home.</p>
					</div>
				</div>

			</div>
		</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb ftco-no-pt ftco-animate">
		<div class="container">
			<div class="row">

				<div class="col-md-7 py-2 wrap-about pb-md-5 ftco-animate">
					<div class="heading-section-bold mb-4 mt-md-5">
						<div class="ml-md-0">
							<h2 class="mb-4" style="font-size:17px;">Our Mision</h2>
						</div>
					</div>
					<div class="">
						<p>Our mission is to create the healthiest, highest quality and most accessible personal care and household products for YOU.
							By using pure and simple ingredients with time-tested manufacturing processes for all of our products,
							we meet the needs of the future for people and the planet, today.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light ">
		<div class="container ">
			<div class="row no-gutters ftco-services d-flex text-center">
				<div class="col-xs-6 text-center">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-diet"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Always Fresh</h3>
							<span>Product well package</span>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-center">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-award"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Superior Quality</h3>
							<span>Quality Products</span>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 text-center ">
					<div class="media block-6 services mb-md-0 mb-4">
						<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Support</h3>
							<span>24/7 Support</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<?php $this->load->view('template/footerfont2');  ?>
	<?php $this->load->view('template/footer'); ?>

</body>

</html>