<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/head');   ?>

</head>

<body class="goto-here">
	<?php $this->load->view('customer/template/navbar'); ?>


	<div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
		<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<h1 class="mb-4 text-primary" style="font-size:50px;"><b>- Checkout -</b></h1>
				<p class="text-black">Let's Finalise your Purchase</p>
			</div>
		</div>
	</div>
	<!-- <section class="ftco-section"> -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">


					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>Product name</th>
								<th>Quantity</th>
								<th>Unit Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($getcheckoutdetails as $item) {  ?>

								<tr class="text-center">
									<td class="image-prod">
										<div class="img" style="background-image:url(<?php echo base_url(); ?>resources/images/<?php echo $item['Item_Image_Path']; ?>);"></div>
									</td>
									<td class="product-name">
										<h3><?php echo $item['Item_Name']; ?></h3>
									</td>
									<td class="price"><?php echo $item['Order_Qty']; ?></td>
									<td class="total" id="tot"><?php echo $item['Order_Item_Unit_Price']; ?></td>
									<td class="total" id="tot"><?php echo $item['Total_Price']; ?></td>
								</tr>

							<?php } ?>

						</tbody>
					</table>
				</div>
			</div>
			<div class="row mt-5 pt-3 justify-content-between">
				<div class="col-md-6 d-flex mb-5">
					<div class="cart-detail cart-total p-3 p-md-4 bg-primary rounded text-light">
						<h3 class="text-light">Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span>Rs.<?php echo $getcheckout['0']['Checkot_Total_Price'];  ?></span>
						</p>

						<p class="d-flex">
							<span>Discount</span>
							<span><?php echo $getcheckout['0']['Discount'];  ?>%</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Net Total</span>
							<span id="total">Rs.<?php echo $getcheckout['0']['Total_Payable_Price'];  ?></span>
						</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="cart-detail p-3 p-md-4 bg-primary rounded text-light">
						<div class="form-group">
							<div class="col-md-12">
								<div class="checkbox">
									<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
								</div>
							</div>
						</div>
						<p><a href="<?php echo base_url(); ?>index.php/Customer/cancelcheckout" class="btn btn-block btn-danger">Cancel Checkout</a></p>
						<p><input type="button" onclick="placeorder('<?php echo $this->session->userdata('checkout'); ?>')" class="btn btn-block btn-info" value="Place an order" /></p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </section>  -->
	<?php $this->load->view('template/footerfont'); ?>


	<?php $this->load->view('template/footer'); ?>






	<script>
		function placeorder($id) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "index.php/Customer/placeorder/" + $id,
				success: function(response) {

					window.location = "<?php echo base_url(); ?>index.php/Customer/shop";
					alert("Success");
				}

			})
		}
		$(document).ready(function() {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>