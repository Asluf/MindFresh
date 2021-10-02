<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('template/head'); ?>
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
			background: #00C5CD;
			color: white;

		}

		.product-category li a {
			color: black;
		}

		.product-categoryy li a.active {
			background: #00C5CD;
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

<body class="goto-here">

	<?php $this->load->view('admin/template/navbar'); ?>


	<div style="text-align:center;">
		<div class="heading-section-bold  mt-md-3">
			<div class="ml-md-0">
				<h1 class="text-dark mt-2" style="font-size:15px;"><b>- Products -</b></h1>
			</div>
		</div>
	</div>

	<div class="container mb-4">

		<section>
			<div class="row mb-2 ml-2">
				<ul class="nav nav-tabs  product-category d-flex" id="myTab" role="tablist">
					<li class="text-dark nav-item active" style="font-size: 13px; width:70px;">
						<a class="active" onfocus="bkk()" id="Gd1-tab" data-toggle="tab" href="#Gd1" role="tab" aria-controls="Book" aria-selected="true">Books</a>
					</li>
					<li class="text-dark nav-item " style="font-size: 13px; width:70px">
						<a id="Mobile-tab" onfocus="bk()" data-toggle="tab" href="#Mobile" role="tab" aria-controls="Mobile" aria-selected="false">Mobile</a>
					</li>
					<!-- <li class="text-dark nav-item " style="font-size: 13px; width:70px">
						<a id="Textile-tab" onfocus="bk()" data-toggle="tab" href="#Textile" role="tab" aria-controls="Textile" aria-selected="false">Textile</a>
					</li> -->
					<!-- <li class="text-dark nav-item" style="font-size: 13px; width:75px">
						<a id="Grocery-tab" onfocus="bk()" data-toggle="tab" href="#Grocery" role="tab" aria-controls="Grocery" aria-selected="false">Grocery</a>
					</li> -->
					<!-- <li class="text-dark nav-item" style="font-size: 13px; width:60px;">
						<a class="" id="Food-tab" onfocus="bk()" data-toggle="tab" href="#Grocery" role="tab" aria-controls="Food" aria-selected="false">Food</a>
					</li> -->
					<li class="text-dark nav-item" style="font-size: 13px; width:50px; ">
						<a id="Electronic-tab" onfocus="bk()" style="text-align:left;" data-toggle="tab" href="#Grocery" role="tab" aria-controls="Electronic" aria-selected="false">Electronics</a>
					</li>
				</ul>
			</div>
			<section id="grade-div" style="display: block;">
				<div class="row mb-2 ml-2">
					<ul class="nav nav-tabs  product-categoryy d-flex " id="myTab2" role="tablist2">

						<li class="text-dark nav-item active" style="font-size: 13px;">
							<a id="Gd1-tab" class="btn-sm gg active" data-toggle="tab" href="#Gd1" role="tab" aria-controls="Gd1" aria-selected="false">G-1</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd2-tab" class="btn-sm gg" data-toggle="tab" href="#Gd2" role="tab" aria-controls="Gd2" aria-selected="false">G-2</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd3-tab" class="btn-sm gg" data-toggle="tab" href="#Gd3" role="tab" aria-controls="Gd3" aria-selected="false">G-3</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd4-tab" class="btn-sm gg" data-toggle="tab" href="#Gd4" role="tab" aria-controls="Gd4" aria-selected="false">G-4</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd5-tab" class="btn-sm gg" data-toggle="tab" href="#Gd5" role="tab" aria-controls="Gd5" aria-selected="false">G-5</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd6-tab" class="btn-sm gg" data-toggle="tab" href="#Gd6" role="tab" aria-controls="Gd6" aria-selected="false">G-6</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd7-tab" class="btn-sm gg" data-toggle="tab" href="#Gd7" role="tab" aria-controls="Gd7" aria-selected="false">G-7</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd8-tab" class="btn-sm gg" data-toggle="tab" href="#Gd8" role="tab" aria-controls="Gd8" aria-selected="false">G-8</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd9-tab" class="btn-sm gg" data-toggle="tab" href="#Gd9" role="tab" aria-controls="Gd9" aria-selected="false">G-9</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd10-tab" class="btn-sm gg" data-toggle="tab" href="#Gd10" role="tab" aria-controls="Gd10" aria-selected="false">G-10</a>
						</li>
						<li class="text-dark nav-item " style="font-size: 13px;">
							<a id="Gd11-tab" class="btn-sm gg" data-toggle="tab" href="#Gd11" role="tab" aria-controls="Gd11" aria-selected="false">G-11</a>
						</li>
						<!-- <li class="text-dark nav-item active" style="font-size: 13px;">
							<a class="btn-sm gg active" id="All-tab" data-toggle="tab" href="#All" role="tab" aria-controls="Book" aria-selected="true">All</a>
						</li> -->
					</ul>
				</div>
			</section>



			<div class="tab-content" id="myTabContent">

				<!-- <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="All-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book');  ?>
					</div>
				</div> -->
				<div class="tab-pane fade show active" id="Gd1" role="tabpanel" aria-labelledby="Gd1-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book1');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd2" role="tabpanel" aria-labelledby="Gd2-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book2');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd3" role="tabpanel" aria-labelledby="Gd3-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book3');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd4" role="tabpanel" aria-labelledby="Gd4-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book4');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd5" role="tabpanel" aria-labelledby="Gd5-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book5');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd6" role="tabpanel" aria-labelledby="Gd6-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book6');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd7" role="tabpanel" aria-labelledby="Gd7-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book7');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd8" role="tabpanel" aria-labelledby="Gd8-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book8');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd9" role="tabpanel" aria-labelledby="Gd9-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book9');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd10" role="tabpanel" aria-labelledby="Gd10-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book10');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Gd11" role="tabpanel" aria-labelledby="Gd11-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/book11');  ?>
					</div>
				</div>

				<!-- ////////////////////////////////////// -->
				<div class="tab-pane fade" id="Mobile" role="tabpanel" aria-labelledby="Mobile-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/mobile');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Textile" role="tabpanel" aria-labelledby="Textile-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/textile');  ?>
					</div>
				</div>
				<div class="tab-pane fade" id="Grocery" role="tabpanel" aria-labelledby="Grocery-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/grocery');  ?>
					</div>
				</div>
				<!-- <div class="tab-pane fade" id="Food" role="tabpanel" aria-labelledby="Food-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/food');  ?>
					</div>
				</div> -->
				<div class="tab-pane fade" id="Electronic" role="tabpanel" aria-labelledby="Electronic-tab">
					<div class="row col-xs-12" id="Fruits" style="font-size:14px;">
						<?php $this->load->view('template/card/electronic');  ?>
					</div>
				</div>
			</div>



		</section>

	</div>
	<br>
	<br>

	<?php $this->load->view('template/footer');  ?>
	<?php $this->load->view('admin/template/footerfont');  ?>



</body>
<script>
	// function showmoreinfo($item, $userid, $unitprice, $name){

	// }
	function addtocart($item, $userid, $unitprice, $name) {
		// console.log($item + $role + $userid);

		$.ajax({
			type: 'POST',
			url: "<?php echo base_url();  ?>" + "index.php/Customer/addtocart",
			data: {
				itemid: $item,
				userid: $userid,
				unitprice: $unitprice
			},
			success: function(response) {
				// console.log(response);
				const Toast = Swal.mixin({
					toast: true,
					position: 'bottom-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				});

				Toast.fire({
					icon: 'success',
					title: $name + ' added to cart'
				});
			}

		});

	}

	function buynow($item, $userid, $unit) {
		// console.log($item  + $userid);
		Swal.fire({
			title: '<strong>Enter Quantity</strong>',
			showConfirmButton: false,
			html: "<label>Quantity : </label> <input type='number' id='quantity'  />" +
				"<br/>" +
				"<input type='button' onclick='hi(" + $item + "," + $userid + "," + $unit + ")' value='Proceed to checkout' class='btn btn-primary'/>"
		});




	}

	function hi($item, $userid, $unit) {
		var quantity = document.getElementById('quantity').value;
		// console.log($item+" "+$userid+" "+$unit+ quantity);
		$.ajax({
			type: 'POST',
			url: "<?php echo base_url(); ?>" + "index.php/Customer/buynow",
			data: {
				userid: $userid,
				itemid: $item,
				quantity: quantity,
				unit: $unit
			},
			success: function(response) {
				window.location = "<?php echo base_url(); ?>" + "index.php/Customer/checkout";
			},
			error: function(e) {
				console.log('You already have uncompleted payments');
				window.location = "<?php echo base_url(); ?>" + "index.php/Customer/checkout";

			}
		});



	}

	function wishlist($item, $userid, $name) {
		// console.log($item + $role + $userid);

		$.ajax({
			type: 'POST',
			url: "<?php echo base_url();  ?>" + "index.php/Customer/wish",
			data: {
				itemid: $item,
				userid: $userid
			},
			success: function(response) {

				const Toast = Swal.mixin({
					toast: true,
					position: 'bottom-end',
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
					title: $name + ' added to wishlist'
				});
			}

		});

	}

	function logintobuy() {
		window.location = "<?php echo base_url(); ?>" + "index.php/Homepage/logout";
	}
</script>



</html>