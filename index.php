<?php
	if (isset($_POST['tombol'])) {
		$a = $_POST['angka1'];
		$b = $_POST['angka2'];
		$c = $_POST['operator'];
		
		switch ($c) {
			case 'tambah':
				$hasil = $a + $b;
			break;
			case 'kurang':
				$hasil = $a - $b;
			break;
			case 'kali':
				$hasil = $a * $b;
			break;
			case 'bagi':
				$hasil = $a / $b;
			break;
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UKK - Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="kotak">
		<center><b>	<br>KALKULATOR</b></center>
		<div class="hasil">
			<?php
				if(isset($_POST['tombol'])){
					echo $hasil;
				}else{
					echo "0";
				}
			?>
		</div>
		<div class="inputan">
			<form method="POST" action="index.php">
				<input type="number" name="angka1" class="angka" placeholder="Angka 1">
				<input type="number" name="angka2" class="angka" placeholder="Angka 2">
				<select name="operator" class="operator">
					<option value="tambah">-- Pilih Operator --</option>
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">x</option>
					<option value="bagi">:</option>
				</select>
				<input type="submit" name="tombol" value="HITUNG" class="tombol"> <br><br>
			</form>
		</div>
	</div>
</body>
</html>