<!DOCTYPE html>
<html lang="en">
<head>
        <title>AMS-Profile</title>
        <link rel="stylesheet" href="../profile.css">
        <link rel="icon" href="../images/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="profile.php"><img src="../images/logo.jpg" height="60px" width="60px"> Accommodation Management System</a>
                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="index.php">POST</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="review.php">REVIEW</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blog_member.php">BLOG_MEMBER</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                    
                </ul>
                <?php
                    session_start();
                    
                    $id = $_SESSION['userid'];
                    
                    $con = mysqli_connect("localhost","root","","fsf");
            
                    $sql = "select * from admin where id = $id";
                
                    $query = mysqli_query($con,$sql);
            
                    $row = mysqli_fetch_assoc($query);
                    
                    $name = $row["firstname"];
                ?>
            </div>
        </nav>
        
        <div class="container" style="text-align: center">
            <br />
            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="200" height="220" alt='Profile pic' class="border border-dark img-thumbnail"><br /><br />
            
            <?php
                echo "<i style='font-size: 20px'>"."<b>".$row["firstname"]."</i>"."</b>"."<br /><br />";
                
                echo $row["email"]."<br />";
                echo $row["phonenumber"]."<br />";
                echo $row["address"];
                echo "<br />";
                echo "<br />";
                          
            ?>
            <hr>
        
        </div>
        
        <div class="container jumbotron" style="margin-top: 30px;">
        <?php
            $con = mysqli_connect("localhost","root","","fsf");
            
            $sql = "select * from contact order by id desc limit 1";
            
            $query = mysqli_query($con,$sql);
            
            $row = mysqli_fetch_assoc($query);
            
            echo "You have a new message from "."<b><i>".$row["name"]."</b></i>";
            echo "<hr align='left'>";
            
            echo "<div class='text-justify' style='padding-left: 50px'>";
                
                echo "Name   &nbsp: "."<b><i>".$row["name"]."</b></i><br />";
                echo "E-mail : "."<b><i>".$row["email"]."</b></i><br />";
                echo "Subject: "."<b><i>".$row["subject"]."</b></i><br /><br />";
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp "."<i>".$row["message"]."</i>";?>
            <br /><br /><a href="message.php" style="font-family: imes New Roman" class="btn text-success">Read all messages</a>
            <?php
            echo "</div>";
        ?>
        </div>
    </body>
</html>