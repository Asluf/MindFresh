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


		.product-category li a.active {
			background: #00C5CD;
			color: white;

		}

		.product-category li a {
			color: black;
		}
	</style>

</head>

<body style="font-size:14px;">

	<?php $this->load->view('admin/template/navbar'); ?>


	<div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
		<div class="heading-section-bold mb-4 mt-md-5">
			<div class="ml-md-0">
				<div class="ml-md-0">
					<h1 class="text-dark" style="font-size:17px;"><b>- Add-New-Item -</b></h1>
				</div>
				<p class="text-black">We Say <span><b>Buy what you want easier</b> </span></p>
			</div>
		</div>
	</div>
	<section class="mb-4">

		<div class="row ml-2 mb-2">

			<ul class="nav nav-tabs  product-category d-flex" id="myTab" role="tablist">
				<li class="text-dark nav-item active" style="font-size: 15px; width:80px;">
					<a class="active" id="Book-tab" data-toggle="tab" href="#Book" role="tab" aria-controls="Book" aria-selected="true">Books</a>
				</li>
				<li class="text-dark nav-item " style="font-size: 15px; width:80px">
					<a id="Textile-tab" data-toggle="tab" href="#Textile" role="tab" aria-controls="Textile" aria-selected="false">Textile</a>
				</li>

				<li class="text-dark nav-item " style="font-size: 15px; width:80px">
					<a id="Mobile-tab" data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">Mobile</a>
				</li>
			</ul>
		</div>


		<div class="tab-content" id="myTabContent">

			<div class="tab-pane fade show active" id="Book" role="tabpanel" aria-labelledby="Book-tab">
				<div class="row col-xs-11" id="Vegetables" style="font-size:14px;">
					<?php $this->load->view('admin/form/book');  ?>
				</div>
			</div>
			<div class="tab-pane fade" id="Textile" role="tabpanel" aria-labelledby="Textile-tab">
				<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
					<?php $this->load->view('admin/form/textile');  ?>
				</div>
			</div>
			<div class="tab-pane fade" id="Mobile" role="tabpanel" aria-labelledby="Mobile-tab">
				<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
					<?php $this->load->view('admin/form/mobile');  ?>
				</div>
			</div>
		</div>


	</section>





	<?php $this->load->view('admin/template/footerfont');  ?>
	<?php $this->load->view('template/footer'); ?>
	<script>
		$(document).ready(function() {
			$("#new-book").submit(function(e) {

				e.preventDefault();
				base_url = "<?php echo base_url(); ?>";

				var formvalid = $("#new-book").valid();
				if (formvalid) {

					$.ajax({
						url: base_url + 'index.php/Admin/addnewbook',
						method: 'post',
						data: new FormData(this),
						contentType: false,
						cache: false,
						async: false,
						processData: false,
						success: function(response) {
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 2000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							});

							Toast.fire({
								icon: 'success',
								title: 'Book added successfully '
							});
							// when we make the login page,set this window.location
							window.location = base_url + 'index.php/Add_a838fggdgfdt';
						},
						error: function() {
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 2000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							});

							Toast.fire({
								icon: 'error',
								title: 'something went wrong. Please check your internet connection'
							});
						}

					});

				}
			});

			$("#new-book").validate({
				rules: {
					bookname: "required",
					grade: "required",
					isbn: "required",
					author: "required",
					bookprice: "required",
					bookqty: "required",
					bookmore: "required",
					bookpage: "required",
					bookpub: "required",
					book: "required"
				},
				messages: {

					bookname: "*required",
					grade: "*required",
					isbn: "*required",
					author: "*required",
					bookprice: "*required",
					bookqty: "*required",
					bookmore: "*required",
					bookpage: "*required",
					bookpub: "*required",
					book: "*required"

				}
			});
			$("#new-textile").submit(function(e) {

				e.preventDefault();
				base_url = "<?php echo base_url(); ?>";

				var formvalid = $("#new-textile").valid();
				if (formvalid) {

					$.ajax({
						url: base_url + 'index.php/Admin/addnewtextile',
						method: 'post',
						data: new FormData(this),
						contentType: false,
						cache: false,
						async: false,
						processData: false,
						success: function(response) {
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 2000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							});

							Toast.fire({
								icon: 'success',
								title: 'Textile item added successfully '
							});
							// when we make the login page,set this window.location
							window.location = base_url + 'index.php/Add_a838fggdgfdt';
						},
						error: function() {
							const Toast = Swal.mixin({
								toast: true,
								position: 'top-end',
								showConfirmButton: false,
								timer: 2000,
								timerProgressBar: true,
								didOpen: (toast) => {
									toast.addEventListener('mouseenter', Swal.stopTimer)
									toast.addEventListener('mouseleave', Swal.resumeTimer)
								}
							});

							Toast.fire({
								icon: 'error',
								title: 'something went wrong. Please check your internet connection'
							});
						}

					});

				}
			});

			$("#new-textile").validate({
				rules: {
					tname: "required",
					tprice: "required",
					tqty: "required",
					tmore: "required",
					textile: "required"
				},
				messages: {

					tname: "required",
					tprice: "required",
					tqty: "required",
					tmore: "required",
					textile: "required"

				}
			});
		});
	</script>

</body>

</html>