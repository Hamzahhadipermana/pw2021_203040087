<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/
?>
<?php 
$player = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan3b</title>
	<style>
		.tabel {
			border: 1px solid black;
			padding: 5px;
			text-align: left;
			font-family: arial;
			width: 50%;
			font-size: 12px;
		}
	</style>
</head>
<body>

<div class="tabel">
	<p><b>Daftar pemain bola terkenal</b></p>
	<table>
		<ol>
			<?php foreach( $player as $ply ) {
				echo "<li>$ply</li>";
			}
			?>
		</ol>	

<?php 
	array_push($player, "Luca Modric", "Sadio Mane");
	sort($player);
?>
	<p><b>Daftar pemain bola terkenal baru</b></p>
		<ol>
			<?php foreach( $player as $ply ) {
			echo "<li>$ply</li>";
			}
			?>
		</ol>
	</table>
</div>

</body>
</html>