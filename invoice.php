<?php include 'session.php'; ?>


<?php
$message = "";

date_default_timezone_set('Asia/Dhaka');
$timestamp = date("Y-m-d H:i:s");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $p_number = $_POST['p_number'];
    $address = $_POST['address'];
    $product_name = $_POST['product_name'];
    $model = $_POST['model'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    $discount = $_POST['discount'];
    $date = $timestamp;

    if ($name == "" && $p_number == "" && $product_name == "") {
        $message = "Please fill all the requered field";
    } else {
        $db_connect = mysqli_connect("localhost", "root", "", "anamul");
        $insert = $db_connect->query("insert into invoice(date, name, p_number, address, product_name, model, quantity, rate, discount) values (' $date', '$name', '$p_number', '$address', '$product_name', '$model', '$quantity', '$rate', '$discount')");
        if ($insert) {
            $message = "Data insert success";
        } else {
            $message = "Fail to data insert";
        }
    }
}
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




    <div class="container">
        
       
        <div class="header">
            <h3>M/S AZMINA ELECTRONICS</h3>
            <p>Narundi Bazzar, Gupalpur Road, Jamalpur Sadar<br> Mobile: 01940-354738, 01980-354738</p>
        </div>
        <a href="logout.php" class="btn btn-success btn-sm float-right">Logout</a>
        <div class="card-body-success">
            <?php 
                if(!empty($message)){
                    echo $message;
                }
            
            ?>
            </div>
        <div class="sl_date">
            <div class="sl">

                <div class="sl_l">
                    <label for="sl">SL NO:&nbsp;</label>
                </div>
                <div class="sl_fill">
                    123
                </div>
            </div>

            <div class="date">

                <div class="date_l">
                    <label for="date">Date: &nbsp;</label>
                </div>
                <div class="date_fill">
                    <input id="date" name="date" value="" />
                </div>
            </div>


        </div>

        <form action="" method="POST">

            <div class="row">
                <div class="col-25">
                    <label for="name">Customer Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Customer name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="p_number">Phone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" id="p_number" name="p_number" placeholder="Mobile No..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="address">Address</label>
                </div>
                <div class="col-75">
                    <textarea id="address" name="address" placeholder="Write your address.." style="height:80px"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="product_name">Product Name</label>
                </div>
                <div class="col-75">
                    <select id="product_name" name="product_name" onchange="change()">
                        <option value="" selected disabled> Seclect product</option>
                        <option value="refrigerator">Refrigerator</option>
                        <option value="telivision">Telivision</option>
                        <option value="rice_cooker">Rice cooker</option>
                        <option value="blander">Blander</option>
                        <option value="presser_cooker">Presser cooker</option>
                        <option value="electric_Catli">Electric Catli</option>
                        <option value="Iron">Iron</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="model">Model No</label>
                </div>

                <div class="col-75">
                    <select id="model" name="model">
                        <option value="" selected disabled> Seclect Model</option>

                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-25">
                    <label for="quantity">Quantity</label>
                </div>
                <div class="col-75">
                    <input type="text" id="quantity" name="quantity" placeholder="Quantity..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="rate">Rate</label>
                </div>
                <div class="col-75">
                    <input type="text" id="rate" name="rate" placeholder="Rate..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="discount">Discount</label>
                </div>
                <div class="col-75">
                    <input type="text" id="discount" name="discount" placeholder="Discount..">
                </div>
            </div>



            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>



    <script src="catagori.js"></script>
</body>

</html>