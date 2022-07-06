<?php

require 'conf.php';



$name =$_POST["name"];
$email =$_POST["email"];
$password =$_POST["password"];
$Country =$_POST["Country"];

if($name=="" || $email=="" || $password==""|| $Country=="")
{
    echo '<script> alert("Empty Feild") </script>';
   
}

else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{   
    echo '<script> alert("Invaild email") </script>';
    require "SignUp.php";
}
else{
   
 $sql="select * from signup where name= '$name'";
 $res=mysqli_query($con,$sql) or die(mysqli_error($con));

 if(mysqli_num_rows($res)>=1)
 {
     echo '<script> alert("username already taken") </script>';
     require "SignUp.php";
 }
 else{
    mysqli_query($con,"insert into signup (name, email, Password,Country) values ('$name', '$email', '$password','$Country')");
    echo '<script> alert("reg. success") </script>';
       require "Login.php";

 }

    


    //   $insert = "INSERT INTO signup(name , email , Password,Country) VALUES('$name', '$email', '$password','$Country')";
    //   $message[] = 'registered successfully!';
    //   mysqli_query($con, $insert);
      


}
mysqli_close($con);

?>