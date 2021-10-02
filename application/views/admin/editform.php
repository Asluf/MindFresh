<html>

<head>
    <?php $this->load->view('template/head'); ?>
    <link href="<?php echo base_url();  ?>resources/admin/css/admincustom.css" rel="stylesheet" />
    <style>
        label.pop {
            align-items: center;
            position: absolute;
            top: 2.5rem;
            left: 1rem;
            transition: all.4s linear;
        }

        :focus+label.pop {
            font-weight: bold;
            text-align: center;
            color: green;
            top: -15px;

        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-6 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center ">
                            <div class="p-3">
                                <form id="frmedit" name="frmedit" class="editform">

                                    <div class="text-center pt-3 mb-5">
                                        <h4 class="text-secondary">Edit Products Here </h4>
                                    </div>
                                    <table class="border-0" style="border:transparent">

                                        <?php foreach ($edit as $item) { ?>
                                            <tr>
                                                <td><label for="">Item Name</label></td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <input type="hidden" name="Item_ID" id="Item_ID" readonly value="<?php echo $item->Item_ID;  ?>">
                                                        <input type="text" name="name" id="name" readonly value="<?php echo $item->Item_Name;  ?>">
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="">Wastage Provision</label></td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <input type="text" name="wastage" id="wastage" value="<?php echo $item->Wastage_Provision;  ?>">
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <label>Item_Status</label></td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <!-- <input type="text" id="status" name="status" value="<?php echo $item->Item_Status;  ?>"> -->
                                                        <select name="status" class="inputmod" id="status">
                                                            <option><?php echo $item->Item_Status;  ?></option>
                                                            <option value="In-Stock">In-Stock</option>
                                                            <option value="Out-Stock">Out-Stock</option>
                                                            <option value="Removed">Removed</option>
                                                        </select>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Price</label></td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <input type="text" name="price" id="price" value="<?php echo $item->Price;  ?>">
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label">Quantity</label>
                                                </td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <input type="text" name="qty" id="qty" value="<?php echo $item->Quantity;  ?>">
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">

                                                    <fieldset class="form-group text-center py-2 my-2">
                                                        <button name="submit" id="submit" class="btn btn-success mx-2 ">save</button>
                                                        <a name="goback" id="goback" href="<?php echo base_url();  ?>index.php/Admin/itemtable" class="btn btn-outline-info mx-2 ">Go Back</a>
                                                    </fieldset>
                                                </td>

                                            </tr>

                                        <?php } ?>
                                    </table>



                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>


</body>
<?php $this->load->view('template/footer'); ?>

<?php $this->load->view('admin/template/scripts') ?>

</html>


<script>
    $(document).ready(function() {



        $("#submit").click(function() {
            base_url = "<?php echo base_url(); ?>";

            // var formvalid = $("#frmedit").valid();
            // if (formvalid) {


            $.ajax({
                url: base_url + 'index.php/Admin/editing',
                data: $("#frmedit").serialize(),
                method: 'post',
                success: function(response) {
                    // console.log(response);

                    window.location = base_url + 'index.php/Admin/itemtable';
                    alert("You are successfully Edited.");
                },
                error: function() {
                    alert("Something Wrong");
                }
            });
            // }
        });

        // $("#frmedit").validate({
        //     rules: {
        //         wastage: "required",
        //         status: "required",
        //         price: "required",
        //         qty: "required"

        //     },
        //     messages: {

        //         wastage: "Wastage Provision required",
        //         status: "*required",
        //         price: "*required",
        //         qty: "*required"

        //     }
        // });
    });
</script>