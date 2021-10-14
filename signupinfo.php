<?php

$con=mysqli_connect('localhost','root');

if($con)
{
    echo "connection successfull";

}
else{
    echo "No connection";
}
mysqli_select_db($con,'logininfodata');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "insert into signupuserdata(username ,email ,password) values('$username','$email','$password')";


mysqli_query($con,$query);

header('location:account.php');




?>