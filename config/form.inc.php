<?php
    require_once('./db.inc.php');

    $con = mysqli_connect("$db_hostname","$db_username","$db_password", "$db_database");
    
    
    //check connection
    
        if (mysqli_connect_errno())
            {
                echo "Failed to connect MySQL: " . mysqli_connect_errno();
                exit();
            }

            

// Getting user data from the form

        $fullname = mysqli_real_escape_string($con, $_POST['name']);
        $compname = mysqli_real_escape_string($con, $_POST['companyname']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        echo "Thank you for your message! we will keep in touch <3";


//sending mail

        $content="From: $fullname \n Email: $email \n Message: $message";
        $recipient = "info@complexgraphicx.co.za";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $content, $mailheader) or die("Error! cant send mail please call us");
//       echo "Email sent!";



?>