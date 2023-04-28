<?php
    $value = $_POST['value'];
    $id = $_POST['id'];
    $field = $_POST['field'];
    $s15=$_POST['s15'];
    $s16=$_POST['s16'];
    $s17=$_POST['s17'];
    $s18=$_POST['s18'];
    $s19=$_POST['s19'];
    $s20=$_POST['s20'];
    $s21=$_POST['s21'];
    $s22=$_POST['s22'];
    $s23=$_POST['s23'];
    $s24=$_POST['s24'];
    $s25=$_POST['s25'];
    $s26=$_POST['s26'];
    $s27=$_POST['s27'];
    $s28=$_POST['s28'];
    $s29=$_POST['s29'];
    $s30=$_POST['s30'];
    $s31=$_POST['s31'];
    $name=$_POST['name'];



 
//подключаемся к бд
$host = "h213576362.mysql";
$username = "h213576362_mysql";
$pass = "oOm-sdq1";
$link = mysqli_connect($host, $username, $pass, "h213576362_db"); 


$query = "UPDATE mytable SET ".$field."='".$value."' WHERE id=".$id;
mysqli_query($link,$query);
?>