<?php include 'db.php';?>

<?php 

$query = "SELECT * FROM shoutsit";
$shout = mysqli_query($con,$query)

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
	<header>
		<h1>SHOUT IT! shoutbox</h1>
	</header>
	<div id="shouts">
		<ul>

			<?php while($row = mysqli_fetch_assoc($shout)) : ?>
				<li class="shout"><span><?php echo $row['tim']?> -</span><strong><?php echo $row['user']?></strong>: <?php echo $row['message'];?></li>
			<?php endwhile;?>

		</ul>
	</div>

	<div id="input">
	<?php if(isset($_GET['error'])) : ?>
	<div class="error"><?php echo $_GET['error'];?></div>
	<?php endif ;?>
		<form action="process.php" method="post">
			<input type="text" name="user" placeholder="Enter Your User Name">
			<input type="text" name="Messasge" placeholder="Enter Your Massage">
			<br>
			<input class="shout" type="submit" name="submit" value="shout it out">
		</form>
	</div>
	</div>
</body>
</html>