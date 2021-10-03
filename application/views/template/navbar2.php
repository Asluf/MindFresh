<nav class="navbar navbar-dark contanier-fluid" style="background-image: linear-gradient(135deg, #C33764 10%, #1D2671 100%);">

    <div class="d-flex">
        <div class="col-md-11" style="width: 99%;">
            <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Home">
                <img src="<?php echo base_url(); ?>resources/ICons/logo1_3.png" style="border-radius:15px;width:30px; margin-right:10px;" />
                <span style="font-family:'Courier New', Courier, monospace;">Mobile Mart</span>
            </a>

        </div>
        <div class="col-md-1 mt-2 ml-4" style="width: 2%;">
            <span id="btn-abc" class="navbar-toggler-icon "></span>
        </div>
    </div>


    <div id="abc" class="navbar-nav" style="display: none;">
        <div class="d-flex">
        <a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo base_url(); ?>index.php/Mobile_">Mobile<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo base_url(); ?>index.php/Home">Books</a>
            <a class="nav-item nav-link mr-3 font-weight-bold" href="<?php echo base_url(); ?>index.php/About_">About</a>
        </div>

    </div>
</nav>


<?php $this->load->view('template/footer'); ?>
<script>
    $(document).ready(function() {
        $('#btn-abc').click(function() {
            $('#abc').slideToggle();
        });
    });
</script>