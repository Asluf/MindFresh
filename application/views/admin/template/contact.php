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

    .row1 {
      display: table-row;
    }

    .col1 {
      display: table-cell;
      vertical-align: middle;
    }

    .map {
      height: 500px;
      position: relative;
    }

    .map iframe {
      width: 100%
    }

    .map .map-inside i {
      font-size: 48px;
      color: #7fad39;
      position: absolute;
      bottom: 155px;
      left: 50%;

      transform: translateX(-18px);
    }
  </style>

</head>

<body class="goto-here bg-light">

  <?php
    $this->load->view('admin/template/navbar');
  ?>

  <div class="py-2 wrap-about pb-md-5 ftco-animate" style="text-align:center;">
    <div class="heading-section-bold mb-4 mt-md-5">
      <div class="ml-md-0">
        <div class="ml-md-0">
          <h1 class="text-dark" style="font-size:17px;"><b>- Contact-Us -</b></h1>
        </div>
        <p class="text-dark">Join us Directly or Connect Virtually</p>
      </div>
    </div>
  </div>


  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-7 p-md-5 mt-5 img img-2 d-flex justify-content-center align-items-center BgImage" style="background-image: url('<?php echo base_url(); ?>resources/images/farm.jpg'); height : 500px ">
        </div>
        <div class="col-md-5 py-2 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
            <div class="ml-md-0">
              <h2 class="mb-4 text-center">Welcome to </br> Mind Fresh Online Shopping  <span class="text-info">THIGALY</span></h2>
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

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light mb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-5 py-2 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
            <div class="ml-md-0">
              <h2 class="mb-4 text-center">Welcome to </br> Mind Fresh Online Shopping  <span class="text-primary">THIGALY</span></h2>
            </div>
          </div>
          <div class="pb-md-5">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
          </div>
        </div>
        <div class="col-md-7 p-md-5 mt-5 img img-2 d-flex justify-content-center align-items-center BgImage" style="background-image: url('<?php echo base_url(); ?>resources/images/3.jpeg'); height : 500px ">

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section bg-light">

    <div class="text-center mb-5">
      <h2>-Be in Touch with Us-</h2>
    </div>

    <div class="container">
      <div class="row d-flex mb-5 contact-info">

        <div class="col-md-4 d-flex">
          <div class="info bg-dark p-4 text-center">
            <p class="text-light"><span class="text-primary"><i class="icon-map-marker text-primary h2 mb-2"></i></span></br> No.148 Kalpitya Road, Thigali Ettale, Puttalam, Srilanka</p>
          </div>
        </div>

        <div class="col-md-4 d-flex">
          <div class="info bg-dark p-4 text-center">
          <p class="text-light"><span class="text-primary"><i class="icon-phone2 text-primary h2 mb-2"></i></span></br>+94 71 252 6716</p>
            <p class="text-light"><span class="text-primary"><i class="icon-phone2 text-primary h2 mb-2"></i></span></br>+94 76 752 0348</p>

          </div>
        </div>

        <div class="col-md-4 d-flex">
          <div class="info bg-dark p-4 text-center">
            <p class="text-light"><span class="text-primary"><i class="icon-envelope text-primary h2 mb-2"></i></span></br>mindfresh.info@gmail.com</p>
          </div>
        </div>

      </div>
      
    </div>

  </section>

  <?php $this->load->view('admin/template/footerfont');  ?>
  <?php $this->load->view('template/footer');  ?>
  <script>
    jQuery("h1").fitText(1.2);
  </script>

</body>

</html>