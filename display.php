<?php

include "./connection.php";

$select = "SELECT * FROM user";

$execute = mysqli_query($con, $select);

while ($row = mysqli_fetch_array($execute)) { ?>


    <tr id="select<?php echo $row['id']; ?>">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <!-- <td class="edit bg-success user-select-none text-white-50" ><a data-bs-toggle="modal" data-bs-target="#id<?php echo $row['id']; ?>" >edit</a>  -->      
    <!-- </td> -->

        <td class="bg-success user-select-none text-white-50" ><a onclick="item_delete( <?php echo $row['id']; ?> )" id="id<?php echo $row['id']; ?>" class="delete">delete</a></td>

    </tr>


<!-- href="./delete.php?id=<?php echo $row["id"]; ?>" -->





<?php
}
?>