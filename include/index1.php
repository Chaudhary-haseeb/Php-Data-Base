

<div><h1 class="text-center">Fill this Form</h1></div>
<div class="card w-50 mx-auto mt-5">
     <form class="mx-5 my-5 fw-semibold" method="POST" action="" >
         <input type="hidden" name="id" value="<?= htmlspecialchars($datas['id']) ?>">
        
         <div>
            
             <label for="name" class="form-label" placeholder="Enter the name">Name</label>
             <input type="name" name="name" class="form-control" id="name">
              <div class="text-danger"><?php echo "$nameErr" ?></div> 
         </div

         <div>
             <label for="email" class="form-label" placeholder="Enter the email">Email address</label>
             <input type="email" name="email" class="form-control" id="email">
             <!-- <div class="text-danger"><?php echo "$emailErr" ?></div> -->
         </div>

         <div>
             <label for="number" class="form-label" placeholder="Enter the phone Number">Phone Number</label>
             <input type="text" name="phone" class="form-control" id="phone">
             <!-- <div class="text-danger"><?php echo "$phoneErr" ?></div> -->
         </div>


         <div>
             <label for="password" class="form-label" placeholder="Enter the password">Password</label>
             <input type="password" name="password" class="form-control" id="password">
             <!-- <div class="text-danger"><?php echo "$passErr" ?></div> -->
         </div>
         <div>
             <label for="gender" class="form-label">Gender</label>
             <select class="form-select " name="gender" id="gender">
                 <option value="">Select Gender</option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>
             </select>
             <!-- <div class="text-danger"><?php echo "$genderErr" ?></div> -->
         </div>

             
               
         <div class="mt-3">
             
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="../CRUD/vew.php" class = "btn btn-primary">View</a></p>

                
                
         </div>
     </form>
 </div> 


