<?php 


$koneksi = mysqli_connect('localhost', 'root', 'root', 'db_lautanikan');

function query($query)
{
	global $koneksi;

	$result = mysqli_query($koneksi, $query);
	$fishes = [];
	while ($fish = mysqli_fetch_assoc($result)) {
	    $fishes[] = $fish;    
	}

	return $fishes;
}

