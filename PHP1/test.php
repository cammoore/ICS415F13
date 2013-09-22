<html>
<head>
<title>PHP Test</title>
</head>
<body>
	<!-- <?php phpinfo(); ?> -->
	<?php
	echo $_SERVER['HTTP_USER_AGENT'];
	echo '<br/>';
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		?>
	<h3>strpos() pust have returned non-false</h3>
	<p>You are using Internet Explorer.</p>
	<?php }
	else { ?>
	<h3>strpos() must have returned false</h3>
	<p>You are not using Internet Explorer.</p>
	<?php }
	echo strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE');
	$x="Hello";
	$x=null;
	var_dump($x);
	?>
	<?php
$x = array("a" => "red", "b" => "green"); 
echo '<br />$x = ';
var_dump($x);
$y = array("c" => "blue", "d" => "yellow"); 
echo '<br />$y = ';
var_dump($y);
$z = $x + $y; // union of $x and $y
echo '<br />$z = $x + $y = ';
var_dump($z);
echo '<br /> $x == $y ';
var_dump($x == $y);
echo '<br /> $x === $y ';
var_dump($x === $y);
echo '<br />$x != $y ';
var_dump($x != $y);
echo '<br />$x <> $y ';
var_dump($x <> $y);
echo '<br />$x !== $y ';
var_dump($x !== $y);

echo $x['a'];
?>

<?php
function familyName($fname)
{
echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
	
	<?php echo '<p>Hello World</p>'; ?>
	<form action="action.php" method="post">
		<p>
			Your name: <input type="text" name="name" />
		</p>
		<p>
			Your age: <input type="text" name="age" />
		</p>
		<p>
			<input type="submit" />
		</p>
	</form>
</body>
</html>
