<?php
require_once('koneksi.php');

$query = "SELECT * FROM tb_meeting";
$urlcrud = "index.php?page=crud/";
?>

<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div class="row">
	<div class="col-lg-12">
	
		<a href="<?= $urlcrud.'create_rapat' ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<table  id="example1" class="table table-bordered table-striped" style="margin-top: 10px">
			<tr class="success">
				<th width="50px">No</th>
				<th>Tanggal</th>
				<th>Perihal/Tema</th>
				<th>Isi</th>
				<th style="text-align: center;">Aksi</th>
			</tr>
			<?php
			if($data=mysqli_query($koneksi,$query)){
				$a=1;
				while($obj=mysqli_fetch_object($data)){
					?>
					<tr>
						<td><?= $a ?></td>
						<?php echo "<td><a href='#'>$obj->tanggal</a></td>"; ?>

                
						<td><?= $obj->judul_meeting ?></td>
						<td><?=  substr(strip_tags($obj->isi), 0, 10) , strlen(strip_tags($obj->isi))>10?'.....':""?></td>

						
						<td style="text-align: center;">
						<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= $urlcrud.'hapus&id_meeting='.$obj->id_meeting?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="<?= $urlcrud.'edit_data&id_meeting='.$obj->id_meeting ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
						
						</td>
					</tr>
					<?php
					$a++;
				}
				mysqli_free_result($data);
			}
			?>
		</table>
	</div>
</div>


<script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>

<?php
mysqli_close($koneksi);
?>
