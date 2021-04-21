<?php
/*
Hamzah Hadi Permana
203040087
SHIFT Kamis 08:00 - 09:00
*/

?>

<?php 
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$otomotif = query("SELECT * FROM otomotif")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Otomotif</title>
</head>
<body>
<div class="container">
    <?php foreach ($otomotif as $om) : ?>
      <p class="nama">
        <a href="php/detail.php?id=<?= $om['id'] ?>">
            <?= $om["nama"] ?>
        </a>
      </p>
      <?php endforeach; ?>
  </div>
</body>
</html>