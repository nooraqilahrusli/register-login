<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  

include ("DB.php");

$query = ("SELECT * FROM register");
$result = mysqli_query ($link, $query) or die ("Select error". mysqli_error ($link));
$i = 1;
while ($row = mysqli_fetch_array ($result)){
?>

<p>ID:
  <input type="text" name="ID" value="<?php echo $row ['ID']; ?>">
</p>
<p>Username:
  <input type="text" name="username" value="<?php echo $row ['username']; ?>">
</p>
<p>Password:
  <input type="text" name="password" value="<?php echo $row ['password']; ?>">
</p>
<p>
  <?php
	$i++;
	}
	mysqli_close ($link);
	?>
</p>
</body>
</html>