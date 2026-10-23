<?php
session_start();
include "../model/userModel.php";
//$name = $_SESSION['uname'];
$id = $_SESSION['id'];
$pass = $_SESSION['Password'];

if(isset($_POST['submit'])){
 $currentPass = $_POST['currentPass'];
 $newPass = $_POST['newPass'];
 $rePass = $_POST['reTypePass'];
//	$dob = $_POST['dob'];

 if($currentPass != null && $newPass != null  && $rePass != null){
 //  echo "hi";
 if($currentPass===$pass and $newPass === $rePass)
 {
    $status = updatePassword($id,$newPass);
    if($status){
      //echo "Successful";
      //	setcookie($username,$password, time()-36000, '/');
      header('location: ../view/homePage.php');
    }
    else
    {
      echo "Password doesnt match";
    }
 }
 else
 {
   echo "wrong credentials";
 }
}
}
 ?>
