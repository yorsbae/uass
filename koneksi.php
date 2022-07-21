<?php
$host= "localhost";
$user_name= "root";
$password= "";
$db_name="uas";
$con=new mysqli($host,$user_name,$password,$db_name);
if($con->connect_error){
    die("Koneksi gagal: ".$con->connect_error);
}
?>