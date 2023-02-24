<?php

    $connection = mysqli_connect('localhost', 'root', '', 'portfolio_db');


    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message = $_POST['message'];
        
        
        
        
        


        $request = "insert into port_form(name, email, project, message) values('$name', '$email', '$project', '$message')";

        mysqli_query($connection, $request);

        header('location:index.php');
    }else{
        echo 'something went wrong try again';
    };







?>