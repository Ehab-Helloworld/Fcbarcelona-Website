<?php

require 'conf.php';
$email =$_POST["email"];
$password =$_POST["password"];

$query="select * from signup where email= '$email' and Password= '$password'";
$res=mysqli_query($con, $query);
if(mysqli_num_rows($res)>=1)
{
    echo '<script> alert("you are a validated user. logged in successfully") </script>';
     require "Barça TV+.php";
}
else
{
    echo '<script> alert("Invalid username/password") </script>';
    require "Login.php";

}
mysqli_close($con);
?>