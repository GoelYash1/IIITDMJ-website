<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="col-sm-9 mt-5">
    <!--Table-->
    <div class="bg-light text-dark p-2">
        <p>
        <h4>Deans</h4>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'includes/connect.php';
                /*Create query*/
                $qry = 'SELECT * FROM dean';

                /*Execute query*/
                $result = mysqli_query($con, $qry);

                /*Show the rows in the fetched result set one by one*/
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['name'] ?></td>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['department_name'] ?></td>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['email'] ?></td>
                        <td style="font-size: medium; color:black; border:10px light"><?php echo $row['description'] ?></td>
                        <td style="font-size: medium;">
                            <div class="btn-group">
                                <button name="del" class="btn btn-primary" style="background-color:red" dtype="button"><a href="delete_function.php?dean_id=<?php echo $row['dean_id'] ?>" style="color:white; text-decoration:none" onclick="return checkdelete()"><span class="glyphicon glyphicon-edit"></span><i class="fas fa-trash-alt"></i></a></button>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!--row closed from header-->

<div>
    <a class="btn btn-danger box" href="addDean.php" style="  position: fixed; bottom: 10px; right: 20px; margin-bottom: 30px;">
        <i class="fas fa-plus fa-2x"></i>
    </a>

</div>
<script src="js/deleteprompt.js"></script>



<?php
include('includes/script.php');
include('includes/footer.php');
?>