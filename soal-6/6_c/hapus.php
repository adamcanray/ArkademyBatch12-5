<?php
//menghubungkan ke halaman function
require 'functions.php';

//menangkap data yang dikirim lewat url
//danmenyimpannya ke dalam variable $id
$id = $_GET["id"];
// tangkap name
// $name = $_GET["name"];

if (hapus($id) > 0) {
	//menampilkan alert jika berhasil
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php';
			// redirect ke index.php
		</script>
		";
} else {
	//menampilkanalert jika berhasil
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'index.php?';
			//redirect ke index.php
		</script>
		";
}
