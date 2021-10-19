<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- Google Font -->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<?php
require_once('koneksi.php');
$urlcrud = "index.php?page=crud/";
if($_POST){

	$sql = "UPDATE tb_meeting SET id_meeting='".$_POST['id_meeting']."', isi='".$_POST['isi_meeting']."' WHERE id_meeting=".$_POST['id_meeting'];

	if ($koneksi->query($sql) === TRUE) {
	    echo "<script>
	alert('Data berhasil di simpan');
	    window.location.href='index.php?page=crud/editan&id_meeting=".$_POST['id_meeting']."';
	</script>";
	} else {
	    echo "Gagal: " . $koneksi->error;
	}

	$koneksi->close();
	
}

else{
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
		
            <div class="col-md-3">
                <a href="<?= $urlcrud.'create_rapat' ?>" class="btn btn-primary btn-block margin-bottom">Tambah Data</a>
                    <div class="box box-solid">
                        <div class="box-header with-border">
                        <!-- proses cari data  -->
                     
      
                        </div>
                    <div class="box-body no-padding">
      
           

                <?php

              $mysqli = new mysqli('localhost', 'root', '', 'meeting_bpg');
              // ambil menu utama
              $res = $mysqli->query("SELECT * from tb_meeting group by tanggal");
              while($menu = $res->fetch_array(MYSQLI_ASSOC)){
                // tampilkan sub menu judul
                $res2 = $mysqli->query("SELECT * from tb_meeting where tanggal='$menu[tanggal]'");
                $num = $res2->num_rows;
                  echo "
                  
                  <ul class='sidebar-menu' data-widget='tree'>
                  <li class='treeview'>

                      <li>
                        <a href='#' style='font-weight:bold;color:black' ><i class='fa fa-calendar'></i><span>$menu[tanggal]</span>
                        </a>
                      </li>

                   </li>
                   </ul>";

                  while($sub = $res2->fetch_array(MYSQLI_ASSOC)){
                    // foreach ($sub as $res2 => $value) {
                     
                    
                    echo "	
                    <ul>

                    <a href=".$urlcrud.'editan&id_meeting='.$sub['id_meeting']." id='menu_judul' name='menu_judul'><i class='fa fa-list'> $sub[judul_meeting]</i></a>
                    <a href=".$urlcrud.'hapus&id_meeting='.$sub['id_meeting']."><span class='glyphicon glyphicon-trash pull-right' style='color:red;margin-right:10px'></span></a>
                 

                    </ul>";
                            
                  }
              }
                $res->free_result();           
              ?>        
            </div>
          </div>
             
     </div>
			


			<div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?=$data->judul_meeting?></h3>
                    </div>
                    <div class="box-body">
                        <tr>
                            <td><textarea name="isi_meeting" id="isi_meeting" ><?=$data->isi?></textarea></td>
                        </tr>
                        <input type="submit" class="btn btn-primary btn-sm pull-right" name="create" value="Simpan" style="margin-top:10px">
                    </div>
                </div>
            </div>
			
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

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<!-- <script src="plugins/iCheck/icheck.min.js"></script> -->
