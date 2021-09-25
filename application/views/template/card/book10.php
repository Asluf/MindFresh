
<?php
// var_dump($book);
foreach ($book10 as $item) {  ?>

    <div class="col-xs-6 product col-md-6  col-lg-3 " style="width: 49%;">
        <div class="">
            <a class="img-prod" data-toggle="modal" data-target="#book10<?php echo $item['Item_ID']; ?>">
                <img style="width: 150px; height:200px" src="<?php echo base_url(); ?>resources/book_pics/<?php echo $item['Item_Image_Path']; ?>" alt="Colorlib Template">
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
    <div>
        <div class="modal fade" id="book10<?php echo $item['Item_ID']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $item['Item_Name']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img style="width: 250px;" src="<?php echo base_url(); ?>resources/book_pics/<?php echo $item['Item_Image_Path']; ?>" alt="Colorlib Template"><br />
                        🔸Price : <?php echo $item['Price']; ?> <br />
                        🔸Pages : <?php echo $item['BPages']; ?><br />
                        🔸ISBN : <?php echo $item['ISBN']; ?><br />
                        🔸Publication : <?php echo $item['BPublication']; ?><br />
                        🔸Author : <?php echo $item['Book_Author']; ?><br />
                        🔸More Details : <?php echo $item['BMore']; ?>

                    </div>
                    <div class="modal-footer">
                        <a id="<?php echo $item['Item_ID']; ?>" style="display: block;" href="https://api.whatsapp.com/send?phone=+94767520348&text=I want to purchase <?php echo $item['Item_Name']; ?>" name=" <?php echo $item['Item_ID']; ?>" class="btn btn-success btn-lg heart d-flex justify-content-center align-items-center ">
                            <span class="icon-whatsapp">
                        </a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php } ?>