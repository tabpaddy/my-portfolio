<?php

    // $connection = mysqli_connect('localhost', 'root', '', 'portfolio_db');


    // if(isset($_POST['send'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $project = $_POST['project'];
    //     $message = $_POST['message'];
        
        
        
        
        


    //     $request = "insert into port_form(name, email, project, message) values('$name', '$email', '$project', '$message')";

    //     mysqli_query($connection, $request);

    //     header('location:index.php?messageSent');
    // else{
    //     die('something went wrong try again');
    // };



    if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $project = $_POST['project'];
            $message = $_POST['message'];

            $myMail = "taborotap@gmail.com";
            $header = "From: " . $email;
            $message2 = "you have received a message from " . $name . ". \n\n" . $message;


            mail($myMail, $project, $message2, $header);
            header("location: index.php?mailSend");

    }

?>