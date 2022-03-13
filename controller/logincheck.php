<?php 
	session_start();
    $_SESSION['username']='Munim';
    $_SESSION['password']='123';
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username != ""){
			if($password != ""){

					if($username==$_SESSION['username'] && $password==$_SESSION['password']){
						setcookie('username',$username,time()+60*60*7);
						header('location:../views/Admin home.php');
					}


				echo "Invalid username/password...";
					

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}

?>



