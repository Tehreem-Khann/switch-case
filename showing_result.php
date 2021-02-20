<!DOCTYPE html>
<html>
<head>
	<title>
		Task1
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
button{
	width: 100%;
	height: 300px;
}
</style>
	</head>
<body>
	<div class="container">
<?php
$userinput=$_POST['userinput'];
switch ($userinput) {
	     case 'pizza':
		echo "<button type='submit' class='btn btn-danger '><a  href='switchcase.php'  ><img src='images/menuheader.png' class='center'></a></button><hr><img src='images/pizza-header.png'>
		<img src='images/pizzamenu.jpg' style='width:100%;height:500px;'>";
		break;
		case 'salaad':
			echo "<button type='submit' class='btn btn-success '><a  href='switchcase.php'  ><img src='images/menuheader.png' class='center'></a></button><hr><img src='images/salaadheader.webp'style='width:100%;height:220px;'>";
		echo "<img src='images/salaad.png'style='width:100%;height:440px;'>";
		break;
		case 'drinks':
			echo "<button type='submit' class='btn btn-info '><a  href='switchcase.php'><img src='images/menuheader.png' class='center'></a></button><hr>";
		echo "<img src='images/drink-menu.jpg'style='width:100%;height:650px;'>";
		break;
	    
	default:
		echo"You enetered invalid input";
		break;
}
?>
	</div>
</body>
</html>
