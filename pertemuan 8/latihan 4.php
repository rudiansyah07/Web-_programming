<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	function form($label, $type, $name) {
		?>
		<label for=""><?= $label; ?></label>
		<input type="<?= $type ?>" name="<?= $name; ?>">
		<br>
		<?php  
		return $name;
	}
	form('Nama Lengkap', 'text', 'Nama_Lengkap');
	form('Nomor Telepon', 'number', 'Nomor Telepon');
	form('E-mail', 'email', 'E-mail');
	?>

</body>
</html>