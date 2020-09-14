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

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_POST['addbook'])) {
        $book_name = $_POST['bookname'];
        $address = $_POST['address'];
        $user_id = $_SESSION['userid'];
        $addQuery = "INSERT INTO book (book_name,address,user_id) VALUES ('$book_name','$address','$user_id')";
        $rr = mysqli_query($connection, $addQuery);
        if (!$rr) {
            header("Location:addBook.php");
        } else {
            header("Location:index.php");
        }
    }
} else {
    $result = "Login First!!";
    header('location: login.php');
    exit;
}

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Add Book<br> Page</h2>
        <p>Add Book here to rent</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form action="addBook.php" method="post">
                <div class="form-group">
                    <label>Book Name</label>
                    <input type="text" name="bookname" class="form-control" placeholder="Book Name">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <button type="submit" name="addbook" class="btn btn-black">Add Book</button>
            </form>

        </div>
    </div>
</div>