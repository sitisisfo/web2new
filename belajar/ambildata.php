 <?php 
$host = "localhost";
$dbname = "siti_sisfonews";
$username = "root";
$password = "satu";
$db = "";

try {
      $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
      die("Connection error: ".$exception->getMessage());
}
 


$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll(); ?>

<?php

foreach ($data as $ib) { 
	?>


	<h1><?php echo $ib['judul'] ?></h1>
	<p><?php echo $ib['isi'] ?></p>
<?php


}


?>

<h1> Ini Judul Berita <?php echo $ib ['id_berita']?></h1>
<P> Ini Isi Berita <?php echo $ib[''] ?> sebanyak <?php echo $ib[''] ?> buah di tambah dengan<?php echo $ib[''] ?></p>
 }
 ?>