<?php
//helps the facluty to visit  test details 
//test details client page

 echo'<html>
<title>log in</title>
	 
	 
<style>
    /*set border to the form*/
     body{
	  background-color:#f1f1f1;
	 }
	 h3{
	text-align:center;
	color:gray;
	 font: 15px Arial, sans-serif;
	}
	
	 button {
        background-color: #006DB0;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    /* set a hover effect for the button*/
     
    button:hover {
        opacity: 0.7;
    }
	
	</style>
 
<body>
<form name="lee" method="post" action="http://localhost/project22/viewp.php" enctype="multipart/form-data">

<h3><b>Login Form</b></h3>
<table>
<tr>
<td>
    
</td></tr>

    
 <tr><td> 
 <tr><td> 		
            <label><b>Test NO</b></label>
            <input type="text" placeholder="Enter Test NO" name="tn" required>
</td></tr> 
<tr><td> 
 <button type="submit">Submit</button>
 </td></tr> 
  </form>
 </table>
</body>
 
</html>';
?>