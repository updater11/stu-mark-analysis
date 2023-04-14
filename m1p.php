<?php
//test_details server page
$h="localhost";
$u="root";
$p='';
$db="project";

$con=mysqli_connect($h ,$u ,$p,$db);

if($con==false)
{
  die('not connected'.mysqli_error());
}
$dn=$_POST['d1'];
$dnm=$_POST['dn1'];
$fnm=$_POST['fn1'];
$subc=$_POST['sc1'];
$dt=$_POST['dt1'];
$yr=$_POST['y1'];
$ty=$_POST['ty1'];//  r/sf
$cls=$_POST['c1'];
$oe=$_POST['oe1'];
 $tno=$dn.$fnm.$subc.$yr.$oe.$ty.$cls;
 echo "========".$tno;
 
 session_start();
 $_SESSION["tt"] =$tno;
 $_SESSION["dp"] =$dnm;
 $_SESSION["sub"] =$subc;
 $_SESSION["class"] =$cls;


echo '</br>EMME SAYUING';
$i='insert into test_details(dno,dnm,fnm,sub_c,date,year,r_sf,cls,oe_sem,tno)values
('.'"'.$dn.'",'.'"'.$dnm.'",'.'"'.$fnm.'",'.'"'.$subc.'",'.'"'.$dt.'",'.'"'.$yr.'",'.'"'.$ty.'",'.'"'.$cls.'",'.'"'.$oe.'",'.'"'.$tno.'"'.')';



mysqli_query($con,$i);
include 'exh.php';
mysqli_close($con);

?>