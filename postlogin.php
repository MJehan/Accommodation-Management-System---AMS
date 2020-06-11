
<!DOCTYPE html>
<html>
    <head>
        <title>ACCOMODDATION MANAGMENT SYSTEMS</title>
        <link rel="icon" href="image/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-title">
            <h1>WELLCOME TO AMS</h1>
            <h2>Login - First</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="login.php">
                <input name="email" type="email" class="form-login" placeholder="Email" required><br />
                <input name="password" type="password" class="form-login" placeholder="Password" required><br />
                
                <input type="submit" name="submit" class="form-login submit" value="Login"><br />
                
                <p style="text-align: left; font-size: 18px; font-family: Times New Roman; color: white; padding-left: 380px"><a href="registration.php" style="color: white">Registration</a></p>
                
                <p style="text-align: right; font-size: 18px; font-family: Times New Roman; color: white; padding-right: 380px">Back to <a href="index.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>

<?php
session_start();
$con = mysqli_connect("localhost","root","","fsf");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "select * from registration where email='".$email."' AND password='".$password."' limit 1";
    
    $query = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_assoc($query);
    
    //echo "<p style='color: white'>".$row["id"]."</p>";
    $uid = $row["id"];
    
    if(mysqli_num_rows($query)==1)
    {
        
        $_SESSION['userid'] = $uid;
        header("location:login.php");
    }
    else
    {
        echo "<p style='color: white'>"."Your email or password is incorrect. Try again."."</p>";
    }
}
?>