<div class="container-fluid px-2">
    <div class="card mb-4 border-0">
        <div class="card-header tableheader mb-0 pb-0">
            TEXTILE TABLE
        </div>


        <div class="card-body">
            <table id="datatablesSimple">

                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($textile as $item) {
                    ?>
                        <tr>
                            <td><?php echo $item['Item_Name'];
                                ?>
                            </td>
                            <td><?php echo $item['Price'];
                                ?>
                            </td>
                            <td><?php echo $item['Quantity'];
                                ?>
                            </td>
                            <td class="text-center">
                                <button type="button" onclick="removetextile('<?php echo $item['Item_ID']; ?>')" class="btn btn-sm btn-danger"><i class="icon-delete"></i></button>
                            </td>
                        </tr>
                    <?php  }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
