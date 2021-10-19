<?php
require_once('koneksi.php');
if($_POST){
	try {
		$sql = "INSERT INTO tb_meeting (tanggal,judul_meeting,isi) VALUES ('".$_POST['tanggal_meeting']."','".$_POST['judul_meeting']."','".$_POST['isi_meeting']."')";
		if(!$koneksi->query($sql)){
			echo $koneksi->error;
			die();
		}

	} catch (Exception $e) {
		echo $e;
		die();
	}
	  echo "<script>
	alert('Data berhasil di simpan');
	window.location.href='index.php?page=crud/detail_meeting';
	</script>";
}
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<div class="row">
	<div class="col-lg-12">
		<form action="" method="POST">
<div>
			<div class="form-group col-lg-4">
				<label>Tanggal</label>
				<input type="date" value=""  class="form-control" name="tanggal_meeting">
			</div>
			<div class="form-group col-lg-8">
				<label>Tema/Perihal</label>
				<input type="text" value="" class="form-control" name="judul_meeting">
			</div>
			
			<div class="form-group col-lg-12">
				<label>Isi Rapat</label>
				<td><textarea class="ckeditor" id="ckedtor" name="isi_meeting"></textarea></td>

			
			</div>
			<input type="submit" class="btn btn-primary btn-sm pull-right" name="create" value="Simpan" style="margin-right:15px;">
		</div>
			
		</form>
	
	</div>
</div>


