<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanBuku()
	{
		include_once 'model/Buku.php';
		$brt = new berita ();
		$isi_berita = $brt->ambilBuku();
		include_once 'pages/beranda.php';
		$this->end();
	}
}


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
 ?>