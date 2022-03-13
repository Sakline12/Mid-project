<?php

Session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body>
<style>
body {
  background-image: url('../photos/official.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 110%;
}
</style>



<center><h1 style="color:white;">Admin Control</h1></center>
<h5 style="border: 2px solid Red"></h5>
<h2>Only use for Admin</h2>
<br>

<center>
<a href="../views/Doctors.php">
<h1><button><h1 style="color:red">Total Doctors</h1></button></h1>
</a>
</center>

<center>
<a href="../views/Staff information.php">
<h1><button><h1 style="color:red">Staff information</h1></button></h1>
</a>
</center>

<center>
<a href="../views/Donor information.php">
<h1><button><h1 style="color:red">Donor information</h1></button></h1>
</a>
</center>

<center>
<a href="../controller/Logout.php">
<h1><button><h1 style="color:red">Logout</h1></button></h1>
</a>
</center>

</body>
</html>