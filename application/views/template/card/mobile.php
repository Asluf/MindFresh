<?php
foreach ($mobile as $item) {  ?>

    <div class="col-xs-6 product col-md-6  col-lg-3 " style="width: 49%;">
        <div class="">
            <a class="img-prod" data-toggle="modal" data-target="#mob<?php echo $item['Item_ID']; ?>">
                <img style="width: 150px; height:180px" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_1']; ?>" alt="Contact Asluf for more details">
            </a>

            <div class="text py-3 pb-4 px-3 text-center" style="width:150px;font-size:10px;">
                <a class="text-dark" style="font-size:12px;" href="#"><?php echo $item['Brand_Name'] . '-' . $item['Model_Name']; ?></a>
                <div>
                    <strike><span class="price-sale text-dark">Rs.<?php echo $item['Price']; ?></span></strike></br>
                    <span class="text-dark" style="font-size:12px;">Rs.<?php echo $item['Net_Price']; ?></span>
                </div>
                <?php if ($this->session->userdata('Role') == 'customer') { ?>
                    <a onclick="addtocart('<?php echo $item['Item_ID']; ?>', '<?php echo $this->session->userdata('Id'); ?>' , '<?php echo $item['Price']; ?>', ' <?php echo $item['Brand_Name']; ?> ')" name="<?php echo $item['Item_ID']; ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                        <span><i class="ion-ios-cart"></i></span>
                    </a>
                    <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94750785247&text=I want to purchase <?php echo $item['Brand_Name'] . '-' . $item['Model_Name'] . '(' . $item['Item_ID'] . ')'; ?>" name=" <?php echo $item['Item_ID']; ?>" class="heart d-flex justify-content-center align-items-center ">
                        <span class="icon-whatsapp">
                    </a>
                <?php } else { ?>
                    <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94750785247&text=I want to purchase <?php echo $item['Brand_Name'] . '-' . $item['Model_Name'] . '(' . $item['Item_ID'] . ')'; ?>" name=" <?php echo $item['Item_ID']; ?>" class="heart d-flex justify-content-center align-items-center ">
                        <span class="icon-whatsapp text-center btn btn-success">
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>
    <div>
        <div class="modal fade" id="mob<?php echo $item['Item_ID']; ?>" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $item['Brand_Name']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <img style="width: 250px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_1']; ?>" alt="Contact with Asluf"><br /> -->
                        <div id="recipeCarousel<?php echo $item['Item_ID']; ?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card text-center text-dark pt-0 pb-0" style="background-image: linear-gradient(135deg, #f5f7fa 10%, #c3cfe2 100%);">
                                            <div class="card-body">
                                                <img class="img" style="height: 160px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_1']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card text-center text-dark pt-0 pb-0" style="background-image: linear-gradient(135deg, #f5f7fa 10%, #c3cfe2 100%);">
                                            <div class="card-body">
                                                <img class="img text-center" style="height: 160px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_2']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card text-center text-dark pt-0 pb-0" style="background-image: linear-gradient(135deg, #f5f7fa 10%, #c3cfe2 100%);">
                                            <div class="card-body">
                                                <img class="img text-center" style="height: 160px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_3']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card text-center text-dark pt-0 pb-0" style="background-image: linear-gradient(135deg, #f5f7fa 10%, #c3cfe2 100%);">
                                            <div class="card-body">
                                                <img class="img text-center" style="height: 160px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_4']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card text-center text-dark pt-0 pb-0" style="background-image: linear-gradient(135deg, #f5f7fa 10%, #c3cfe2 100%);">
                                            <div class="card-body">
                                                <img class="img text-center" style="height: 160px;" src="<?php echo base_url(); ?>resources/mobile_pics/<?php echo $item['Item_Image_5']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                

                            </div>

                            <a class="carousel-control-prev w-auto" href="#recipeCarousel<?php echo $item['Item_ID']; ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel<?php echo $item['Item_ID']; ?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="text-dark">
                            🔸<strike> Price : <?php echo "Rs." . $item['Price']; ?></strike> <br />
                            🔸Net Price : <?php echo "Rs." . $item['Net_Price']; ?> only <br />
                            🔸Uploaded date : <?php $str1 =  $item['Time'];
                                                $pieces = explode(" ", $str1);
                                                echo $pieces[0]; ?> <br />
                            🔸More Details : <?php echo $item['BMore']; ?>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94750785247&text=I want to purchase <?php echo $item['Brand_Name'] . '-' . $item['Model_Name'] . '(' . $item['Item_ID'] . ')'; ?>" name=" <?php echo $item['Item_ID']; ?>" class="btn btn-success btn-lg heart d-flex justify-content-center align-items-center ">
                            <span class="icon-whatsapp">
                        </a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>



<!-- ============================ -->
<script>
    // $('#recipeCarousel').carousel({
    //     interval: 5000
    // });
    $('[id^=recipeCarousel]').carousel({
        interval: 3000
    });

    $('.carousel .carousel-item').each(function() {
        var minPerSlide = 5;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
    
</script>