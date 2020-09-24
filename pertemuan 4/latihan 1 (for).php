<?php 
for ($i=0; $i < 7 ; $i++) { 
 	echo "perulangan ke - " .$i."<br>";
 } 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>\
 	<select >
 	<?php
 	for ($i=1; $i < 32; $i++) { 
 		echo "<option> $i </option>";
 	 } 

 	 ?>	 
	</select>
	<select>
		<?php 
		$x = 12;
		while ($x >= 1) {
			echo "<option> $x </option>";
			$x--;
		}
		 ?>
	</select>
	<select>
		
		
	</select>

 </body>
 </html>