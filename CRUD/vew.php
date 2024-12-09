





<?php
 include "../Config/databas.php";
include "../include/header.php";
$sql = "SELECT * FROM ch";
 $result= mysqli_query($conn, $sql);


?>
<body>
<div class="card">
    <table  id="example" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Gender</th>
            
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                
                while ($datas = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= @$datas["id"] ?></td>
                        <td><?= @$datas["name"] ?></td>
                        <td><?= @$datas["email"] ?></td>
                        <td><?= @$datas["phone"] ?></td>
                        <td><?= @$datas["password"] ?></td>
                        <td><?= @$datas["gender"] ?></td>
                   
                        
                        
                      
                    <td><a href="../CRUD/update.php?id=<?= $datas['id'] ?>"
                     class="btn btn-danger">Update</a></td>

                     <td><a href="../CRUD/delete.php?id=<?= $datas['id'] ?>"
                     class="btn btn-primary">Delete</a></td>
                   
                    

                    </tr>


                <?php }
            } else { ?>
                <tr>
                    <td colspan="8">No users found</td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>

</div>



<?php

include "../include/footer.php";
?>
