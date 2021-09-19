<!DOCTYPE html>
<html lang="en">

<head> 
    <?php $this->load->view('template/head');   ?>
    <style>
        .error {
            font-size: 14px;
            color: red;
        }

        .bg-register-image img {

            width: auto;
            height: auto;
        }

        .form-control {
            height: 40px !important;
            font-size: 15px;

            font: verdana;
        }

        .farm-img {
            width: 100px;
            height: 100px;
            overflow: hidden;
        }

        .bg-pic {
            background-image: url("<?php echo base_url(); ?>resources/images/del.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            min-width: 500px;
            background-size: 100% auto;
        }

        .maincard {
            background-color: rgba(00, 00, 00, 0.75);
        }

        .upload>input {
            display: none;
        }
    </style>

</head>

<body class="bg-gradient-primary bg-pic">

    <div class="container">

        <div class="card o-hidden border-0 col-md-8 shadow-lg my-5 maincard container">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-primary mb-4"><i class="icon-truck"></i> Register as Package Carrier</h1>
                            </div>
                            <!-- ====================================================== -->
                            <form class="user"  name="form-deliveryboy-register" id="form-deliveryboy-register">
                                <div class="form-group d-flex row">
                                    <div class="mb-3 mb-sm-0 col-md-12">
                                        <input type="text" class="form-control form-control-user" id="delivername" name="delivername" placeholder="Your Name">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div>
                                        <input type="text" class="form-control form-control-user mt-3" id="licensenumber" name="licensenumber" placeholder="Your Driving License Number">
                                    </div>
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
                                            <option>District</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control form-control-user" id="city" name="city" placeholder="City">
                                            <option>City</option>
                                            <!-- options are made by append text in javascript -->

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="driveremail" name="driveremail" placeholder="Enter an Valid Email">
                                    </div>
                                    <div class="mb-3 mb-sm-0 pt-3">
                                        <input type="Password" class="form-control form-control-user" id="password" name="password" placeholder="Enter your password">
                                    </div>

                                </div>

                                <p class="small fw-bold mb-3 text-center text-light"> Vehicle Details</p>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <select class="select form-control form-control-user" id="vehicle" name="vehicle" placeholder="Vehile Type">
                                            <option value="Two-Wheeler">Two-Wheeler</option>
                                            <option value="Three-Wheeler">Three-Wheeler</option>
                                            <option value="Truck">Truck</option>
                                            <option value="Mini-Van">Mini-Van</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="vehiclemodel" name="vehiclemodel" placeholder="Enter the Vehicle Model">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" id="vehiclereg" name="vehiclereg" placeholder="Enter the Vehicle Registration Number">
                                    </div>
                                </div>

                                <div class="input-group mb-3 form-control-user">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="license" name="license">
                                        <label class="custom-file-label">Upload Driving License</label>
                                    </div>
                                </div>

                                <div class="input-group mb-3 form-control-user">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="drivebook" name="drivebook">
                                        <label class="custom-file-label">Upload your Driving Book</label>
                                    </div>
                                </div>

                                <button type="submit" id="register" name="register" class="btn btn-primary btn-user btn-block" value="" >Register Account </button>


                            </form>

                            <!-- ================================================== -->
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url(); ?>index.php/Homepage/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php $this->load->view('template/footer');  ?>

        <script>
            $(document).ready(function() {


                $('#profile_pic').change(function() {
                    for (var i = 0; i < 3; i++) {
                        $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' style='width:350px; padding:5px; border-radius:25px'><br>");
                    }
                });
                //script for append districts for particular province
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

                $("#form-deliveryboy-register").submit(function(e) {
                    console.log('hiii');
                    e.preventDefault();
                    base_url = "<?php echo base_url(); ?>";

                    // var formvalid = $("form-deliveryboy-register").valid();
                    // if (formvalid) {

                        $.ajax({
                            url: base_url + 'index.php/Homepage/delivery_register',
                            method: 'post',
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            async: false,
                            processData: false,
                            success: function(response) {
                                // console.log('success');
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'You are successfully complete your registration. Please login',
                                    showConfirmButton: false,
                                    timer: 4000
                                });
                                // when we make the login page,set this window.location
                                window.location = base_url + 'index.php/Homepage/login';
                            },
                            error: function() {
                                // console.log('Failed');
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'error',
                                    title: 'Something went wrong, Please check your email address',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            }

                        });

                    // }
                });

                $("#form-deliveryboy-register").validate({
                    rules: {
                        delivername: "required",
                        licensenumber: "required",
                        province: "required",
                        district: "required",
                        city: "required",
                        driveremail: "required",
                        password: "required",
                        vehicle: "required",
                        vehiclemodel: "required",
                        vehiclereg: "required",
                        license: "required",
                        drivebook: "required"


                    },
                    messages: {
                        delivername: "*required",
                        licensenumber: "*required",
                        province: "*required",
                        district: "*required",
                        city: "*required",
                        driveremail: "*required",
                        password: "(required",
                        vehicle: "*required",
                        vehiclemodel: "*required",
                        vehiclereg: "*required",
                        license: "*required",
                        drivebook: "*required"

                    }
                });


            });
        </script>


</body>

</html>