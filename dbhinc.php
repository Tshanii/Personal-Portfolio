<?php
    include_once("dbconnection.php");

    $id=rand();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];  
    $description=$_POST['description'];
    

    //database connection

    $sql = "insert into contact values ('$id', '$name', '$email', '$number', '$description')";
   
    if($conn->query($sql)===TRUE){
        echo "Registration Successfully...";
        sleep(5);
        header("Location:index.html");
        die();
    }
    else{
        echo "Error inserting data";
    } 
    $conn->close();
?>