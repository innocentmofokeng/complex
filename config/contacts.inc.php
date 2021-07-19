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
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        echo "Thank you for your message! we will keep in touch <3";

// sending maing
        /*

        $content="From: $fullname \n Email: $email \n Message: $message";
        $recipient = "info@complexgraphicx.co.za";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $content, $mailheader) or die("Error! cant send mail please call us");
        */
        // echo "Thank you mail sent";

//sending to database

        $sqli = "INSERT INTO clients (fullname,phone,email,subject,message)
            VALUES ('?','?','?','?','?')";

            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare ($stmt,$sqli)){
                echo "SQLI error ";
            } else {
                mysqli_stmt_bind_param($stmt,"sisss", $fullname,$phone,$email,$subject,$message);
                mysqli_stmt_execute($stmt);
            }    
             mysqli_query($con,$sqli);
     




?>