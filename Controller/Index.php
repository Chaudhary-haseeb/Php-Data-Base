<?php

include "config/databas.php";


if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    if (empty($name) ||
 empty($email) ||
 empty($phone) ||
 empty($password)||
 empty($gender)){
 
 die('Please fill all required fields!');
 }



if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    die("Only letters and white space allowed");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
       }
       if (!preg_match("/^[0-9\-\(\) ]*$/", $phone)) {
        die("Invalid phone number format. Only numbers, spaces, dashes, and parentheses are allowed.");
       }
       

   
    $sql ="INSERT INTO `ch` (`name`, `email`, `phone`, `password`,
     `gender`) VALUES ( '$name', '$email', '$phone', '$password', '$gender')";
    $result = mysqli_query($conn,$sql);
    
    if ( $result){
        ?>
        <script>
            alert("data Sucessfully inserted");
            </script>
            <?php
        
    }else{
        ?>
        <script>
            alert("data   inserted Fail");
            </script>
            <?php
  
    }
    

}



?>
