<html>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type="text" name="fname"> <input type="submit">
	</form>

	<?php 
if (array_key_exists('fname', $_REQUEST)) {
$name = $_REQUEST['fname']; 
echo $name; 
echo '<br /> GET ';
var_dump($_GET);
echo '<br /> POST ';
var_dump($_POST);
}
else {
var_dump($_REQUEST);
echo '<br /> GET ';
var_dump($_GET);
echo '<br /> POST ';
var_dump($_POST);
}
?>

</body>
</html>
