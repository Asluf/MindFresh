<nav class="navbar navbar-dark" style="background-image: linear-gradient(135deg, #92FFC0 10%, #002661 100%);">

    <div class="d-flex">
        <div class="col-md-11" style="width: 99%;">
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Home_a838fgt">
                <img src="<?php echo base_url(); ?>resources/ICons/logo1_3.png" style="border-radius:15px;width:30px; margin-right:10px;" />
                <span style="font-family:'Courier New', Courier, monospace;">MIND FRESH</span>
            </a>

        </div>
        <div class="col-md-1 mt-2 ml-4" style="width: 1%;">
            <span id="btn-abc" class="navbar-toggler-icon "></span>
        </div>

    </div>

    <div id="abc" class="navbar-nav" style="display: none;">
        <div class="d-flex">
            <a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo base_url(); ?>index.php/Home_a838fgt">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo base_url(); ?>index.php/Add_a838fggdgfdt">Add+</a>
            <a class="nav-item nav-link mr-2 font-weight-bold" href="<?php echo base_url(); ?>index.php/Manage_a838fgtdrggdgfdt">Manage</a>
            <a class="nav-item nav-link mr-2 font-weight-bold" href="<?php echo base_url(); ?>index.php/About_atgfdg838fgt">About</a>
            <a class="nav-item nav-link  mr-2 font-weight-bold" href="<?php echo base_url(); ?>index.php/Contact_axdgftr838fgt">Contact</a>
            <a class="nav-item nav-link font-weight-bold" data-toggle="modal" data-target="#logoutModal" href="#">
                <i class="icon-power-off ml-1 mt-1 text-gray-400"></i>
            </a>

        </div>

    </div>
</nav>
<div class="modal fade col-md-4 col-xs-4 col-sm-4 pr-4" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 14px;">Are you sure want to logout?</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?php echo base_url(); ?>index.php/Logout">
                    <button type="button" class="btn btn-sm btn-danger">Logout</button>
                </a>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('template/footer'); ?>
<script>
    $(document).ready(function() {
        $('#btn-abc').click(function() {
            $('#abc').slideToggle();
        });
    });
</script>