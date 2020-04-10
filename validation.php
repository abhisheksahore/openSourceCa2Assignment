<?php

session_start();
$connect = mysqli_connect('localhost', 'root', 'Abhishek@123');


if($connect){
    echo "connection successful";
}else{
    echo "connection invalid";
}
mysqli_select_db($connect, 'opensourceca2');




$username = $_POST['username'];
$password = $_POST['password'];

$querySelect = " select * from signup where username = '$username'  and password = '$password' ";

$exists = mysqli_query($connect, $querySelect);
//print_r($exists);
$num = mysqli_num_rows($exists);

echo $num;


if($num)
{
    $_SESSION['username'] = $username ;
    header('location: home.php');
    
}
else
{
    header('location: login.php');
}

?>





