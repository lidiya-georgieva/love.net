<?php
  session_start();
  $resource=mysql_connect("localhost","root","lida900128") or die("Could not connect".mysql_error());
  mysql_query('set names utf8', $resource);
  mysql_select_db("love.net",$resource) or die("Could not find database".mysql_error());
?> 