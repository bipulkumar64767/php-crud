<?php 

// $hostname = 'sql112.infinityfree.com';
// $username = 'if0_35583589';
// $password = 'wDVYlKdR0Hfx';
// $dbname = 'if0_35583589_basicphp';

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'basicphp';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if($config)
{
	echo "Connection Successful";
}
else
{
	echo "Connection Failed with Error: ".mysqli_connect_error();
}




?>