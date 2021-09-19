<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('template/head');   ?>
    <link href="<?php echo base_url();  ?>resources/admin/css/adminstyles.css" rel="stylesheet" />
    <link href="<?php echo base_url();  ?>resources/admin/css/admincustom.css" rel="stylesheet" />

    <style>
        .BgImage {
            display: block;
            justify-content: center;
            align-items: center;
            text-align: center;

            background-size: 640 426;
            background-repeat: no-repeat;
            background-position: center center;
            border-radius: 5px;
        }


        .product-category li a.active {
            background: #00C5CD;
            color: white;

        }

        .product-category li a {
            color: black;
        }
    </style>


</head>

<body style="font-size:14px;">

    <?php $this->load->view('admin/template/navbar'); ?>
    <main>
        <div class="container">
            <div class="text-center p-4">Manage Your Items</div>
            <hr>

            <section class="mb-4">
                <div class="row ml-2 mb-2">

                    <ul class="nav nav-tabs  product-category d-flex" id="myTab" role="tablist">
                        <li class="text-dark nav-item active" style="font-size: 15px; width:80px;">
                            <a class="active" id="Book-tab" data-toggle="tab" href="#Book" role="tab" aria-controls="Book" aria-selected="true">Books</a>
                        </li>
                        <li class="text-dark nav-item " style="font-size: 15px; width:80px">
                            <a id="Textile-tab" data-toggle="tab" href="#Textile" role="tab" aria-controls="Textile" aria-selected="false">Textile</a>
                        </li>
                        <!-- <li class="text-dark nav-item" style="font-size: 13px; width:75px">
                            <a id="Grocery-tab" data-toggle="tab" href="#Grocery" role="tab" aria-controls="Grocery" aria-selected="false">Grocery</a>
                        </li>
                        
                        <li class="text-dark nav-item" style="font-size: 13px; width:50px; ">
                            <a id="Electronic-tab" style="text-align:left;" data-toggle="tab" href="#Grocery" role="tab" aria-controls="Electronic" aria-selected="false">Electronics</a>
                        </li> -->
                    </ul>

                </div>


                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="Book" role="tabpanel" aria-labelledby="Book-tab">
                        <div class="row col-xs-12" id="Vegetables" style="font-size:14px;">
                            <?php $this->load->view('admin/operate/book');
                            ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Textile" role="tabpanel" aria-labelledby="Textile-tab">
                        <div class="row col-xs-12" id="Fruits" style="font-size:14px;">
                            <?php $this->load->view('admin/operate/textile');
                            ?>
                        </div>
                    </div>

                </div>



            </section>
        </div>
    </main>

    <?php $this->load->view('admin/template/footerfont');  ?>
    <?php $this->load->view('template/footer'); ?>
    <script>
        function removebook($book) {
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/Admin/removebook/" + $book,
                method: "post",
                success: function(res) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: 'Successfully removed'
                    });
                    window.location = "<?php echo base_url(); ?>" + "index.php/Manage_a838fgtdrggdgfdt";


                },
                error: function(resp) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'error',
                        title: 'Check your internet connection!'
                    });

                }
            });

        }
        function removetextile($text) {
            $.ajax({
                url: "<?php echo base_url(); ?>" + "index.php/Admin/removetextile/" + $text,
                method: "post",
                success: function(res) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: 'Successfully removed'
                    });
                    window.location = "<?php echo base_url(); ?>" + "index.php/Manage_a838fgtdrggdgfdt";


                },
                error: function(resp) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'error',
                        title: 'Check your internet connection!'
                    });

                }
            });

        }
    </script>

</body>

</html>