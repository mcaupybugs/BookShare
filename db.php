<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bookstore';

$connection = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if ($connection) {
    echo "We are connected";
}
