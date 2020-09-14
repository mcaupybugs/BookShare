<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bookstore';

$connection = mysqli_connect($servername, $username, $password, $dbname);

if ($connection) {
    echo "We are connected";
}
