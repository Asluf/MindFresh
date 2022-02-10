<?php
// var_dump($book);
foreach ($book as $item) {
    if ($item['Grade'] == '9') {  ?>

        <div class="col-xs-6 product col-md-6  col-lg-3 border-0" style="width: 49%;">
            <div class="">
                <a class="img-prod" href="<?php echo base_url(); ?>index.php/Homepage/more/<?php echo $item['Item_ID']; ?>" data-target="#bookk<?php echo $item['Item_ID']; ?>">
                    <img style="width: 150px; height:200px" src="<?php echo base_url(); ?>resources/book_pics/<?php echo $item['Item_Image_Path']; ?>" alt="Contact Asluf for more details">
                </a>

                <div class="text py-3 pb-4 px-3 text-center" style="width:150px;font-size:10px;">
                    <a class="text-dark" style="font-size:12px;" href="#"><?php echo $item['Item_Name']; ?></a>
                    <div>
                        <p class="price "><span class="price-sale text-dark">Rs.<?php echo $item['Price']; ?></span></p>
                        <p class="price"><span class="price-sale text-dark"><?php echo "Av.Qty " . $item['Quantity']; ?></span></p>
                    </div>
                    <?php if ($this->session->userdata('Role') == 'customer') { ?>
                        <a onclick="addtocart('<?php echo $item['Item_ID']; ?>', '<?php echo $this->session->userdata('Id'); ?>' , '<?php echo $item['Price']; ?>', ' <?php echo $item['Item_Name']; ?> ')" name="<?php echo $item['Item_ID']; ?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94767520348&text=I want to purchase <?php echo $item['Item_Name']; ?>" name=" <?php echo $item['Item_ID']; ?>" class="heart d-flex justify-content-center align-items-center ">
                            <span class="icon-whatsapp">
                        </a>
                    <?php } else { ?>
                        <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94767520348&text=I want to purchase <?php echo $item['Item_Name']; ?>" name=" <?php echo $item['Item_ID']; ?>" class="heart d-flex justify-content-center align-items-center ">
                            <span class="icon-whatsapp text-center btn btn-success">
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>



<?php }
} ?>