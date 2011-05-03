<?php

if(isset($_SESSION['is_logged']))
{
		$b=$_GET['bust'];
		if($b=='size1') {$b1=84;$b2=92;} 
		else if($b=='size2') {$b1=93;$b2=108;} 
		else {$b1=109;$b2=200;}
		
		$hair=$_GET['hair'];
		
		$kg=$_GET['kg'];
		if($kg=='thin') {$kg1=45;$kg2=55;} 
		else if($kg=='medium') {$kg1=56;$kg2=66;} 
		else if($kg=='mediumF') {$kg1=67;$kg2=77;} 
		else {$kg1=78;$kg2=500;} 
		
		$h=$_GET['height'];
		if($h=='short') {$h1=160;$h2=167;} 
		else if($h=='medium') {$h1=168;$h2=175;} 
		else if($h=='mediumH') {$h1=176;$h2=184;} 
		else {$h1=185;$h2=300;} 
		
		$eyes=$_GET['eyes'];
		
		$query=mysql_query("SELECT name,email,facebook FROM women WHERE hair='$hair' 
		  AND kilograms>='$kg1' AND kilograms<='$kg2' AND eyes='$eyes' AND boobs>='$b1' AND boobs<='$b2'
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
