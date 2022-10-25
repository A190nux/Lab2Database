<?php
session_start();
 $conn = mysqli_connect('localhost','root','') or die(mysqli_error($conn));
 mysqli_select_db($conn, 'reg') or die(mysqli_error($conn));

 $name=$_POST['uname'];
 $password=$_POST['psw'];
 $mail=$_POST['email'];
 $q=mysqli_query($conn, "select * from users where email='".$mail."' ") or die(mysqli_error($conn));
 $n=mysqli_fetch_row($q);
 if($n>0)
 {
  $er='The email '.$mail.' is already taken';
 }
 else
 {
  $insert=mysqli_query($conn, "insert into users (name, password , email) values('".$name."','".$password."','".$mail."')") or die(mysqli_error($conn));
  if($insert)
  {
   $er='Values are registered successfully';
   $_SESSION['name']=$name;
    header('location:/Lab2/welcome.php');
  }
  else
  {
   $er='Values are not registered';
  }

 }

 ?>