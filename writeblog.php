<?php
if(isset($_GET['uid'])){
        $uid = $_GET['uid'];
    }

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $title = $_POST['title'];
    $dates = $_POST['dates'];
    $district = $_POST['district'];
    $description = $_POST['description'];
    
    
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name'];
    
    $con = mysqli_connect("localhost","root","","fsf");
    
    move_uploaded_file($tempimagename, "blog/$imagename");
    
    $sql = "insert into blog (`name`,`title`,`date`,`district`,`description`,`image`) values('$name','$title','$dates','$district','$description','$imagename')";
    
    $query = mysqli_query ($con,$sql);
    
    if($query){
        echo "Blog saved";
    }
    else{
        echo mysqli_error($con);
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<hrml>
    <head>
        <title> AMS-Write Blog</title>
        <link rel="stylesheet" href="profile.css">
        <link rel="icon" href="images/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="profile.php"><img src="images/logo.jpg" height="60px" width="60px">Accommodation Management System</a>
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="profile.php">PROFILE</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="profile.php">POST</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="writeblog.php">WRITE BLOG</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    
        <div class="login-form container" text-align="center">
            <div class="h">
                <p>Write a new <b style="color: green">Blog</b></p>
            </div>
            <form id="login-form" method="POST" action="writeblog.php" enctype="multipart/form-data">
                <input name="name" type="name" class="form-login" placeholder="Author Name" required><br />
                <input name="title" type="title" class="form-login" placeholder="Title " required><br />
                
                <input name="dates" type="dates" class="form-login" placeholder="yyyy/mm/dd" required><br />
                <input name="district" type="district" class="form-login" placeholder="About" required><br />
                
                <textarea name="description" rows="6" class="textarea" type="description"></textarea><br />
                
                <input type="file" alt="pro-pic" name="profilepic" class=""><br />
                
                <input type="submit" name="submit" class="form-login submit" value="Submit Your Blog">
                <hr>
            </form>
        </div>
    </body>
</hrml>