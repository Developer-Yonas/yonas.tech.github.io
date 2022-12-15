<?php 
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"contact_db");
if(!$conn){
    die('could not connect my sql:'.mysql_error());
}
$db = mysqli_connect('localhost', 'root', '', 'contact_db');