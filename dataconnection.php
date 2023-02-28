<?php
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"foney");//select database

mysqli_set_charset($connect, 'utf8');

if(!$connect)
{
	echo "Database connection faild...";
}
else
{

}
?>