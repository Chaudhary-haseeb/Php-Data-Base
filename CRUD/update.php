<?php

include "../Config/databas.php";




    $id = $_GET['id'];


$sql = "SELECT * FROM ch WHERE id ='$id'";
 $result= mysqli_query($conn, $sql);
 if ($result && mysqli_num_rows($result) > 0) {

    $datas = mysqli_fetch_assoc($result);
} else {
    die("No record found .");
}





if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

   

    $sql = "UPDATE ch SET 
            name = '$name', 
            email = '$email', 
            phone = '$phone', 
            password = '$password', 
            gender = '$gender' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data successfully updated');</script>";
    } else {
        echo "updattion failed";
        
    }
}


include "../include/header.php";
?>







<div class="card w-50 mx-auto mt-5">
    <form class="mx-5 my-5 fw-semibold" method="POST" action="" >
         <input type="hidden" name="id" value="<?= htmlspecialchars($datas['id']) ?>">
        
         <div>
            
             <label for="name" class="form-label" placeholder="Enter the name">Name</label>
             <input type="name" value="<?php echo $datas['name']; ?>" name="name" class="form-control" id="name">
             
     </div>
    

         <div>
             <label for="email" class="form-label" placeholder="Enter the email">Email address</label>
             <input type="email" value="<?php echo $datas['email']; ?>"  name="email" class="form-control" id="email">
     
         </div>

         <div>
             <label for="number" class="form-label" placeholder="Enter the phone Number">Phone Number</label>
             <input type="text" value="<?php echo $datas['phone']; ?>" name="phone" class="form-control" id="phone">

         </div>


         <div>
             <label for="password" class="form-label" placeholder="Enter the password">Password</label>
             <input type="password" value="<?php echo $datas['password']; ?>" name="password" class="form-control" id="password">

         </div>
         <div>
             <label for="gender" class="form-label">Gender</label>
             <select class="form-select " name="gender" value="<?php echo $datas['gender']; ?>" id="gender">
                 <option value="">Select Gender</option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>
             </select>
    
         </div>

             
               
         <div class="mt-3">
             
                <button type="update" name="update" class="btn btn-primary">Update</button>
            

                
         </div>
     </form>
 </div> 

    
</body>
</html>