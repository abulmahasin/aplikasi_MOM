<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM tb_meeting WHERE id_meeting=".$_GET['id_meeting'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=crud/detail_meeting';
	</script>";
?>