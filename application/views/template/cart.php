<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/head');   ?>

	<style>
		span {
			color: #fff;
		}

		input {
			font-size: 16px;
			padding: 3px;
			display: block;
			width: 100px;
			border: none;
			background-color: transparent;
			border-bottom: 2px solid #82ae46;
			margin-bottom: 10px;
		}

		.float-right {
			float: right;
		}
	</style>
</head>

<body class="goto-here">
	<?php if ($this->session->userdata('Role') == '') {
		$this->load->view('template/navbar');
	} ?>
	<div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
		<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<h1 class="mb-4 text-primary" style="font-size:50px;"><b>- Cart -</b></h1>
				<p class="text-black"> A Cart full of Organic Food is Life full of Happiness</p>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-cart ftco-no-pt">
		<div class="container">
			<div class="row">

				<?php
				foreach ($cartitem as $item) {  ?>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo base_url(); ?>resources/images/<?php echo $item['Item_Image_Path']; ?>" alt="Colorlib Template">

								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#"><?php echo $item['Item_Name']; ?></a></h3>
								<div>
									<p class="price"><span class="price-sale"><?php echo $item['Order_Item_Unit_Price']; ?></span></p>
									<p class="price"><span class="price-sale"><?php echo "Av.Qty " . $item['Order_Qty']; ?></span></p>
								</div>
								<div class="d-flex">
									<label>Qty (Kg) : </label>
									<input style="width: 50px;" type="number" class="p-1" onchange="quantity('<?php echo $item['Item_ID']; ?>', '<?php echo $this->session->userdata('Id'); ?>')" value="<?php echo $item['Order_Qty']; ?>" max-length="2" step="1" min="1" max="" id="<?php echo $item['Item_ID']; ?>" class="input-text qty text" size="4">
									<input onclick="quantity('<?php echo $item['Item_ID']; ?>', '<?php echo $this->session->userdata('Id'); ?>')" type="button" class="btn btn-success py-1" style="width:60px" value="ok">

								</div>


								<br />
								<div class="d-flex">
									<div class="pricing">

									</div>
								</div>
								<br />
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<?php if ($this->session->userdata('Email') != '') { ?>

											<a onclick="deletecart('<?php echo $item['Item_ID']; ?>', '<?php echo $this->session->userdata('Id'); ?>')" name=" <?php echo $item['Item_ID']; ?>" class="heart d-flex justify-content-center align-items-center ">
												<span><i class="ion-ios-trash"></i></span>
											</a>
										<?php } ?>
									</div>

								</div>




							</div>
						</div>
					</div>

				<?php } ?>



			</div>
			<div class="row justify-content-center ftco-animate bg-dark">
				<div class="text-light text-left mx-5 p-5 col-md-7">
					<h3 class="text-light" id="totalPrice">Totals : <?php echo $total['0']['Total_Price']; ?>

					</h3>

				</div>
				<div class="col-md-3 text-right mt-5">
					<a href="<?php echo base_url(); ?>index.php/Customer/checkoutfromcart" style="width: 200px;" class="btn btn-primary">Proceed to Checkout</a>
				</div>
			</div>



		</div>
	</section>
	<?php $this->load->view('template/footer'); ?>
	<script>
		function quantity($item, $userid) {
			var quantity = document.getElementById($item).value;
			// console.log($item + " " + x);
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url();  ?>" + "index.php/Customer/changequantity",
				dataType: 'json',
				data: {
					itemid: $item,
					userid: $userid,
					quantity: quantity
				},
				success: function(response) {
					// console.log(response);
					response.map(function(item) {
						// console.log(item.Total_Price);
						document.getElementById('totalPrice').innerHTML = "Total Price : " + item.Total_Price;

					});

				}

			});

		}

		function deletecart($item, $userid) {
			// console.log($item + $role + $userid);

			$.ajax({
				type: 'POST',
				url: "<?php echo base_url();  ?>" + "index.php/Customer/deletecart",
				data: {
					itemid: $item,
					userid: $userid
				},
				success: function(response) {
					// console.log(response);
					window.location = "<?php echo base_url(); ?>" + "index.php/Customer/cart";
				}

			});

		}
	</script>

</body>

</html>