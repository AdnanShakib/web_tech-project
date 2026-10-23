<?php
include "../controller/fileComplaintCheck.php"
?>

<html>
<head>
	<title>Edit Profile</title>
  <link rel="stylesheet" href="../css/mix.css">
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
    <h2 style="color:white">File Complaint</h2>
  </center>
</div>


    <form id = "complain" action="" method="post">
      <center>
      <table border="0">
        <tr>
          <td><label>Email</label></td>
          <td><input type="text" name="email_address" id = "email_address" placeholder="Email"><br> <br></td>
        </tr>
      <tr>
        <td><label>Reason</label></td>
        <td><textarea rows="6" name="complaint" id="complaint" placeholder="Write your complaint here"></textarea></td>
      </tr>
        <tr>
          <td><input type="submit" name="submit" value="File Compalint"></td>
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
