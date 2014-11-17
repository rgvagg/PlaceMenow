<?php
//create db connection
$dbhost ="localhost";
$dbuser="rgv";
$dbpass="abc";
$dbname="rgv"; 
$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
die("db connection failed". mysqli_connect_error(). mysqli_connect_errno());
}
#else { echo "success";}
?>




<?php
//perform query
$query="Select * from subjects ";
$query .= "where visible=1 ";
$query .= "order by position desc ";

//$query= 
//test query errors only not the empty output
$result=mysqli_query($connection, $query);
if(!$result)
{
die("db query failed");}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>db conn</title>
</head>

<body>
<?php 

//use returned data
while($row=mysqli_fetch_row($result))
{
var_dump($row);
echo "<hr/>";
}
?>
<ul>
<?php 
//use returned data
while($subject=mysqli_fetch_assoc($result)){
?>
<li><?php echo $subject["id"]."<br />"; ?></li>
<li><?php echo $subject["menu_name"]."<br />"; ?></li>
<li><?php echo $subject["position"]."<br />"; ?></li>
<li><?php echo $subject["visible"]."<br />"; ?></li>
</ul>

<?php 
$menu_name="abc";
$position=5;
$visible=1;
$query="insert into subjects (menu_name, position, visible) values( ";
$query.="'{$menu_name}', {$position}, {$visible}) ";
$result= mysqli_query($connection, $query);
if($result)
{
//success
//redirect_to(somepage.php);
echo "success<br />";
}
else
{
die("db query failed. " . mysqli_error($connection));

}

?>



<?php //var_dump($row);
echo "<hr/>";
}
//use returned data
while($row=mysqli_fetch_array($result))
{
var_dump($row);
echo "<hr/>";
}
?>

<?php
//release resources
 mysqli_free_result($result); ?> 
</body>
</html>

<?php
//close connection
mysqli_close($connection);
?>