<?php
session_start();

  include '../model/userModel.php';

  //$data = json_decode(file_get_contents("../model/data.json"), true);
  $data = userdata($_SESSION['id']);
  if($data)
  {
    $_SESSION['name'] = $data['NAME'];
    $_SESSION['username'] = $data['USERNAME'];
    $_SESSION['email'] = $data['EMAIL'];
    $_SESSION['gender'] = $data['GENDER'];
    $_SESSION['dob'] = $data['DOB'];
  }
  ?>
