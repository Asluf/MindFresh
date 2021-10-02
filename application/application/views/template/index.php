<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('template/head');   ?>
  <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/sankee.css">

  <style>
    #egg {
      display: block;
      width: 630px;
      height: 500px;
      /* background-color: red; */
      background-image: url("<?php echo base_url();  ?>resources/images/home-3.jpg");
      background-size: 1000px 660px;
      background-repeat: no-repeat;
      background-position: center center;
      border-radius: 50% 50% 50% 50%;
      border-style: double;
      border-color: #82ae46;
      border-width: 15px;
    }

    #home span {
      font-size: 55px;
      color: #82ae46;
    }

    #home {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #home::before {
      content: "";
      position: absolute;
      top: -50px;
      right: 0px;
      bottom: 0px;
      left: 0px;

      /* Specify the background image to be used */
      background-image: url("<?php echo base_url();  ?>resources/images/BG-3.jpg");
      background-size: 1140px, 400px;
      /* Specify the background image */
      opacity: 0.2;
    }

    .mini {
      position: relative;
      width: 450px;
      margin: 0 auto;
    }

    .mini img {
      vertical-align: middle;
      height: 250px;
      border-radius: 10px;
    }

    .mini-content h1 {
      font-size: 30px;
      text-align: center;
      color: #82ae46;
    }

    .mini-content p {
      font-size: 17px;
      text-align: center;
    }
  </style>
  
  

</head>

<body>
  <?php $this->load->view('template/main');   ?>

  <?php $this->load->view('template/footer');   ?>
  <?php $this->load->view('template/footerfont');   ?>
</body>

</html>