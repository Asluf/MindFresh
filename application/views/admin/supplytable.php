<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view('template/head'); ?>
    <link href="<?php echo base_url();  ?>resources/admin/css/adminstyles.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>resources/admin/css/admincustom.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">

    <!-- importing topbar -->
    <div id="layoutSidenav">
        <?php $this->load->view('admin/template/sidebar'); ?>

        <!-- importing sidebar          -->
        <div id="layoutSidenav_content">
            <?php $this->load->view('admin/template/navbar'); ?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">TABLES</h1>
                    <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();  ?>index.php/Admin/index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order Tables</li>
                    </ol>

                    <div class="card mb-4 border-0">
                        <div class="card-header tableheader mb-0 pb-0">
                            SUPPLY TABLE
                        </div>
                       
                        <div class="card-body">
                            <table id="datatablesSimple">

                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Supply Ref Id</th>
                                        <th>Farmer</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Due Payment Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Supply Ref Id</th>
                                        <th>Farmer</th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Due Payment Amount</th>
                                        <th>Paid Amount</th>
                                        <th>Payment Status</th>
                                        <th>Payment Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($itemdata as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->Supplied_Date; ?></td>
                                            <td><?php echo $item->Supply_ID; ?></td>
                                            <td><?php echo $item->Main_Farmer_Name; ?></td>
                                            <td><?php echo $item->Item_Name; ?></td>
                                            <td><?php echo $item->Quantity; ?></td>
                                            <td><?php echo $item->Payment_Due_Amount; ?></td>
                                            <td><?php echo $item->Payment_Amount; ?></td>
                                            <td><?php echo $item->Payment_Status; ?></td>
                                            <td><?php echo $item->Payment_Date; ?></td>



                                        </tr>
                                    <?php  } ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="container mt-0">
                            <div class="row pt-3 mb-2 justify-content-center">
                                <div class="col-md-4 text-center">
                                    <button id="addrecord" class="btn btn-primary" name="addrecords"> <b>+</b> Add New Record</button>
                                </div>
                                <div class="col-md-4 text-center">
                                    <button id="addpayment" class="btn btn-primary" name="addpayment"><i class="icon-money"></i> Add Payment</button>
                                </div>

                            </div>
                            <div class="row">

                                <div id="div-addrecord" class="col-md-7 container dropdiv " style="display:none; margin-left: auto; ">
                                    <form id="form-add" name="form-add">
                                        <h4 class="text-center">ADD ITEMS</h4>
                                        <div class="row text-center">

                                            <input type="date" name="datee" id="datee">

                                            <select name="farmer" id="farmer" class="inputmod">
                                                <option>Select Farmer</option>
                                                <?php foreach ($addsupply as $item) { ?>
                                                    <option value="<?php echo $item['Farmer_ID']; ?>"><?php echo $item['Main_Farmer_Name']; ?></option>
                                                <?php } ?>
                                            </select>


                                            <select name="item" id="item" class="inputmod">
                                                <option>Select Item</option>
                                            </select>



                                            <input type="text" name="quantity" id="quantity" placeholder="Insert Quantity">
                                            <input type="text" name="payment" id="payment" placeholder="Payment Amount">

                                            <input type="button" class="btn btn-success mr-3" name="addnew" style="width:100px" id="addnew" value="Add" />
                                            <input type="button" class="btn btn-danger mr-3" name="close" style="width:100px" id="close" value="Close" />
                                    </form>
                                </div>
                            </div>



                            <div id="div-addpayment" class="col-md-3 container dropdiv text-center" style="display:none; margin-right: auto;">
                                <form id="form-payment" name="form-payment">
                                    <h4 class="text-center">ADD PAYMENT</h4>
                                    <input type="text" name="supplyref" id="supplyref" placeholder="#1xxxxxxx0">
                                    <input type="button" class="btn btn-success mr-3" name="search" style="width: 75px;" id="search" value="Add" />
                                    <input type="button" class="btn btn-danger mr-3" name="close" style="width: 75px;" id="close" value="Close" />
                                </form>
                            </div>


                        </div>
                    </div>


                    <div id="div-supp">


                    </div>



                </div>
        </div>
        </main>
        <?php $this->load->view('admin/template/footer'); ?>
    </div>
    </div>
    <?php $this->load->view('admin/template/scripts'); ?>
</body>

<script>
    $(document).ready(function() {
        $('#farmer').change(function(e) {
            // console.log(e.target.value);
            var $item = $('#item');
            $item.empty();

            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/Admin/getitem/" + e.target.value,
                method: 'get',
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    response.map(function(item) {
                        $("#item").append(
                            "<option  value='" + item.Farm_Farmer_Item_ID + "'>" + item.Item_Name + "</option>"
                        );
                    });
                }
            });

        });


        $('#addrecord').click(function() {
            $('#div-addrecord').slideToggle();

        });

        $('#close').click(function() {
            $('#div-addrecord').slideToggle();

        });

        $("#addnew").click(function() {
            base_url = "<?php echo base_url(); ?>";

            var formvalid = $("#form-add").valid();
            if (formvalid) {


                $.ajax({
                    url: base_url + 'index.php/Admin/supplyform',
                    data: $("#form-add").serialize(),
                    method: 'post',
                    success: function(response) {
                        // console.log(response);
                        if (response == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'You are successfully Added',
                                showConfirmButton: false,
                                timer: 4000
                            });
                            window.location = base_url + 'index.php/Admin/supplytable';
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'Error',
                                title: 'Something went wrong',
                                showConfirmButton: false,
                                timer: 4000
                            });
                        }

                    },
                    error: function() {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'Error',
                            title: 'Something went wrong',
                            showConfirmButton: false,
                            timer: 4000
                        });
                    }
                });
            }
        });
        $("#form-add").validate({
            rules: {
                datee: "required",
                farmer: "required",
                item: "required",
                quantity: "required",
                payment: "required"
            },
            messages: {

                datee: "*required",
                farmer: "*required",
                item: "*required",
                quantity: "*required",
                payment: "*required"

            }
        });
        $('#addpayment').click(function() {
            $('#div-addpayment').slideToggle();

        });
        $("#search").click(function() {
            base_url = "<?php echo base_url(); ?>";

            var formvalid = $("#form-payment").valid();
            if (formvalid) {

                var $div_supp = $('#div-supp');
                $div_supp.empty();

                $.ajax({
                    url: base_url + 'index.php/Admin/getsupplierdetails',
                    data: $("#form-payment").serialize(),
                    method: 'post',
                    dataType: 'json',
                    success: function(response) {
                        response.map(function(item) {

                            $("#div-supp").append(
                                "<table class='table'>" +
                                "<thead>" +
                                "<tr>" +
                                "<th scope='col'>Date</th>" +
                                "<th scope='col'>Farmer</th>" +
                                "<th scope='col'>Item</th>" +
                                "<th scope='col'>Quantity</th>" +
                                "<th scope='col'>Payment Due Amount</th>" +
                                "</tr>" +
                                "</thead>" +
                                "<tbody>" +
                                "<tr>" +
                                "<td>" + item.Supplied_Date + "</td>" +
                                "<td>" + item.Main_Farmer_Name + "</td>" +
                                "<td>" + item.Item_Name + "</td>" +
                                "<td>" + item.Quantity + "</td>" +
                                "<td>" + item.Payment_Due_Amount + "</td>" +
                                "</tr>" +
                                "</tbody>" +
                                "</table>" +

                                "<form id='form-add-payment' name='form-add-payment'>" +
                                "<input type='hidden' name='id' id='id' value='" + item.Supply_ID + "'  >" +
                                "<input type='hidden' name='dueamount' id='dueamount' value='" + item.Payment_Due_Amount + "'  >" +
                                "<input type='hidden' name='paymentid' id='paymentid' value='" + item.Supply_Payment_ID + "'  >" +

                                "<input type='text' name='paid' id='paid'  placeholder='Paid Payment Amount' >" +
                                "<input type='date' name='date' id='date'  placeholder='Payment Date'>" +
                                "<input type='button' id='addnewpayment' name='addnewpayment' value='Add' />" +
                                "</form>" +
                                "<script>" +
                                "$(document).ready(function(){" +

                                "$('#addnewpayment').click(function() {" +
                                "base_url = '<?php echo base_url(); ?>';" +

                                "var formvalid = $('#form-add-payment').valid();" +
                                "if (formvalid) {" +


                                "$.ajax({" +
                                "url: base_url + 'index.php/Admin/addsupplypayment'," +
                                "data: $('#form-add-payment').serialize()," +
                                "method: 'post'," +
                                "success: function(response) {" +
                                // console.log(response);

                                "window.location = base_url + 'index.php/Admin/supplytable';" +
                                "Swal.fire({" +
                                "position: 'top-end'," +
                                "icon: 'Success'," +
                                "title: 'Payment Successfully Added.'," +
                                "showConfirmButton: false," +
                                "timer: 4000" +
                                "});" +

                                "}," +
                                "error: function() {" +
                                "Swal.fire({" +
                                "position: 'top-end'," +
                                "icon: 'Error'," +
                                "title: 'Something went wrong.'," +
                                "showConfirmButton: false," +
                                "timer: 4000" +
                                "});" +
                                "}" +
                                "});" +
                                "}" +
                                "});" +
                                "$('#form-add-payment').validate({" +
                                "rules: {" +
                                "paid: 'required'," +
                                "date: 'required'" +
                                "}," +
                                "messages: {" +

                                "paid: '*required'," +
                                "date: '*required'" +

                                "}" +
                                "});" +

                                "});"




                            );
                        });




                    },
                    error: function() {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'Error',
                            title: 'Something went wrong.',
                            showConfirmButton: false,
                            timer: 4000
                        });
                    }
                });
            }
        });
        $("#form-payment").validate({
            rules: {
                supplyref: "required"

            },
            messages: {

                supplyref: "*required"

            }
        });




    });
</script>
<?php $this->load->view('template/footer'); ?>


</html>