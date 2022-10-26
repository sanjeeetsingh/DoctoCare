<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $app_date = $_POST['app_date'];
    $city = $_POST['city'];
    $time = $_POST['time'];
    $DID=$_POST['doc_id'];

    
     $conn = new mysqli('127.0.0.1:3310','root','','doctocare');
     if($conn->connect_error){
         die('Connection Failed  :  '.$conn->connect_error);
     }else{
          $stmt = $conn->prepare("insert into appointment(doc_id,firstName, lastName, email, number, app_date, city, time)values(?,?, ?, ?, ?, ?, ?, ?)");
         $stmt->bind_param("isssisss",$DID,$firstName, $lastName, $email, $number, $app_date,$city, $time);
         $stmt->execute();
         header("location: ../Payment/payment.html");
         $stmt->close();
         $conn->close();     
     }
?>
