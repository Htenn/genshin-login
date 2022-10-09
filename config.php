<?php
    //Connect to database
    $DBConnect = mysqli_connect("localhost", "root", "", "genshin");

    if($DBConnect->connect_error) {
        die("You are not connected to database!" . $DBConnect->error);
    }

    //Get the contact details
    if((isset($_POST["submit"]))) {
        //receive all input values from the form
        $name = $DBConnect->real_escape_string($_POST['name']);
        $email = $DBConnect->real_escape_string($_POST['email']);
        $subject = $DBConnect->real_escape_string($_POST['subject']);
        $message = $DBConnect->real_escape_string($_POST['message']);

        //Save to database
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";

        if(!$result = $DBConnect->query($sql)) {
            die('Error saving to database {' . $Conn->error . '}');
        }
        else {
            header("location: index.php?page=Confirmed"); //Go to any web page you like
        }
    }
?>