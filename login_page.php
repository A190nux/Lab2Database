<?php
session_start();
 $conn = mysqli_connect('localhost','root','') or die(mysqli_error($conn));
 mysqli_select_db($conn, 'reg') or die(mysqli_error($conn));
 $email=$_POST['email'];
 $psw=$_POST['psw'];
 if($email!=''&&$psw!='')
 {
   $query=mysqli_query($conn, "select name from users where email='".$email."' and password='".$psw."'") or die(mysqli_error($conn));
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$res;
    header('location:/Lab2/welcome.php');
   }
   else
   {
    echo'You entered email or password is incorrect';
   }
 }
 else
 {
  echo'Enter both email and password';
 }
?>