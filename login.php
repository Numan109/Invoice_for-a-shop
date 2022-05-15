<?php
session_start();

// if (isset($_SESSION['register_id'])) {
// 	header('Location: http://localhost/invoice/invoice.php');
// }

//display the message
$message = "";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = isset($_POST['check']) ? $_POST['check'] : null; 

    $db_connect = mysqli_connect("localhost", "root", "", "anamul");
    $user = $db_connect->query("SELECT * FROM registrations WHERE email='$email' and password='$password'");
    $user = $user->fetch_object();

    // if(!empty($user)){
    //     echo '<pre>';
    //     print_r($user->password);

    // }else{
    //     echo 'Not found';
    // }

    if (empty($user)) {
        $message = "Your email not found in database.";
    } else {
        $_SESSION['register_id'] = $user->register_id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['p_number'] = $user->p_number;
        if(isset($check)){
            setcookie('email',$email, time()+60);
        }
        header('Location: http://localhost/invoice/index.php');
    }
}


?>








<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>

    <h2>Modal Login Form</h2>

    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

    <div id="id01" class="modal">

        <div class="card-body">
            <?php if (!empty($message)) { ?>
                <div class="alert alert-danger">
                    <?= $message; ?>
                </div>
            <?php } ?>

            <form class="modal-content animate" action="login.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img/login avatar.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Username" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <input type="checkbox" name="check" id="check"> <label for="check"> Are you save your password</label>  

                    <button type="submit">Login</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>



        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

</body>

</html>