<?php
				include ("connect.php");
                $facebook=$_POST['facebook'];
				$kg=$_POST['kg'];
				$eyes=$_POST['eye'];
				$hair=$_POST['hair'];
				$boobs=$_POST['boobs'];
				$height=$_POST['height'];
				$years=$_POST['years'];
	  //HACKERS
	            $name=strip_tags($_POST['name']);
				$email=strip_tags($_POST['email']);
				$pass=strip_tags($_POST['pass']);
                $query="SELECT * FROM women WHERE email='$email'";
		     	$result=mysql_query($query);
		    	$num=mysql_num_rows($result);
				if($num>0)  echo '<script language="javascript">alert("Вече има потребител с този имейл!!!");
					                        window.location = "register_html.php";</script>';
				else 
				{
				   if(empty($facebook) || empty($kg) || empty($eyes) || empty($hair) || empty($email) || empty($pass)
					|| empty($name)|| empty($boobs) || empty($height) || empty($years)) 
					  {
						   echo '<script language="javascript">alert("Имате непопълнени полета!!!");
												window.location = "register_html.php";</script>';
					  }
					else
					{

				$name = stripslashes($name);
				//$name = htmlentities($name);
				$name = mysql_real_escape_string($name);
				$email = stripslashes($email);
				$email = htmlentities($email);
				$email = mysql_real_escape_string($email);

				$pass = sha1($pass);
				
				if(!preg_match('/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,4})$/', $_POST['email'])) 
					{echo '<script language="javascript">alert("Въведеният имейл адрес е невалиден!!!");
					window.location = "register.html";</script>';}
			    else {
					mysql_query("INSERT INTO women VALUES ('','$name','$pass','$email','$facebook','$kg','$eyes','$hair','$boobs','$height','$years')") or die(mysql_error()) ;
			         }
					 
			 header("Location:index.php");
			 }
			 }
?>
			
