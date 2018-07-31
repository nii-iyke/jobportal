<?php

include_once('../config.php');
$email=$_POST['email'];
$password=$_POST['pass1'];
$hash = password_hash($password, PASSWORD_DEFAULT);
$name=$_POST['compname'];
$type=$_POST['comtype'];
//echo $type;
$industry=$_POST['indtype'];
//echo $industry;
$addr=$_POST['addr'];
//$pin=$_POST['pin_code'];
$person=$_POST['person'];
$phone=$_POST['phone'];
//$countryid=$_POST['country'];
$cityid=$_POST['city'];
$abtcomp=$_POST['compdetails'];

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

$query1="INSERT INTO login (email,password,usertype,status) VALUES ('$email','$hash','employer',0)";
    $result1 = mysqli_query($db1,$query1) or die("Can't Register , The user email may be already existing");
$query2 =  "INSERT INTO employer (log_id,ename,phone,location,etype,address,executive,industry,profile)
                VALUES ((SELECT log_id FROM login WHERE email='$email'),'$name','$phone','$cityid','$type','$addr','$person','$industry','$abtcomp')";

 //$result2 = mysqli_query($db1,$query2);
if (!mysqli_query($db1,$query2))
{
    echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:../login.php?msg=registered');
}
?>