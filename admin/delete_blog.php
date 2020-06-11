<?php
session_start();

if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    $con = mysqli_connect("localhost","root","","fsf");
    
    $sql = "Delete from blog where id=$id";
    
    $query = mysqli_query($con,$sql);
    
    $_SESSION['message'] = "Successfully Deleted";
    $_SESSION['msg_type'] = "danger";
}
?>



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
                        <a class="nav-link" href="#">POST</a>
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
            </div>
        </nav>

        <div class="container table-responsive">
            <h1 class="text-primary text-center" style="font-size: 20px; font-style: italic; padding-top:30px">----- All Blog -----</h1>
            
            <br />
            
            <?php
                $con = mysqli_connect("localhost","root","","fsf");
    
                $sql = "select * from blog order by id";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                    echo "<div class='card mb-3 container' style='margin-top: 30px'>";
                        echo "<img class='card-img-top' src='../images/back_g.jpg' alt='Card image cap' height='250px'>";
                        echo "<div class='card-body'>";
                
                            echo "<table class='table'>";
                                echo "<tr>";
                                    echo "<th>";
                                        echo "Blog Id";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "Blog Title";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "Action";
                                    echo "</th>";
                                echo "</tr>";
                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $row["id"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["title"];
                                        echo "</td>";
                                        echo "<td>";
                                            ?>
                                            <a href="../read.php?bid=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-success">Read</a>
            
                                            <a href="updateblog.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-danger">Delete</a>
                                            <?php
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";
                }
                else
                {
                    echo "There is no blog yet.";
                }
                mysqli_close($con);
            ?>
        </div>
        
    </body>
</html>