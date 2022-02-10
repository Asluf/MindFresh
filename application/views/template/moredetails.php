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

<body class="goto-here">
    <?php
    $this->load->view('template/navbar');
    ?>
    <div class="row">
        <div class="ml-4 ">
            <a style="width:80px;" href="<?php echo base_url(); ?>index.php/Home" class="btn btn-light btn-lg heart d-flex justify-content-center align-items-center ">
                <span class="icon-home h4">
            </a>

        </div>
        <div class="col">

            <div class="heading-section-bold  mt-md-3 ml-5">
                <div class="">

                    <h1 class="text-dark mt-2" style="font-size:20px;"><b>- Books -</b></h1>
                </div>
            </div>


        </div>

    </div>



    <div class="container mb-4">

        <section>
            <div>
                <div id="bookk<?php echo $part[0]['Item_ID']; ?>">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content border-0">
                            <div>
                                <h4 class="modal-title text-dark text-center" id="exampleModalLongTitle"><?php echo $part[0]['Item_Name']; ?></h4>
                            </div>
                            <div class="modal-body text-dark">
                                <img class="float-center mb-3" style="width: 270px;" src="<?php echo base_url(); ?>resources/book_pics/<?php echo $part[0]['Item_Image_Path']; ?>" alt="Contact Asluf for more details"><br />
                                <div class="row">
                                    <div class="col text-left h4">Order By: </div>

                                    <div class="col">
                                        <a id="<?php echo $part[0]['Item_ID']; ?>" style="width:60px;" href="https://api.whatsapp.com/send?phone=+94767520348&text=I want to purchase <?php echo $part[0]['Item_Name']; ?>" name=" <?php echo $part[0]['Item_ID']; ?>" class="btn btn-success btn-lg heart d-flex justify-content-center align-items-center ">
                                            <span class="icon-whatsapp">
                                        </a>
                                    </div>

                                </div>

                                🔸Price : <?php echo $part[0]['Price'] . '/-'; ?> <br />
                                🔸Pages : <?php echo $part[0]['BPages']; ?><br />
                                🔸ISBN : <?php echo $part[0]['ISBN']; ?><br />
                                🔸Publication : <?php echo $part[0]['BPublication']; ?><br />
                                🔸Author : <?php echo $part[0]['Book_Author']; ?><br />
                                🔸More Details : <?php echo $part[0]['BMore']; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </section>

    </div>


    <?php $this->load->view('template/footer');  ?>






</body>
<script>
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
<?php $this->load->view('template/footer');  ?>



</html>