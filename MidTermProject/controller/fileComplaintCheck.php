<?php
session_start();
require("../model/userModel.php") ;

$c_email = $c_reason = "";

if(isset($_POST["submit"])){

$c_email = $_POST["email_address"];
$c_reason = $_POST["complaint"];

if($c_email != null && $c_reason !=null){
//  echo "hi";
  $status = complaint($c_email,$c_reason);


  if($status){
    //echo $status;
  //echo "successfull";
    header('location: ../view/fileComplaint.php');
  }else{
    //echo "not valid";
    header('location: ../view/fileComplaint.php');
  }

}
}
?>
