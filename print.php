<?php
session_start();
	if (!isset($_SESSION['register_id'])) {
        header('Location: http://localhost/invoice/login.php');	
	}
?>

<?php
// $db_connect= mysqli_connect("localhost", "root", "", "anamul");
// $view= $db_connect->query("SELECT * from invoice order by sl_no desc");

$id = $_GET['id'];
$db_connect = mysqli_connect("localhost", "root", "", "anamul");
$data = $db_connect->query("SELECT * FROM order_details WHERE sl_no=$id");
$getData = $data->fetch_assoc();

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
</head>

<body>
    <div class="header">
        <h3>M/S AZMINA ELECTRONICS</h3>
        <p>Narundi Bazzar, Gupalpur Road, Jamalpur Sadar<br> Mobile: 01940-354738, 01980-354738</p>
    </div>
    <!-- <a href="logout.php" class="btn btn-success btn-sm float-right">Logout</a> -->

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-actions-btns mb-5">
                                        <a href="index.php" class="btn btn-primary">
                                                <i class="icon-download"></i> Back
                                            </a>
                                            <a href="#" class="btn btn-primary">
                                                <i class="icon-download"></i> Download
                                            </a>
                                            <a href="#" class="btn btn-secondary">
                                                <i class="icon-printer"></i> Print
                                            </a>
                                        </div>
                                    </div>
                                </div>
    



                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                <?php echo $getData['name'] ?><br>
                                                <?php echo $getData['p_number'] ?><br>
                                                <?php echo $getData['address'] ?>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice No : <?php echo $getData['sl_no'] ?></div>
                                                <div>Date-Time :<?php echo $getData['date'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="invoice-body">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Product Model</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $getData['product_name'] ?></td>
                                                        <td><?php echo $getData['model'] ?></td>
                                                        <td><?php echo $getData['quantity'] ?></td>
                                                        <td><?php echo $getData['rate'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                                Tax<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>
                                                        <td>
                                                            <p>
                                                            <?php echo $getData['rate'] ?><br>
                                                                00<br>
                                                               00<br>
                                                            </p>
                                                            <h5 class="text-success"><strong><?php echo $getData['rate'] ?></strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>


                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>