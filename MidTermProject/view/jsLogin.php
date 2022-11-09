
<?php
include "../controller/jsLoginCheck.php"
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validation</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/mix.css">


</head>
<div class="header">


<table border="0" width="100%" height="100px">
  <tr>
    <td align="left">
      <img src="../images/airline.jpg" width="100px" height="100px">
    </td>
   <!-- <td align="left"> <h1 style="color:Red">MSTS Airlines</h1></td> -->
   <td><a href="../index.php"><h1 style="color:Red">MSTS Airlines</h1></a> </td>
  </tr>
</table>
</div>
<hr>
<body>

<div class="containers">
<form id="form" action="" onsubmit="return validation()" method ="POST">
  <div class="container">
    <label for="uname"><b>User id</b></label>
    <input type="text" placeholder="Enter Username" name="userid" id="userid" >
    <div id="idErr">
    </div>

    <label for="psw"><b>Password</b></label>

    <input type="password" placeholder="Enter Password" id ="password" name="password" >
    <div id="passErr">
    </div>
    <button type="submit" name ="login">Login</button>
 </div>
  </form>
</div>


<table border="0" width="100%" height="50px">
 <tr>
   <td colspan="2" align="center">
     Copyright ~ Web Technology, Section: A, Group: 3
   </td>
 </tr>
</table>
  <script>
function validation()
{

    var idErr= "";
    var passErr= "";
    var userid = document.getElementById("userid").value;
    var password = document.getElementById("password").value;



    if(userid == "" && password == ""){
        document.getElementById("idErr").innerHTML = " Please enter your username ";
        document.getElementById("passErr").innerHTML='Please enter your password';
        return false;
    }

    if(userid == ""){
        document.getElementById("nameErr").innerHTML ="Please enter your username";
    }




    if(password== ""){
        document.getElementById("passErr").innerHTML='Please enter your password';
        return false;
    }

    document.getElementById("idErr").innerHTML = "";
    document.getElementById("passErr").innerHTML = "";
}
</script>


</body>
</html>
