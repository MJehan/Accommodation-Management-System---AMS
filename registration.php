<?php
if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name
    
    $con = mysqli_connect("localhost","root","","fsf");
    
    move_uploaded_file( $tempimagename,"imgs/$imagename");
    
    $sql = "insert into registration(`firstname`,`phonenumber`,`email`,`password`,`address`,`image`) values('$firstname','$phonenumber','$email','$password','$address','$imagename')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header("location:login.php");
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accommodation Management System</title>
        <link rel="icon" href="image/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-title">
            <h1>Registration</h1>
            <h2>Give all the information carefully</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="registration.php" enctype="multipart/form-data">
                <input name="firstname" type="name" class="form-login" placeholder="First Name" required><br />
             
                <input name="phonenumber" type="contact" class="form-login" placeholder="Phone Number" required><br />
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="password" type="password" class="form-login" placeholder="Password" required><br />
                <input name="address" type="address" class="form-login" placeholder="Address" required><br />
               
                <input type="file" alt="pro-pic" name="profilepic" class="form-control"><br />
                
                <input type="submit" name="submit" class="form-login submit" value="Registration">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="index.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>