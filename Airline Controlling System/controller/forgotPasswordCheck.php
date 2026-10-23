<?php
session_start();
include "../model/userModel.php";
  //$data = json_decode(file_get_contents("../model/data.json"), true);
  $passWord = $userName ="";
  $idErr = '';
  if(isset($_POST["idSubmit"]))
  {

    if(empty($_POST['id']))
    {
      $idErr = "Please provide an id";
    }
      else
      {
        // code...
        $data = userdata($_POST["id"]);
        if($data)

             $userName = $data['USERNAME'];

      }


}


 ?>
