<?php
include "config/database.php";

$sql = "SELECT * FROM ch";
$result = $conn->query($sql);

$data = [];
?>

<div class="card">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($datas = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= @$datas["id"] ?></td>
                        <td><?= @$datas["name"] ?></td>
                        <td><?= @$datas["email"] ?></td>
                        <td><?= @$datas["phone"] ?></td>
                        <td><?= @$datas["password"] ?></td>
                        <td><?= @$datas["gender"] ?></td>
                        <td><?= @$datas["description"] ?></td>
                        <td><a href="update.php/<?=@$datas["id"] ?>" class="btn btn-danger">Update</a></td>
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