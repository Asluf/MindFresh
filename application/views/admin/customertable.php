<!DOCTYPE html>
<html lang="en">

<<head>
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
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();  ?>index.php/Admin/index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <div class="card mb-4 border-0">
                        <div class="card-header tableheader mb-0 pb-0">
                            CUSTOMER TABLE
                        </div>


                        <div class="card-body">
                            <table id="datatablesSimple">

                                <thead>
                                    <tr>
                                        <th>Row_Num</th>
                                        <th>Name</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Total Orders</th>
                                        <th>Total Payments</th>
                                        <th>Redeem Points</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Row_Num</th>
                                        <th>Name</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Total Orders</th>
                                        <th>Total Payments</th>
                                        <th>Redeem Points</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $row_num = 0; foreach ($customerdata as $item) { 
                                        $row_num++;    ?>
                                        <tr>
                                            <td><?php echo $row_num; ?></td>
                                            <td><?php echo $item->Customer_Name; ?></td>
                                            <td><?php echo $item->District; ?></td>
                                            <td><?php echo $item->City; ?></td>
                                            <td><?php echo $item->Mobile; ?></td>
                                            <td><?php echo $item->Email; ?></td>
                                            <td><?php echo $item->Total_Orders; ?></td>
                                            <td><?php echo $item->Total_Payable_Price; ?></td>
                                            <td><?php echo $item->Points; ?></td>
                                            
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
    $(document).ready(function() {

    });
</script>
<?php $this->load->view('template/footer'); ?>


</html>