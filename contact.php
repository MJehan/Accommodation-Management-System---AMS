<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $con = mysqli_connect("localhost","root","","fsf");
    
    $sql = "insert into contact(`name`,`email`,`subject`,`message`) values('$name','$email','$subject','$message')";
    
    $query = mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> AMS-Contact</title>
        <link rel="icon" href="images/logo.jpg" type="image/icon">
        <link rel="stylesheet" href="contact.css">
        
    </head>
    <body>
        
        <div class="contact-left-part">
            <div class="contact-left-part-t" style="text-transform: uppercase">
                <h1 style="font-size: 20px; line-height: 10px; padding-top: 30px; text-align: center;">Need Help?</h1>
                <p style="font-size: 14px; line-height: 20px; padding-top: 30px; text-align: center;  font-family: Times New Roman;">Call to our Support</p><br /><br />
                
                <table>
                    <tr>
                        <td>Md Jehan</td>
                        <td><img src="images/contacticon.png" alt="fb link" height="15px" width="15px"></td>
                        <td>01762350424</td>
                    </tr>
                    <tr>
                        <td>Md Jehan</td>
                        <td><img src="images/contacticon.png" alt="fb link" height="15px" width="15px"></td>
                        <td>01762350424</td>
                    </tr>
                    
                </table>
            </div>
            
            <div class=contact-left-part-b>
                <img src="images/contact.jpg">
            </div>
        </div>
        
        <div class=contact-right-part>
            <div class="message-title" style="margin-top: 100px; color: #fff; text-transform: uppercase;">
                <h1 style="font-size: 16px; line-height: 10px;">Say Hello</h1>
                <h2 style="font-size: 14px;">We are alwas ready to serve you</h2>
            </div>
        
            <div  class="message-form">
                <form id="message-form" method="POST" action="contact.php" style="margin-top: 50px">
                    <input name="name" type="text" class="form-message" placeholder="Write your full name" required><br />
                
                    <input name="email" type="email" class="form-message" placeholder="Your E-mail" required><br />
                    
                    <input name="subject" type="subject" class="form-message" placeholder="Subject" required><br />
                
                    <textarea name="message" class="form-message" placeholder="Write your message" row="4" required></textarea><br />
                
                    <input type="submit" class="form-message submit" value="Send Your Message">
                    <?php
                        if($query)
                        {
                            echo "<div style='color: white'>";
                                echo "We Receive your mail and try to give you back as soon as possible. Thank you!!!";
                            echo "</div>";
                        }
                        else
                        {
                            echo "Try Again";
                        }
                    ?>
                    
                    <p style="text-align: right; font-size: 18px; font-family: Times New Roman; color: white; padding-right: 90px">Back to <a href="index.php" style="color: white">HOME</a></p>
                </form>
            </div>
        </div>
    </body>
</html>