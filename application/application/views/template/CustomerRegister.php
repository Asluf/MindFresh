<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/head');   ?>
    <?php $this->load->view('template/footer');   ?>

    <style>
        .bg-register-image img {
            width: auto;
            height: auto;
        }

        .form-control {
            height: 40px !important;
            font-size: 15px;
            font: verdana;
        }

        .bg-pic {
            background-image: url("<?php echo base_url(); ?>resources/images/Back.jpeg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            min-width: 500px;
            background-size: 100% auto;
        }


        .maincard {
            background-color: rgba(255, 255, 255, 0.85);
        }
    </style>
</head>

<body class="bg-gradient-primary bg-pic">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 maincard">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7 px-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-primary mb-4"><i class="icon-shopping-basket pr-3"></i>Register as Customer</h1>

                            </div>
                            <form class="user" name="customer-register" id="customer-register">
                                <div class="form-group ">
                                    <div class="mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="customerName" name="customerName" placeholder="Your Name">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control form-control-user mt-3" id="deliveryAddress" name="deliveryAddress" placeholder="Delivery Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="emailAddress" name="emailAddress" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <select class="form-control form-control-user" id="province" name="province" placeholder="Province">
                                            <option>Province</option>
                                            <?php foreach ($province as $item) {  ?>
                                                <option value="<?php echo $item->Province_ID; ?>"><?php echo $item->name_en . " (" . $item->name_si . ")"; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-user" id="district" name="district" placeholder="District">
                                            <option">District</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-user" id="city" name="city" placeholder="City">
                                            <option>City</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="input-group mb-3 form-control-user">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary icon-phone2 text-light" id="">
                                        </span>
                                    </div>
                                    <input class="form-control form-control-user  " type="tel" id="mobile" name="mobile" placeholder="+94 07X XXX XXXX">
                                </div>

                                <div class=" row">
                                    <div class="col-sm-5" style="text-align: center;">
                                        <label for="FarmImage">Upload Your Image</label>
                                    </div>

                                    <div class="input-group mb-3 form-control-user px-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="picture" name="picture" accept="image/*" onchange="loadFile(event)">
                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-primary text-light" id="">Upload</span>
                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <input type="submit" id="register" name="register" class="btn btn-primary btn-user btn-block" value="Register Account">


                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url(); ?>index.php/Homepage/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="max-height:590px; position : relative;">
                        <div style="width : 400px; Height:450px; position : absolute; top : 12%; right : 15%; overflow:hidden;">
                            <img class="align-middle" id="output" style=" width : 445px;" />
                            <p class="small" id="imageplaceholder" style="text-align: center;">Preview Your Image Here</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            document.getElementById('imageplaceholder').style.display = "none";
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#province').change(function(e) {

                var $district = $('#district');
                $district.empty();

                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/Homepage/getdistrict/" + e.target.value,
                    method: 'get',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        response.map(function(item) {
                            $("#district").append(
                                "<option value='" + item.District_ID + "'>" + item.name_en + "</option>"
                            );
                        });
                    }
                });
            });
            //script for append cities for particular district
            $('#district').change(function(e) {

                var $city = $('#city');
                $city.empty();

                $.ajax({
                    url: "<?php echo base_url(); ?>" + "index.php/Homepage/getcity/" + e.target.value,
                    method: 'get',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        response.map(function(item) {
                            $("#city").append(
                                "<option value='" + item.City_ID + "'>" + item.name_en + "</option>"
                            );
                        });
                    }
                });
            });

            $("#customer-register").submit(function(e) {

                e.preventDefault();
                base_url = "<?php echo base_url(); ?>";

                var formvalid = $("#customer-register").valid();
                if (formvalid) {

                    $.ajax({
                        url: base_url + 'index.php/Homepage/customer_register',
                        method: 'post',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        async: false,
                        processData: false,
                        success: function(response) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'You are successfully complete your registration. Please Login Here',
                                showConfirmButton: false,
                                timer: 4000
                            });
                            // when we make the login page,set this window.location
                            window.location = base_url + 'index.php/Homepage/login';
                        },
                        error: function() {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: 'Something went wrong, Please check your email address',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        }

                    });

                }
            });

            $("#customer-register").validate({
                rules: {
                    customerName: "required",
                    deliverAddress: "required",
                    emailAddress: "required",
                    password: "required",
                    confirmPassword: "required",
                    province: "required",
                    district: "required",
                    city: "required",
                    mobile: "required",
                    picture: "required"
                },
                messages: {

                    customerName: "required",
                    deliverAddress: "required",
                    emailAddress: "required",
                    password: "required",
                    confirmPassword: "required",
                    province: "required",
                    district: "required",
                    city: "required",
                    mobile: "required",
                    picture: "required"

                }
            });
        });
    </script>


</body>

</html>