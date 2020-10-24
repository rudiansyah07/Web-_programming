<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title></title>
 </head>
 <body>
	<form action="uts.php" method="POST">
		usia <input type="text" name="usia"> <br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
 </body>
 </html>

 <?php 

if (isset($_POST['submit'])) {
	$usia = $_POST['usia'];
}
if ($usia > 0) {
	$status = "Balita";
}
if ($usia > 6) {
	$status = "Anak-Anak";
}
if ($usia > 17) {
	$status = "Dewasa";
}

if ($usia > 50) {
	$status = "Tua";
}
echo "Status : ".$status. "<br>";


 ?>

