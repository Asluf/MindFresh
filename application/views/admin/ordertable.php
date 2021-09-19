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
                            ORDER TABLE
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">

                                <thead>
                                    <tr>
                                        <th>Reference No</th>
                                        <th>Order Date</th>
                                        <th>Customer_Name</th>
                                        <th>Customer_Mob</th>
                                        <th>Email</th>
                                        <th>Payment Amount</th>
                                        <th>Delivery Address</th>
                                        <th>More Info</th>
                                        <th>Delivered</th>
                                        <th>Dispatched</th>
                                        <th>Completed</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Reference No</th>
                                        <th>Order Date</th>
                                        <th>Customer_Name</th>
                                        <th>Customer_Mob</th>
                                        <th>Email</th>
                                        <th>Payment Amount</th>
                                        <th>Delivery Address</th>
                                        <th>More Info</th>
                                        <th>Delivered</th>
                                        <th>Dispatched</th>
                                        <th>Completed</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($orderdata as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->Item_Order_ID; ?></td>
                                            <td><?php echo $item->Order_Date; ?></td>
                                            <td><?php echo $item->Customer_Name; ?></td>
                                            <td><?php echo $item->Mobile; ?></td>
                                            <td><?php echo $item->Email; ?></td>
                                            <td><?php echo $item->Total_Payed; ?></td>
                                            <td><?php echo $item->Address; ?></td>
                                            <td>
                                                <form class="py-1" >
                                                    <input type="button" onclick="moreinfo('<?php echo $item->Checkout_ID; ?>')" id="<?php echo $item->Checkout_ID; ?>" name="<?php echo $item->Checkout_ID; ?>" class="btn btn-outline-warning py-0 my-0" style="width: 100px;"  value="More Info">
                                                </form>
                                            </td>
                                            <td>
                                                <form class="py-1" id="order_status_deli<?php echo $item->Item_Order_ID; ?>">
                                                    <select class="inputmod  py-0 my-0" style="width: 65px; font-size:13px;" name="<?php echo $item->Item_Order_ID; ?>">
                                                        <?php if ($item->Delivered == 'Yes') {  ?>
                                                            <option value="Yes" selected>Yes</option>
                                                            <option value="No">No</option>
                                                        <?php } else { ?>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No" selected>No</option>
                                                        <?php } ?>
                                                    </select>
                                                </form>

                                            </td>
                                            <td>

                                                <form class="py-1" id="order_status_disp<?php echo $item->Item_Order_ID; ?>">
                                                    <select class="inputmod  py-0 my-0"style="width: 65px; font-size:13px;" name="<?php echo $item->Item_Order_ID; ?>">
                                                        <?php if ($item->Dispatched == 'Yes') {  ?>
                                                            <option value="Yes" selected>Yes</option>
                                                            <option value="No">No</option>
                                                        <?php } else { ?>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No" selected>No</option>
                                                        <?php } ?>
                                                    </select>
                                                </form>

                                            </td>
                                            <td>
                                                <form class="py-1" id="order_status_comp<?php echo $item->Item_Order_ID; ?>">
                                                    <select class="inputmod  py-0 my-0"style="width: 65px; font-size:13px;" name="<?php echo $item->Item_Order_ID; ?>">
                                                        <?php if ($item->Completed == 'Yes') {  ?>
                                                            <option value="Yes" selected>Yes</option>
                                                            <option value="No">No</option>
                                                        <?php } else { ?>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No" selected>No</option>
                                                        <?php } ?>
                                                    </select>
                                                </form>
                                            </td>

                                        </tr>
                                    <?php  } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php  $this->load->view('admin/template/footer'); ?>
        </div>
    </div>
    <?php  $this->load->view('admin/template/scripts'); ?>
</body>

<script>
    function moreinfo($id){
        
        // console.log($id);
        $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '<?php echo base_url(); ?>' + 'index.php/Admin/order_moreinfo/' + $id,
                success: function(response) {
                    // console.log(response);
                    response.map(function(item) {
                        Swal.fire({
                            title: '<strong>More Info</strong>',
                            html: "Order Number : " + item.Checkout_ID + "</br>" +
                                "Delivery Address : " + item.Address + "</br>" +
                                "Customer Mobile : " + item.Mobile + "</br>" +
                                "Customer Email : " + item.Email + "</br>" +


                                "<table>" +
                                "<thead>" +
                                "<tr>" +
                                "<th>Item Name</th>" +
                                "<th>Quantity (Kg)</th>" +
                                "</tr>" +
                                "</thead>" +
                                "<tbody>" +

                                "<tr>" +
                                "<td class='middle'>"+item.Item_Name  +"</td>" +
                                "<td class='middle'>"+ item.Order_Qty +"</td>" +
                                "</tr>" +
                                

                                "</tbody>" +
                                "</table>",
                            focusConfirm: false,

                        });
                    });

                }
            });
    }
    $(document).ready(function() {
        $('[id^=more_info]').click(function(e) {
            // console.log(e.target.name);
           



        });

        $('[id^=order_status_deli]').change(function(e) {
            // var formid = '#order_status'+e.target.id;
            // alert(e.target.name + e.target.value);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>' + 'index.php/Admin/set_delivered_status',
                data: {
                    id: e.target.name,
                    value: e.target.value
                },
                success: function(response) {
                    console.log("updated");
                }
            });
        });
        $('[id^=order_status_disp]').change(function(e) {
            // var formid = '#order_status'+e.target.id;
            // alert(e.target.name + e.target.value);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>' + 'index.php/Admin/set_dispatched_status',
                data: {
                    id: e.target.name,
                    value: e.target.value
                },
                success: function(response) {
                    console.log("updated");
                }
            });
        });
        $('[id^=order_status_comp]').change(function(e) {
            // var formid = '#order_status'+e.target.id;
            // alert(e.target.name + e.target.value);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>' + 'index.php/Admin/set_completed_status',
                data: {
                    id: e.target.name,
                    value: e.target.value
                },
                success: function(response) {
                    console.log("updated");
                }
            });
        });





    });
</script>
<?php $this->load->view('template/footer'); ?>


</html>