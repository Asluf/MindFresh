<body>
    <?php
        $this->load->view('template/navbar');
     ?>
    <section id="home" style="background-image:url(<?php echo base_url(); ?>/resources/images/home.jpg);">

        <div class="row pr-0">
            <div class = "container" id="para">
                <h1><b>Harvester</b></h1>
                <p style="font-style: italic; padding-top: 0%;">"A way to earn smart"</p>
                <p>
                    Made for those who <br> grow organic and love organic.
                </p>
            </div>
        </div>

    </section>

    <section>

        <div class="container" id="what">
            <div class="row pt-3">

                <div class="col-sm-6">
                    <h1 class="text-center">Who we are</h1>

                    <div class="pt-3" style="overflow: hidden; width: auto;">
                        <img style="margin-left: 40%;" src="<?php echo base_url(); ?>resources/images/agreement.png" alt="">
                    </div>
                    <p class="pt-3 p-4">
                        A modern agricultural investment company connecting investors and commercial farmers with ease. We provide a platform for
                        everyone to invest and earn great returns from commercial farming.
                    </p>
                </div>
                <div class="col-sm-6">
                    <h1 class="text-center">What we do</h1>

                    <div class="pt-3" style="overflow: hidden">
                        <img style="margin-left: 40%;" src="<?php echo base_url(); ?>resources/images/profits.png" alt="">
                    </div>
                    <p class="pt-3 p-4">
                        Existing and new commercial farmers can submit a proposal. Investors can select the farms and invest on it.
                        At the end profit will be shared among them according to their shares.
                    </p>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="row pt-3 pb-3 pr-0 mb-3" id="count" style="   background-image: url('<?php echo base_url(); ?>resources/images/bg_3.jpg');">
            <div class="col-md-6 pt-5"></div>

            <div class="col-md-6 pt-5 text-center">
                <h1 class="text-center">Our Success</h1>
                <div class="row pt-5">
                    <div class="col-md-3 text-center">
                        <p> <b>Farmers </b> </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <p> <b>Investors </b></p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <p> <b> Projects </b> </p>
                    </div>
                </div>

                <div class="row pt-1 f-50 text-center">
                    <div class="col-md-3 text-center">
                        <p> <b>150 </b> </p>
                    </div>
                    <div class="col-md-1">
                        <p> <b>: </b> </p>
                    </div>
                    <div class="col-md-3">
                        <p> <b>450 </b></p>
                    </div>
                    <div class="col-md-1">
                        <p> <b>: </b> </p>
                    </div>
                    <div class="col-md-3">
                        <p> <b> 200 </b> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="review">

            <h1 class="text-center f-50" style="color: #00A699;">How clients Love us</h1>

            <div class="row pt-5 review">

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img style="border-radius: 15px; padding:5px;" src="<?php echo base_url(); ?>resources/images/person_1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Weerasena</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text" style="color: #354563;">Ratings <br> &#9733; &#9733; &#9733; &#9733;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img style="border-radius: 15px; padding:5px;" src="<?php echo base_url(); ?>resources/images/person_3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Kamal Perera</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text" style="color: #354563;">Ratings <br> &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    
	<?php $this->load->view('template/footerfont');  ?>
	<?php $this->load->view('template/footer'); ?>

</body>