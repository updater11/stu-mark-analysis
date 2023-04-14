<?php
//test detail client page
echo'<html>
<head>
<style>
h1{
font-face:algerian;
color:#C80A80;
text-align:center;
font-size:36;
}
p1{
color:red;
}
p{
font-face:Times new roman;
color:black;
text-align:left;
font-size:18;
}
 tr {
  padding:12px;
}
td {
  padding:12px;
}
.fname
{
width:100px;
}
.button1 {
background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 2px;
  cursor: pointer;
  background-color: white;
  color: black;
  border:2px solid #008CBA;
  margin: 0;
  position: absolute;
  top: 140%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.button1:hover {
  background-color: #008CBA;
  color: white;
}
</style>
 <script>
var tt;
function f1()
{
tt=document.getElementById("fn");
var v=tt.value;
document.getElementById("f").innerHTML=v;
}
</script>

</head>

<body>

<form name="insert" method="post" action="http://localhost/project22/m1p.php" enctype="multipart/form-data">
<img src="head.png" width="1330 px" height="150 px">
<h1><u>ADMIN MODULE</u></h1>

<table>
<tr>
<td><p><b>DEPARTMENT NO</b></td>
<td> <b> : </b></td>

<td><input type="text" id="d" name="d1" required></td>
</tr>

<tr>
<td><p><b>DEPARTMENT NAME</b></td>
<td> <b> : </b></td>

<td><input type="text" id="dn" name="dn1" required></td>
</tr>

<tr>
<td><p><b>FACULTY NAME</b></td>
<td> <b> : </b></td>

<td><input type="text" id="fn" name="fn1" required>

</td>
</tr>


<tr>
<td><p><b>SUBJECT CODE</b></td>
<td> <b> : </b></td>

<td><input type="text" id="sc" name="sc1" required>

</td>
</tr>

<tr>
<td><p><b>DATE:</b></td>
<td> <b> : </b> </td>
<td><input type="date" id="dt" name="dt1" required><p1>*Mandatory</p1> </td>
</tr>
<tr>
<td><p><b> YEAR</b></td>
<td> <b> : </b> </td>
<td><input type="text" id="y" name="y1" required>[EX : 2021-2022]<p1>*Mandatory</p1></td>
</tr>

<tr>
<td><p><b>R/SF</b></td>
<td> <b> : </b> </td>
<td><select id="ty" name="ty1" required>
<option value="Regular">Regular</option>
<option value="Self financed" >Self financed</option>
</select></td>
</tr>
<tr>
<td><p><b>CLASS:</b></td>
<td> <b> : </b> </td>
<td><textarea rows = "1" cols = "20" id="c" name = "c1" required></textarea><p1>*Mandatory</p1>
</td>
</tr>






<tr>
<td><p><b>Odd/Even sem</b></td>
<td> <b> : </b> </td>
<td><select id="oe" name="oe1" required>
<option value=not >NOT select</option>
<option value=odd >ODD</option>
<option value=even>EVEN</option>

</select></td>
</tr>





</table>
    <button class="button1" name="bu1">SUBMIT</button>
 </form>
</body>
</html>';
?>
