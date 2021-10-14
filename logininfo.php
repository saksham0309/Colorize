<?php

session_start();

$con=mysqli_connect('localhost','root');

if($con)
{
    echo "connection successful";

}
else{
    echo "No connection";
}
$db=mysqli_select_db($con,'logininfodata');

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    $sql="select * from signupuserdata where email='$email'&& password='$password'";
    $query = mysqli_query($con,$sql);

    $rowcount=mysqli_num_rows($query);
    {
        if($rowcount==1)
        {
            echo 'login successful';
            $_SESSION['email']=$email;
            header('location:account.php');

        }
        else{
            echo 'login failed';	   
            header('location:login.php');
        }

    }
    

}

?>