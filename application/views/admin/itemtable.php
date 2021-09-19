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
                    <h1 class="mt-4">TABLE</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();  ?>index.php/Admin/index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Item Tables</li>
                    </ol>

                    <div class="card mb-4 border-0">
                        <div class="card-header tableheader mb-0 pb-0">
                            ITEM TABLE
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">

                                <thead>
                                    <tr>
                                        <th>Item Id</th>
                                        <th>Item_Name</th>
                                        <th>Wastage_Provision</th>
                                        <th>Item_Status</th>
                                        <th>Category</th>
                                        <th>Item_Price</th>
                                        <th>Item_Qty</th>
                                        <th>Display_Qty</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Item Id</th>
                                        <th>Item_Name</th>
                                        <th>Wastage_Provision</th>
                                        <th>Item_Status</th>
                                        <th>Category</th>
                                        <th>Item_Price</th>
                                        <th>Item_Qty</th>
                                        <th>Display_Qty</th>
                                        <th>Edit</th>
                                    </tr>
                                </tfoot>
                                <tbody class="text-center">
                                    <?php foreach ($itemdata as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->Item_ID; ?></td>
                                            <td><?php echo $item->Item_Name; ?></td>
                                            <td><?php echo $item->Wastage_Provision; ?></td>
                                            <td><?php echo $item->Item_Status; ?></td>
                                            <td><?php echo $item->Category_Name; ?></td>
                                            <td><?php echo $item->Price; ?></td>
                                            <td><?php echo $item->Quantity; ?></td>
                                            <td><?php echo $item->Display_Quantity; ?></td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-success" id="edit" value=""><i class="far fa-edit"></i></button> -->
                                                <button type="button" onclick="edititem('<?php echo $item->Item_ID; ?>')" class="btn btn-success" id="edit<?php echo $item->Item_ID; ?>" value="<?php echo $item->Item_ID; ?>"><i class="icon-edit"></i></button>

                                            </td>

                                        </tr>
                                    <?php  } ?>

                                </tbody>
                            </table>

                            <div class="container mt-0">
                                <div class="row pt-3 mb-2 justify-content-center">
                                    <div class="col-md-4 text-center">
                                        <button id="addrecord" class="btn btn-primary" name="addrecords"> + Add New Record</button>
                                    </div>
                                </div>
                                <div id="div-addrecord" class="col-md-9 container dropdiv" style="display:none">
                                    <form id="form-add" name="form-add">
                                        <h4 class="text-center">ADD ITEMS</h4>
                                        <div class="row my-5">
                                            <div class="col-md-4">
                                                <input type="text" name="Item_Name" id="Item_Name" placeholder="Item Name">
                                                <input type="text" name="Wastage_Provision" id="Wastage_Provision" placeholder="Wastage Provision (in %)">
                                            </div>
                                            <div class="col-md-4">
                                                <select name="Item_Status" class="inputmod" id="Item_Status">
                                                    <option>Select Item Status</option>
                                                    <option value="In-Stock">In-Stock</option>
                                                    <option value="Out-Stock">Out-Stock</option>
                                                    <option value="Removed">Removed</option>
                                                </select>

                                                <select name="Category_Name" class="inputmod" id="Category_Name">
                                                    <option>Select Category</option>
                                                    <option value="Vegetables">Vegetables</option>
                                                    <option value="Fruits">Fruits</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="Price" id="Price" placeholder="Price">
                                                <input type="text" name="Quantity" id="Quantity" placeholder="QTY">

                                            </div>
                                            <div class="col-md-12 text-right mt-5">
                                                <input type="button" class="btn btn-danger mr-3" name="addnew" style="width:100px" id="close" value="Close" />
                                                <input type="button" class="btn btn-success mr-3" name="addnew" style="width:100px" id="addnew" value="Add" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    function edititem($value) {
        console.log($value);
        window.location = "<?php echo base_url(); ?>" + "index.php/Admin/editform/" + $value;
    }
    $(document).ready(function() {
        // $('[id^=edit]').click(function(e) {
        //     // console.log(e.target.value);
        //     window.location = "<?php echo base_url(); ?>" + "index.php/Admin/editform/" + e.target.value;
        // });

        $('#close').click(function() {
            $('#div-addrecord').slideToggle();

        });

        $('#addrecord').click(function() {
            $('#div-addrecord').slideToggle();

        });
        $("#addnew").click(function() {
            base_url = "<?php echo base_url(); ?>";

            var formvalid = $("#form-add").valid();
            if (formvalid) {


                $.ajax({
                    url: base_url + 'index.php/Admin/addnew',
                    data: $("#form-add").serialize(),
                    method: 'post',
                    success: function(response) {
                        // console.log(response);

                        window.location = base_url + 'index.php/Admin/itemtable';
                        alert("You are successfully Added.");
                    },
                    error: function() {
                        alert("Something Wrong");
                    }
                });
            }
        });

        $("#form-add").validate({
            rules: {
                Item_Name: "required",
                Wastage_Provision: "required",
                Item_Status: "required",
                Category_Name: "required",
                Price: "required",
                Quantity: "required"

            },
            messages: {

                Item_Name: "Item Name required",
                Wastage_Provision: "*required",
                Item_Status: "*required",
                Category_Name: "*required",
                Price: "*required",
                Quantity: "*required"

            }
        });

    });
</script>
<?php $this->load->view('template/footer'); ?>


</html>