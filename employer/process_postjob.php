<?php

include_once('../config.php');
session_start();
$eid=$_SESSION['eid'];
$desig=$_POST['desig'];
$vacno=$_POST['vacno'];
$desc=$_POST['jobdesc'];
$exp=$_POST['exp'];
$money=$_POST['money'];
$salary=$_POST['pay'];
$cityid=$_POST['city'];
//$fnarea=$_POST['fnarea'];
//$countryid=$_POST['country'];
//$stateid=$_POST['state'];
$indtype=$_POST['indtype'];
$ug=$_POST['ugcourse'];
//$pg=$_POST['pgcourse'];
$profile=$_POST['profile'];
$date=date('d-m-y');
$pay=$money." ".$salary;
//mysqli_select_db($db2,"location");
//$query1=mysqli_query($db2,"select name from countries WHERE id = '$countryid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query1);
//$country= $row['name'];

//$query2=mysqli_query($db2,"select name from states WHERE id = '$stateid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query2);
//$state= $row['name'];
//echo $state;

//$query3=mysqli_query($db2,"select name from cities WHERE id = '$cityid'")  or die("Wrong Query");
//$row = mysqli_fetch_assoc($query3);
//$city= $row['name'];

//$location=$country.",".$state.",".$city;
//mysqli_close($db2); 
mysqli_select_db($db1,"jobportal");

$query1="insert into jobs (eid,title,jobdesc,vacno,experience,basicpay,location,industry,ugqual,profile,postdate )VALUES ('$eid','$desig','$desc','$vacno','$exp','$pay','$cityid','$indtype','$ug','$profile','$date')";

if (!mysqli_query($db1,$query1))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:profile.php?msg=jobposted');
}
?>