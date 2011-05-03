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
	   span
		 {
		    font-weight:bold;
			margin-left:30px; 
		 }
   </style>
   </head>
   <body>
    <div class="container" >
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
	 <div class="conclusion" style="background-image:url('women.jpg')">
	
	 
	  <form name="input" action="women_search_html.php" method="get" >
	           <span> Гръдна обиколка </span>
			   <select class="select" name="bust" style="margin-top:80px;margin-left:30px;">
				  <option value="size1">84-92</option>
				  <option value="size2" selected="selected">93-108</option>
				  <option value="size3">109 и нагоре</option>
				</select><br/>
				<span> Цвят на коса </span>
				 <select class="select" name="hair" style="margin-left:60px;">
				  <option value="brown">кестенява</option>
				  <option value="blond" selected="selected">руса</option>
				  <option value="red">червена</option>
				  <option value="black">черна</option>
				</select><br/>
				<span>Цвят на очи</span>
				<select class="select" name="eyes" style="margin-left:65px;">
				  <option value="brown">кафяви</option>
				  <option value="blue" selected="selected">сини</option>
				  <option value="green">зелени</option>
				  <option value="colourful">пърсти</option>
				</select><br/>
				<span>Височина</span>
				<select class="select" name="height" style="margin-left:84px;">	
				  <option value="short">160-167</option>
				  <option value="medium" selected="selected">168-175</option>
				  <option value="mediumH">176-184</option>
				  <option value="tall">185-190</option>
				</select><br/>
				<span>Килограми</span>
				<select class="select" name="kg" style="margin-left:73px;">	
				  <option value="thin">45-55</option>
				  <option value="medium" selected="selected">56-66</option>
				  <option value="mediumF">67-77</option>
				  <option value="fat">78 и нагоре</option>
				</select><br/>
			 <input type="image" src="search_button.jpg" class="submit_button"/>
	  </form>
	 </div>
	 </div>
   </body>
</html>