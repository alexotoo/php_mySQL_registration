<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = "registration_form";

// connection property
$dbConnect = mysqli_connect($host,$user,$password,$database) or die("connection to database failed");


//user Registration

$username = mysqli_real_escape_string($dbConnect, $_POST['username']);
$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
$password_1 = mysqli_real_escape_string($dbConnect, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($dbConnect, $_POST['password_2']);

