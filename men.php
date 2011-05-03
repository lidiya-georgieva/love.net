<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
   <title>Love.net</title>
   <link rel="stylesheet" href="love.css"/>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
   <style type="text/css">
      .select
		 {
		     margin-top:20px;
			 height:20px;
			 width:100px;
		 }
   </style>
   </head>
   <body>
    <div class="container">
	<div class="date"><?php include("date.php")?></div>	
	<?php 
	include "connect.php";
	if(isset($_SESSION['is_logged']))
	  {
		echo'<div class="Welcome">
		     Добре дошъл, '.$_SESSION['name'].'!</div>
			<form name="logout" method="post" action="logout.php">
			 <input type="image" src="logout_but.jpg" class="logout_button"/>
			</form>';
	 }
    else
	 {
	 include("login_form.php"); 
	 } 
	?>
			  <ul class="navbar">
			   <li><a href="index.php" class="A" style="background-image:url('home_but.jpg');padding-right:70px;"></a></li>
			   <li><a href="women.php" class="A" style="background-image:url('women_but.jpg');padding-right:130px;"></a></li>
			   <li><a href="men.php" class="A" style="background-image:url('men_but.jpg');padding-right:90px;"></a></li>
			   <li><a href="links.php" class="A" style="background-image:url('friends_but.jpg');padding-right:125px;"></a></li>
			   <li><a href="about.php" class="A" style="background-image:url('about_but.jpg');padding-right:125px"></a></li>
			 </ul>
	 <div class="conclusion" style="background-image:url('men.jpg')">
	 <form name="input" action="men_search_html.php" method="get" >
	           <span> Заплата </span>
			   <select class="select" name="salary" style="margin-top:80px;margin-left:120px;">
				  <option value="salary1">300-800</option>
				  <option value="salary2" selected="selected">800-1500</option>
				  <option value="salary3">1500 и нагоре</option>
				</select><br/>
				<span> Кола </span>
				 <select class="select" name="car" style="margin-left:140px;">
				  <option value="bmv">BMV</option>
				  <option value="Toyota" selected="selected">Toyota</option>
				  <option value="Mercedes">Mercedes</option>
				  <option value="Peugeot">Peugeot</option>
				</select><br/>
				<span> Вила/Яхта на морето </span>
				<select class="select" name="villa" style="margin-left:25px;">
				  <option value="yes">Да</option>
				  <option value="no" >Не</option>
				</select><br/>
				<span>Височина</span>
				<select class="select" name="height" style="margin-left:107px;">	
				  <option value="short">167-175</option>
				  <option value="medium" selected="selected">176-180</option>
				  <option value="mediumH">180-185</option>
				  <option value="tall">186 и нагоре</option>
				</select><br/>
				<span>Килограми</span>
				<select class="select" name="kg" style="margin-left:97px;">	
				  <option value="thin">55-65</option>
				  <option value="medium" selected="selected">66-77</option>
				  <option value="mediumF">78-90</option>
				  <option value="fat">90 и нагоре</option>
				</select><br/>
			 <input type="image" src="search_button.jpg" class="submit_button"/>
	  </form>
	 </div>
	 </div>
	</div>
   </body>
</html>