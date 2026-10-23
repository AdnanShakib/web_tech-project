<?php
include "../controller/changePasswordCheck.php";


 ?>
<!DOCTYPE html>
<html>
     <head>
          <title>Change Password</title>
          <link rel="stylesheet" href="../css/mix.css">
          <style>
            body{
            //  background-color: #66BFBF;
            }
            label{
              font-size: 20px;
            }
          </style>
     </head>
     <body>

<div class="header">
       <table border="0" width="100%" height="100px">
         <tr>
           <td align="left">
             <img src="../images/airline.jpg" width="100px" height="100px">

           </td>
           <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td>
           <td align="right">
             <h3 class="pos">
               <a href="../controller/logout.php"> Logout </a>
             </h3>
           </td>

         </tr>
       </table>
</div>
       <hr>


<div style = "background-color: tomato">
  <center>
    <h2 style="color: white">Change Password</h2>
  </center>
</div>
<form action="" method="post">
  <center>
  <table border="0">
    <tr>
      <td><label>Current Password </label></td>
      <td><input type="text" name="currentPass"><span style="color : red;"> <br></td>
    </tr>
    <tr>
      <td><label>New Password</label></td>
      <td><input type="password" name="newPass"><span style ="color : red;"><br></td>
    </tr>
    <tr>
      <td><label>Re-type New Password</label></td>
      <td><input type="password" name="reTypePass"><span style ="color : red;"><br> </td>
    </tr>
    <tr>
      <td><input type="submit" name="submit"></td>
    </tr>
  </table>
</center>
</form>
<hr>
<div class="header">

<table class="bottom" border="0" width="100%" height="50px">
  <tr>
    <td colspan="2" align="center">
      Copyright ~ Web Technology, Section: A, Group: 3
    </td>
  </tr>
</table>
</div>
</body>
</html>
