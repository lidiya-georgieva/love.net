<?php

if(isset($_SESSION['is_logged']))
{
		$s=$_GET['salary'];
		if($s=='salary1') {$s1=300;$s2=800;} 
		else if($s=='salary2') {$s1=800;$s2=1500;} 
		else {$s1=1600;$s2=9500;}
		
		$car=$_GET['car'];
		
		$kg=$_GET['kg'];
		if($kg=='thin') {$kg1=55;$kg2=65;} 
		else if($kg=='medium') {$kg1=66;$kg2=77;} 
		else if($kg=='mediumF') {$kg1=78;$kg2=90;} 
		else {$kg1=90;$kg2=500;} 
		
		$h=$_GET['height'];
		if($h=='short') {$h1=167;$h2=175;} 
		else if($h=='medium') {$h1=176;$h2=180;} 
		else if($h=='mediumH') {$h1=180;$h2=185;} 
		else {$h1=186;$h2=300;} 
		
		$v=$_GET['villa'];
		
		$query=mysql_query("SELECT name,email,facebook FROM men WHERE car='$car' 
		  AND kilograms>='$kg1' AND kilograms<='$kg2' AND villa='$v' AND salary>='$s1' AND salary<='$s2'
		  AND height>='$h1' AND height<='$h2'");
		  
		if(mysql_num_rows($query) > 0) {
		  while($row = mysql_fetch_array($query))
			$data[] = $row;
		  foreach($data as $people) {
			{
			 echo '<div class="info">'.$people['name'].'</div>';
			 echo '<div class="subinfo">'.$people['email'].'</div>';
			 echo '<a href='.$people['facebook'].' class="B">'.'<div class="subinfo">facebook</div>'.'</a>';
			}
			
         }
        }
		else echo '<div class="info">Няма потребители с посочените данни. Опитайте пак!</div>';
	}

else echo'<script language="javascript">alert("Трябва да сте потребител, за да ползвате тази услуга!!!");
						window.location = "index.php";</script>';
?>