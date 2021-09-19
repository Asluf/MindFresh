<!DOCTYPE html>
<html lang="en">
<style>
    .body {
        background-image: linear-gradient(135deg, #92FFC0 10%, #002661 100%);
    }

    .error {
        font-size: 14px;
        color: red;
    }
</style>

<head>
    <?php $this->load->view('template/head');   ?>
</head>

<body class="body">
    <a class="navbar-brand text-light" href="<?php echo base_url(); ?>index.php/Home">
        <img src="<?php echo base_url(); ?>resources/ICons/logo1_3.png" style=" margin-right:10px; width:70px;" />
        MIND FRESH SHOPPING
    </a>

    <div class="container col-xs-6">
        <!-- Outer Row -->
        <div class=" justify-content-center mr-0 pr-0">

            <div class="col-xl-12 col-lg-12 col-md-9">

                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-md-4">
                        <div class="card o-hidden border-0 shadow-lg mb-3" style="background-color: rgba(00, 00, 00, 0.75);">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <div class="text-center">
                                        <h1 class="h4 text-light mb-4 mt-2">Let's Live <span class="text-info">Organic</span></h1>
                                    </div>
                                    <form class="user" id="login_form" name="login_form">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="UserEmail" aria-describedby="emailHelp" name="UserEmail" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="UserPassword" name="UserPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label text-light" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input type="button" value="Login" class="btn btn-info btn-user btn-block" id="LoginBtn" name="LoginBtn">


                                        <hr>
                                        <!-- <div class="text-center">
                                        <h4 class="small mt-1 mb-3 text-light">New to KOV ? Register Now!</h4>
                                    </div>
                                    <div class="row no-gutters ftco-services">
                                        <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
                                            <div class="media block-4 services mb-md-0 mb-2">
                                                <a href="<?php echo base_url(); ?>index.php/Reg-Customer">
                                                    <div class="icon bg-dark active d-flex justify-content-center align-items-center mb-2">
                                                        <span class="flaticon-diet"></span>
                                                    </div>
                                                </a>
                                                <div class="media-body">
                                                    <p class="heading text-light">Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <?php $this->load->view('template/footer');  ?>

</body>
<script>
    $(document).ready(function() {
        $("#LoginBtn").click(function() {
            base_url = "<?php echo base_url(); ?>";

            var formvalid = $("#login_form").valid();
            if (formvalid) {


                $.ajax({
                    url: base_url + 'index.php/Homepage/verifyuser',
                    data: $("#login_form").serialize(),
                    method: 'post',
                    success: function(response) {
                        // console.log(response);
                        if (response == 'customer') {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Welcome to Customer Page',
                                showConfirmButton: false,
                                timer: 2500
                            });

                            window.location = base_url + 'index.php/Customer/index';
                        } else if (response == 'farmer') {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Welcome to Farmer Page',
                                showConfirmButton: false,
                                timer: 2500
                            });
                            window.location = base_url + 'index.php/Farmer/index';


                        } else if (response == 'admin') {
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
                                title: 'Welcome to Admin Page'
                            });
                            window.location = base_url + 'index.php/Home_a838fgt';


                        } else {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            });

                            Toast.fire({
                                icon: 'error',
                                title: 'Oops! Please check your email address and password'
                            });
                        }
                    },
                    error: function() {
                        alert("Something went wrong. Please try again later");
                    }
                });
            }
        });
        $("#login_form").validate({
            rules: {
                UserEmail: {
                    email: "true",
                    required: "true"
                },
                UserPassword: "required"
            },
            messages: {

                UserEmail: {
                    email: "Invalid email address",
                    required: "Please insert your email address"
                },
                UserPassword: "Please Enter Your Password"

            }
        });

    });
</script>

</html>