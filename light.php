<?php
include 'session.php';





include 'include_file/header.php';





?>

<style>
    .scrol {
        background-image: url('img/bg.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 400px;

    }

    .scrol_nav {
        margin-top: 800px;
    }
</style>

<!-- Navbar -->
<?php include 'include_file/nabbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include 'include_file/left_sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Invoice Page</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-bodddy text-center">
            <img id="light1" src="img/off.png" alt="" height="200px" width="200px">
            <img id="light2" src="img/off.png" alt="" height="200px" width="200px">
            <img id="light3" src="img/off.png" alt="" height="200px" width="200px">
            <img id="light4" src="img/off.png" alt="" height="200px" width="200px">
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-success btn-sm" onclick="lightBtn(1)">ON</button>
            <button class="btn btn-danger btn-sm" onclick="lightBtn(0)">OFF</button>
        </div>
        <div class="scrol">
            <nav class="navbar navbar-expand-lg navbar-primary bg-danger">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>

                </div>


            </nav>

            <div class="scrol_nav">

                <p>
                    Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following Many of our components require the use of JavaScript to function. Specifically,
                    they require jQuery, Popper.js, and our own JavaScript plugins. Place the following
                </p>
            </div>

        </div>

        <script>
            function lightBtn(value) {
                for (var i = 1; i <= 4; i++) {

                    if (value == 1) {
                        var pic = 'img/on.png';
                    } else {
                        var pic = 'img/off.png';
                    }

                    var light = document.getElementById('light' + (i));
                    // console.log(light);
                    light.src = pic;
                }


            }
        </script>
    </section>



</div>
<!-- /.content-wrapper -->
<script src="js/catagori.js"></script>
<?php include 'include_file/footer.php' ?>