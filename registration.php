<?php 

session_start();
header('location:login.php');

$con = mysqli_connect('localhost', 'root')
if($con){
	echo"connect succesful";
}else{
	echo"no connect";
}

$name = $_post['user'];
$pass = $_post['password'];

$q = "select * from sigin where name = '$name' && password = '#pass'";

$ressult = mysqli_query($con,$q);

$num = mysqli_num_rows($ressult);


if ($num ==1){
	echo "duplicate data";
}
else{
	$qy= " insert into signin(name, password) values ('$name' , '$pass')";
    mysqli_query($con, $qy);

}



 ?>