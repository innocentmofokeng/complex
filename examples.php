<?php

require_once('config/db.inc.php');

$con = mysqli_connect("$db_hostname","$db_username","$db_password", "$db_database");


//check connection

    if (mysqli_connect_errno())
        {
            echo "Failed to connect MySQL: " . mysqli_connect_errno();
            exit();
        }

// create tables 
/*
$sqli = "CREATE TABLE clients (
                                id INT(6) unsigned AUTO_INCREMENT PRIMARY KEY,
                                fullname varchar(30) NOT NULL,
                                compname varchar(30) NOT NULL,
                                phone int (15) NOT NULL,
                                email varchar(255) NOT NULL,
                                subject varchar(255) NOT NULL,
                                message varchar(255) NOT NULL,
                                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                                )";
    if($con->query($sqli) === TRUE) 
        {
            echo "Table created successfull";
        } else 
            {
              echo "error creating table" . $con->error;
            }
*/


// Inset into Data
/*
$sqli = "INSERT INTO clients (fullname,compname,phone,email,subject,message)
        VALUES ('Innocent Mofokeng','Complex Graphicx', '0625924189', 'complex@complexgraphicx.co.za', 'Running Tests', 'Hope we got no issues in this new scripts')";

        if ($con->query($sqli)=== TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sqli . "<br>" . $con->error;
        }
*/



// Getting user data from the form

$funllname = mysqli_real_escape_string($con, $_POST['name']);
$compname = mysqli_real_escape_string($con, $_POST['companyname']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$message = mysqli_real_escape_string($con, $_POST['message']);




$data ="Admin";

// create a template to query sql

$sqli = "SELECT * FROM clients WHERE fullname=?;";

// Create a prepared statement 
$stmt = mysqli_stmt_init($con);
//Prepare the prepare
if (!mysqli_stmt_prepare($stmt, $sqli))
    {
        #code....
        echo "sql statement failed";
    }
 else
       {
            //Bind paramenters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", "$data");
            // RUn parameters inside database
            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);
        }


?> 