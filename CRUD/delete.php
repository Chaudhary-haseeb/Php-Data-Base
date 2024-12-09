<?php

include "../Config/databas.php";




$id = $_GET['id'];

$query = " DELETE FROM ch WHERE id = '$id' ";

$data = mysqli_query($conn,$query);

if ($data)
{
    echo " <script>alert ('Rcorded deleted'); </script>";
    

}else{
    echo"Failed to Delete";
}

?>