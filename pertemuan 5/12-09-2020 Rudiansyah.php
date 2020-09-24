<?php  ?>

<body>
	<table border ="1">
		<tr>
			<td>No</td>
			<td>Keterangan</td>
		</tr>
	<?php for ($i=1; $i <= 10 ; $i++) { ?> 
 
		<tr>
			<td><?= $i; ?></td>
			<td><?php 
					if ($i % 2 ==0) {
						echo "Genap";
					} else {
						echo "Ganjl";
					}
 			?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

