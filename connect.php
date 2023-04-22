<?php
$conn=mysqli_connect("localhost","root","login");

$Username=$_POST['Username'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

if($password==$confirm_password)
{
    $query="INSERT INFO users(username,email,password) VALUES('$Username','$email','$password')"
    $query_run =mysqli_query($conn,$query);

    if($query_run)
    {
        echo"Registered Sucessfully";
    }
    else
    {
        echo"Registered Failed";
    }
}
else
{
    echo"password mismatch!" 
}
//database connection
?>