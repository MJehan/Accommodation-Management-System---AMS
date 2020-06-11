<?php
if(isset($_POST['submit'])){

    $type = $_POST['type'];
    $phonenumber = $_POST['phonenumber'];
    $description = $_POST['description'];
    
    $address = $_POST['address'];
    
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name
    
    $con = mysqli_connect("localhost","root","","fsf");
    
    move_uploaded_file( $tempimagename,"post/$imagename");
    
    $sql = "insert into post(`type`,`phonenumber`,`description`,`address`,`image`) values('$type','$phonenumber','$description','$address','$imagename')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header("location:post.php");
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
            <h1>ADD POST</h1>
            
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="addpost.php" enctype="multipart/form-data">
                <input name="type" type="name" class="form-login" placeholder="Post-Type" required><br />
                <!-- <select id="type" name="type">
                    <option value="Home-rent">Home</option>
                    <option value="Office">Office</option>
                    <option value="Garadge">Garadge</option>
                    <option value="Land">Land</option>
                </select> -->
             
                <input name="phonenumber" type="contact" class="form-login" placeholder="Phone Number" required><br />
                <input name="description" type="description" class="form-login" placeholder="Description" required><br />
            
                <input name="address" type="address" class="form-login" placeholder="Address" required><br />
               
                <input type="file" alt="pro-pic" name="profilepic" class="form-control"><br />
                
                <input type="submit" name="submit" class="form-login submit" value="POST">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="profile.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>