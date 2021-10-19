<?php
require_once('koneksi.php');
if($_POST){

	$sql = "UPDATE tb_meeting SET id_meeting='".$_POST['id_meeting']."', tanggal='".$_POST['tanggal']."', judul_meeting='".$_POST['judul_meeting']."', isi='".$_POST['isi_meeting']."' WHERE id_meeting=".$_POST['id_meeting'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di update');
	window.location.href='index.php?page=crud/data_rapat';
	
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}else{
	$query = $koneksi->query("SELECT * FROM tb_meeting WHERE id_meeting=".$_GET['id_meeting']);

	if($query->num_rows > 0){
		$data = mysqli_fetch_object($query);
	}else{
		echo "data tidak tersedia";
		die();
	}
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<div class="row">
	<div class="col-lg-12">
	<form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_meeting" value="<?= $data->id_meeting ?>">
			<div class="form-group col-lg-4">
				<label>Tanggal</label>
				<input type="date" value="<?= $data->tanggal?>"  class="form-control" name="tanggal">
			</div>
			<div class="form-group col-lg-8">
				<label>Tema/Perihal</label>
				<input type="text" value="<?= $data->judul_meeting?>" class="form-control" name="judul_meeting">
			</div>
			
			<div class="form-group col-lg-12">
				<label>Isi Rapat</label>
				<td><textarea name="isi_meeting" id="isi_meeting" ><?=$data->isi?></textarea>
			</td>
				
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="create" value="Simpan">
		</form> 
	</div>
</div>


<?php
}
mysqli_close($koneksi);
?>

<script type="text/javascript">
		CKEDITOR.replace('isi_meeting');
</script>