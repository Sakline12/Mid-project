
<html>
	<body>
		<h1 style="text-align:center;">Sign Up completed!</h1>
		<hr>
		<?php
		echo "Name is:".$_POST["name"]."<br>";
		echo "Password is:".$_POST["pass"]."<br>";
		echo "Confirm Password is:".$_POST["conpass"]."<br>";
        echo "Gender is:".$_POST["gender"]."<br>";
        echo "Age is:".$_POST["age"]."<br>";
		echo "Skills are:";
		foreach($_POST["skills"] as $value)
		{
		echo $value."<br>";	
			
		}
		echo "Education background:".$_POST["dept"]."<br>";
		echo "Present Address:".$_POST["paddress"]."<br>";
		echo "Permanent Address:".$_POST["peraddress"]."<br>";
		echo "Email:".$_POST["epass"]."<br>";
		echo "Contact number:".$_POST["contact"]."<br>";
		?>
	</body>
</html>
</html>