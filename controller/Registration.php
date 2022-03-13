<?php
$isPost=false;
$name="";	
$password="";
$Confirm_Password="";
$gender="";
$age="";
$skills="";
$education_background="";
$Present_Address="";
$permanent_address="";
$Email="";
$Contact_number="";	
if(isset($_POST["btnSave"]))
{
	$isPost=true;
	if(isset($_POST["name"]))
	{
		$name=$_POST["name"];
		
	}
	if(isset($_POST["pass"]))
	{
		$password=$_POST["pass"];
	}
		if(isset($_POST["conpass"]))
	{
		$Confirm_Password=$_POST["conpass"];
	}
	if(isset($_POST["gender"]))
	{
		$gender=$_POST["gender"];
	}
	if(isset($_POST["age"]))
	{
		$age=$_POST["age"];
	}
    if(isset($_POST["paddress"]))
	{
		$Present_Address=$_POST["paddress"];
	}
	if(isset($_POST["epass"]))
	{
		$Email=$_POST["epass"];
	}
	if(isset($_POST["contact"]))
	{
		$Contact_number=$_POST["contact"];
	}


}
?>
<html>
	<body>
	
	<head>
<style>
body {
  background-image: url('../photos/Hospital.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 110%;
}
</style>
  

		<h1 style="text-align:center;">Sign Up!</h1>
		<hr>
		<form action="#" method="post">
		Name:<input type="text" id="name" name="name" value="<?php echo $name; ?>">
		<?php
			
			if($isPost==true && $name=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
		?>
		Password:<input type="password" id="pass" name="pass"value="<?php echo $password;?>"><br>
		<?php
			
			if($isPost==true && $password=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br>";
		?>
		Confirm_Password:<input type="password" id="conpass" name="conpass"value="<?php echo $Confirm_Password;?>">
		<?php
			
			if($isPost==true && $Confirm_Password=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
		?>

		Gender:<input type="radio" name="gender" value="male" value="<?php echo $Gender;?>"> Male 
		       <input type="radio" name="gender" value="female" value="<?php echo $Gender;?>"> &nbsp;Female<br>
	    <?php
			if($isPost==true && $gender=="")
			{
			  echo "<span style='color:red;'>Select gender</span>";
			}
            echo "<br><br>";
			
		?>
		       
		Age:<input type="number" id="age" name="age"value="<?php echo $age;?>">
		<?php
			
			if($isPost==true && $age=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
		?>

		Skills:<input type="checkbox" name="skills[]" value="C">C
		       <input type="checkbox" name="skills[]" value="C++">C++
			   <input type="checkbox" name="skills[]" value="C#">C#
			   <input type="checkbox" name="skills[]" value="Java">Java
			   <input type="checkbox" name="skills[]" value="Html">Html
			   <input type="checkbox" name="skills[]" value="Php">Php<br><br>

	    Education_background:<select name="dept">
			        <option value="0">Select</option>
					<option value="1">CSE</option>
					<option value="2">BBA</option>
					<option value="3">EEE</option>
					<option value="4">Se</option>
				    </select><br><br>

		Present_Address:<textarea name="paddress" id="paddress" name="paddress" rows="3" cols="20"value="<?php echo $Present_Address;?>"></textarea><br>
		<?php
			if($isPost==true && $Present_Address=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br>";
		?>
		Permanent_Address:<textarea name="peraddress" rows="3" cols="20"></textarea><br><br>
		Email:<input type="Password" id="epass" name="epass"value="<?php echo $Email;?>">
		<?php
			if($isPost==true && $Email=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
		?>
		Contact_number:<input type="text" id="contact" name="contact"value="<?php echo $Contact_number;?>">
	    <?php
		       if($isPost==true && $Contact_number=="")
			    {
				   echo "<span style='color:red;'>Required</span>";
			    }
			echo "<br><br>";
		?>
		<input type="submit" &nubsp value="Ok" name="btnSave">
		<strong><a href="Second page.php">Already have an account!</a></strong><br>
		<form>

</body>
</html>