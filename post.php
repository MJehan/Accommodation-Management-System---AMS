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
                        <a class="nav-link" href="index.php">HOME</a>
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
        
      

        <div class="container table-responsive">
            <!-- <h1 class="text-primary text-center" style="font-size: 20px; font-style: italic; padding-top:30px">----- All  Posts -----</h1> -->
            
            <form action="post.php" method="GET">
                    <input class="form-control" name="search" type="text" placeholder="Search by Location ">
                    <input type="submit" name="sub" value="Search" class="btn btn-primary" style="text-align:center;" >

                    <?php
                        $con = mysqli_connect("localhost","root","","fsf");

                        if(isset($GET['sub'])){
                            $search = $GET['search'];
                            $search_q = "select * from post where address= '$search'";
                            $run_q = mysqli_query($con, $search_q);

                            while($rows = mysqli_fetch_assoc($run_q))
                            {
                                $type = $rows['type'];
                               $address = $rows['address'];
                               $description = $rows['description'];
                               $phonenumber = $rows['phonenumber'];
                    ?>
                            <table>
                                <tr>
                                    <td><?php echo $type ?></td>
                                    <td><?php echo $address ?></td>
                                    <td><?php echo $description ?></td>
                                    <td><?php echo $phonenumber ?></td>
                                </tr>
                            </table>
                            <?php
                            }
                        }
                        mysqli_close($con);
                        ?>
            <br />
            
            <?php
                $con = mysqli_connect("localhost","root","","fsf");
    
                $sql = "select * from post order by id";//ORDER BY id desc
                $result = mysqli_query($con, $sql);

                if(mysqli_num_rows($result)>0)
                {
                    echo "<div class='card mb-3 container' style='margin-top: 30px'>";
                        
                        echo "<div class='card-body'>";
                
                            echo "<table class='table'>";
                                echo "<tr>";
                                    echo "<th>";
                                        echo "";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "";
                                    echo "</th>";
                                    echo "<th>";
                                        echo "";
                                    echo "</th>";
                                echo "</tr>";
                
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'post/'. $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">

                                        <?php
                                        echo "</br>";
                                        echo $row["type"];
                                        echo $row["description"]."<br>";
                                        echo $row["address"]."<br>";
                                        echo $row["phonenumber"];
                                        echo "</td>";

                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'post/'. $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">
                                        <?php
                                        echo "</br>";
                                        echo $row["type"];
                                        echo $row["description"]."<br>";
                                        echo $row["address"]."<br>";
                                        echo $row["phonenumber"];
                                        echo "</td>";

                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'post/'. $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">

                                        <?php
                                        echo "</br>";
                                        echo $row["type"];
                                        echo $row["description"]."<br>";
                                        echo $row["address"]."<br>";
                                        echo $row["phonenumber"];
                                        echo "</td>";

                                        echo "<td>";
                                        ?>
                                            <img src="<?php echo 'post/'. $row['image'] ?>" width="100" height="110" alt='Profile pic' class="border border-dark img-thumbnail">

                                        <?php
                                        echo "</br>";
                                        echo $row["type"];
                                        echo $row["description"]."<br>";
                                        echo $row["address"]."<br>";
                                        echo $row["phonenumber"];
                                        echo "</td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";
                }
                else
                {
                    echo "There is no post yet.";
                }
                mysqli_close($con);
            ?>
        </div>
        
    </body>
</html>
