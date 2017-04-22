<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
include ("DB.php") ;
if (isset($_POST ['Submit']))
{
	//set an empty array that will contains the error
	$error = array () ;
	//an email address pattern
	
	$Name = $_POST ['Name'] ;
	$IC = $_POST ['IC'] ;
	$Address = $_POST ['Address'] ;
	$Phone = $_POST ['Phone'] ;
	
//validation
if (isset ($Name) && isset ($IC) && isset ($Address) && isset ($Phone))
{
	if (count($error)<1)
	{
		//SQL syntax
		$query = "INSERT INTO student (name, ic, address, phone)
			      VALUES('$Name','$IC','$Address','$Phone')";
				  
		$result = mysqli_query ($link, $query) ;
	}
	else
	{
		echo implode ('<br/>', $error) ;
	}
}
else
    echo 'No data from form' ;
}
?>

<body>
<div align="center">
  <table width="494" border="0">
    <tr>
      <td width="101" height="27" bgcolor="#FFFFFF"><strong><font color="#0000FF">Name</font></strong></td>
      <td width="5" bgcolor="#FFFFFF"><strong><font color="#0000FF">:</font></strong></td>
      <td width="374" colspan="2"><input name="Name" type="text" id="Name" size="50" /></td>
    </tr>
    <tr>
      <td height="27" bgcolor="#FFFFFF"><strong><font color="#0000FF">IC No</font></strong></td>
      <td bgcolor="#FFFFFF"><strong><font color="#0000FF">:</font></strong></td>
      <td colspan="2"><input name="IC" type="text" id="IC" size="50"/></td>
    </tr>
    <tr>
      <td height="27" bgcolor="#FFFFFF"><strong><font color="#0000FF">Address</font></strong></td>
      <td bgcolor="#FFFFFF"><strong><font color="#0000FF">:</font></strong></td>
      <td colspan="2"><input name="Address" type="text" id="Address" size="50" /></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td height="27"><strong><font color="#0000FF">Phone</font></strong></td>
      <td><strong><font color="#0000FF">:</font></strong></td>
      <td colspan="2"><input name="Phone" type="text" id="Phone" size = "50"/></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
      <td height="55" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="Submit" id="Submit" value="Submit" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="Reset" id="Reset" value="Reset" /></td>
    </tr>
  </table>
</div>
</body>
</html>