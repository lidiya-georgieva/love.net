<?php
   
 include "connect.php";
   
 if (!isset($_SESSION['is_logged']))
   {
	// user is not logged in.
	        $errors = array();
			if(empty($_POST['email'])) 
			{
			echo '<script language="javascript">alert("Полето име е празно!!!");
				window.location = "index.php";</script>';
			}
			if(empty($_POST['pass']))
            {
			'<script language="javascript">alert("Полето парола е празно!!!");
				window.location = "index.php";</script>';
			}
			
			$pass = $_POST['pass'];
			$email = strip_tags($_POST['email']);
			$email = stripslashes($email);
			$email = htmlentities($email);
			$email = mysql_real_escape_string($email);
			$pass = strip_tags($pass);
			$pass = sha1($pass);
			if(empty($errors)) {
				$query1 = "SELECT * FROM women WHERE email = '$email' AND password = '$pass' LIMIT 1";
				$query2= "SELECT * FROM men WHERE email = '$email' AND pass = '$pass' LIMIT 1";
				$result1 = mysql_query($query1);
				$result2 = mysql_query($query2);
					if ((mysql_num_rows($result1)>0) || (mysql_num_rows($result2) >0)) 
					{
					// Login was successfull
					    if(mysql_num_rows($result1)>0)
						     $row = mysql_fetch_array($result1);
					    else $row = mysql_fetch_array($result2);
						$_SESSION['is_logged'] = TRUE;
						$_SESSION['email'] = $row['email'];
						$_SESSION['id'] = $row['id'];
						$_SESSION['name'] = $row['name'];
					header("Location:index.php");
					} 
					else 
					{
						echo '<script language="javascript">alert("The password or e-mail is not correct!!!");
						window.location = "index.php";</script>';
					}
	   } else 
	   {
		 header("Loocation:index.php");
	}
 
} 
else 
{
	header("Location:index.php");
}
?>