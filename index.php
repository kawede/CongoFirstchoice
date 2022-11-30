<?php
$url='';
if(isset($_GET['url']))
{
  $url=explode('/', $_GET['url']);
}

if($url== '')
{
  require 'mains/home.php';
}
else if ($url[0]== 'about')
{
	require 'mains/about.php';
}
else if ($url[0]== 'contact')
{
	require 'mains/contact.php';
}
else if ($url[0]== 'accueil')
{
	require 'mains/home.php';
}
else if ($url[0]== 'newmember')
{
	require 'mains/newmember.php';
}
else if($url[0]=='programme'){
	require 'mains/programme.php';
}
else if($url[0]=='emploi'){
	require 'mains/emploi.php';
}
else if($url[0]=='formation'){
	require 'mains/formation.php';
}
else
{
  require 'mains/404.php';
}
