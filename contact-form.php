<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone-number'];
        $subject = $_POST['subject'];        
        $message = $_POST['message'];

        $mailTo = "ravi.g.live@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have recieved a email from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    } 
?>