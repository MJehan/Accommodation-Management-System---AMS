<!DOCTYPE html>
<html>
    <head>
        <title> AMS- Post</title>
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

                <ul class="navbar-nav mx-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="profile.php">HOME</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="postlogin.php">POST</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    
                </ul>
                <!--nev bar-->
            </div>
        </nav>
        
        <div>
            <?php
                $con = mysqli_connect("localhost","root","","fsf");
    
                $sql = "select * from post order by id";//ORDER BY id desc
                $result=mysqli_query($con,$sql);
                
                $userinfo = array($sql);

               

                    while($row_user = mysqli_fetch_array($result))
                    {
                        $userinfo = $row_user['image'];
                        $userinfo = $row_user['type'];
                        $userinfo = $row_user['description'];
                        $userinfo = $row_user['address'];
                        $userinfo = $row_user['phonenumber'];
                    }
                    

                    print_r(array_chunk($userinfo->followings, 3));
                
                
                mysqli_close($con);
            ?>
        </div>
    </body>
</html>



                    
                
                




