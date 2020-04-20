<?php

session_start();


$servername='localhost';
$user='root';
$password='Bharat_786';
// $dbname = 'user_info';

$conn = mysqli_connect($servername,$user,$password);

if ($conn){
    echo "Connection created";
}
else{
    die("Connection not created due to :".mysqli_connect_error());
}

mysqli_select_db($conn,'task');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];

$q = "SELECT * FROM `admin_login` WHERE admin_email='$email' && admin_pass='$pass'";
$query = mysqli_query($conn,$q);
if($query){
if(mysqli_num_rows($query)>0){
    $_SESSION['email'] = $email;
    header('location:dashboard.php');
}
else{
    header('location:signup.php');
}
}
}

?>