<!DOCTYPE html>
<html>
    <head>
        <title> AMS-Read Blog</title>
        <link rel="icon" href="images/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/logo.jpg" height="60px" width="60px"> Accommodation Management System</a>
                <!--nev bar-->
            </div>
        </nav>

        <div class="blog-top" style="height: 300px; width: 80%; margin-left: 130px; margin-top: 20px">
            <div class="blog-top-left" style="height: 300px; width:30%; float: left">
                <?php 
                    $con = mysqli_connect("localhost","root","","fsf");
                
                    if(isset($_GET['bid'])){
                        $id = $_GET['bid'];
                    }
                
                    /*session_start();
                    $id = $_SESSION['blogid'];*/
                
                    $con = mysqli_connect("localhost","root","","fsf");

                    $sql = "select * from blog where id=$id";

                    $query = mysqli_query($con,$sql);

                    $row = mysqli_fetch_assoc($query);
                
                    echo "<p style='font-size:16px'>".$row['district']."</p>";
                    echo "<p style='font-size:22px'>"."<b>".$row['title']."</b>"."</p>";
                    echo "<p style='font-size:16px; padding-top:30px'>"."<br />"."<b>".$row['name']."</b>"."</p>";
                    echo "<p style='font-size:15px'>".$row['date']."</p>";
                
                    /**/
                ?>
            </div>
            <div class="blog-top-right">
                <img src="<?php echo 'blog/' . $row['image'] ?>" width="60%" height="300px">
            </div>
        </div>
        <hr width="80%">
        <div class="blog-down container text-justify" style="width: 50%; font-size:18px;">
            <?php
                echo $row['description'];
            ?>
            
            <br /><br />
            <hr>
        </div>
        
        <div class="container" style="width: 50%; font-size:14px;">
            <p>Blog Id : <?php echo $id; ?></p>
            <p style="font-size:18px">Comments</p>
            <form method="POST" action="readpage.php">
                <input name="name" class="name border" type="name" placeholder=" Name" style="height: 30px; width: 90%; font-family: cursive; float: left" required>
                <input name="blogid" class="blogid border" type="blogid" placeholder="Blog Id" style="height: 30px; width: 10%; font-family: cursive" required><br>
                <textarea name="comment" class="comment border" type="comment" placeholder="Add your Comment..." row="4" style="width: 100%; font-family: cursive" required></textarea><br>
                <button class="button btn-primary" name="submit" type="submit">Comment</button>
                
            </form>
        </div>
        <br>
        
        <div class="container" style="width: 50%; font-size:18px;">
            <?php
                //$con = mysqli_connect("localhost","root","","projectbttc");
            
                if($_POST){
                    $name = $_POST['name'];
                    $comments = $_POST['comment'];
                    $blogid = $_POST['blogid'];
                    
                    //echo $name;
                
                    $sql = "insert into comment (`name`,`comments`,`blogid`) values ('$name','$comments','$blogid')";

                    $query = mysqli_query($con,$sql);
                
                    if($query){
                        $_SESSION['blogid'] = $blogid;
                        header("location: readpage.php");
                    }
                    else{
                        echo mysqli_error($con);
                    }
    
                    mysqli_close($con);
                }             
            ?>

        </div>
        <br /><br />
    </body>
</html>