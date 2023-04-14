<?php
//helps the facluty to visit test details server page
$tno=$_POST['tn'];
$h="localhost";
$u="root";
$p='';
$db="project";

$con=mysqli_connect($h ,$u ,$p,$db);

if($con==false)
{
  die('not connected'.mysqli_error());
}
echo 'connected';

$s= "SELECT * FROM test_details where tno=".'"'.$tno.'"';


$result = mysqli_query($con, $s);
$n=mysqli_num_rows($result);
echo '<table border="5" bgcolor="powderblue" width="80%" align="center">
<tr><th>     details</th></tr><tr><th></th></tr>';
while($row= mysqli_fetch_array($result))
{
echo '<tr><td>Test no</<td><td>'.$row[0].
 '</td><tr><br><tr><td>department no</<td><td>'.$row[1].
 '</td></tr><br><tr><td>department name</<td><td>'. $row[2]. 
 '</td></tr><br><tr><td>name</<td><td>'. $row[3].
 '</td></tr><br><tr><td>date</<td><td>'.$row[4].
 '</td></tr><br><tr><td>year</<td><td>'. $row[5]. 
'</td></tr><br><tr><td>type</<td><td>'.  $row[6].
 '</td></tr><br><tr><td>pgm</<td><td>'.$row[7]. 
   '</td></tr><br><tr><td>class</<td><td>'.  $row[8]. 
  '</td></tr><br><tr><td>oe_sem</<td><td>'.$row[9].
  '</td></tr><br><tr><td>test</<td><td>'.$row[10];
}

echo '</table>';


$qi=mysqli_query($con,$s);
echo '<br><br><br>sucessfully';
mysqli_close($con);
?>