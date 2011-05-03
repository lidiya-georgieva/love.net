<?php

$lover=$_GET['lover'];
if(isset($_SESSION['is_logged']))
{
	//men search
	if($lover=="man")
	{
		$year_a=$_GET['search1'];
		$year_b=$_GET['search2'];
		$query=mysql_query("SELECT name,email,facebook FROM men WHERE years>='$year_a' && years<='$year_b'");
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
	//women search
    else 
    {
		$year_a=$_GET['search1'];
		$year_b=$_GET['search2'];
		$query=mysql_query("SELECT name,email,facebook FROM women WHERE years>='$year_a' && years<='$year_b'");
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
}
else echo'<script language="javascript">alert("Трябва да сте потребител за тази услуга!!!");
						window.location = "index.php";</script>';