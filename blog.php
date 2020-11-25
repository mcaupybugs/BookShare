<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
?>
<?php
require "header.php";
?>
<?php
require "navigation.php";
?>

<?php

if (!isset($_SESSION["loggedin"])) {
    header("location: index.php");
    exit;
}

$db_id = $_SESSION['userid'];


$query = "SELECT * FROM blog";
$result = mysqli_query($connection, $query);

?>



<div class="container" style="margin-top:100px">
    <a href="addBlog.php">Add New Post</a>
    <h1>Blog</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_row($result)) {
            ?>
                <tr>

                    <th scope="row"><?php print_r($row[1]) ?></th>
                    <td><?php print_r($row[2]) ?></td>
                    <td><?php print_r($row[3]) ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>