<?php
header('Content-Type: application/json');
include "koneksi.php";
ini_set('display_errors', '0');

/* $res = $_GET['res'];

echo json_encode($res); */


$sql = "SELECT * FROM kategori";
$hasil = mysqli_query($mysqli, $sql);
//$results = array();


foreach($hasil as $row){
	
			$results[] = array(
					'ID'=> $row[ID_KATEGORI],
					'NAMA_KATEGORI' => $row[NAMA_KATEGORI],
					'STATUS' => $row[STATUS],

			);
			
	
}

//var_dump($results);

 $json = json_encode($results);
 //$json = json_encode("teasasdads");

echo $json; 



?>