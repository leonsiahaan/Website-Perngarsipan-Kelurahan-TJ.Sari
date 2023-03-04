<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>  
<?php
if(isset($_GET['id_request_sktm'])){
    $id=$_GET['id_request_sktm'];
	$tampil_nik = "SELECT * FROM data_request_sktm NATURAL JOIN data_pemohon WHERE id_request_sktm=$id";
	$query = mysqli_query($konek,$tampil_nik);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_sktm'];
	$nik = $data['nik'];
    $nama = $data['nama'];
    $ktp = $data['scan_ktp'];
    $kk = $data['scan_kk'];
    $pbb = $data['scan_pbb'];
    $keperluan = $data['keperluan'];
    $sebab = $data['sebab'];		
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH REQUEST SKTM</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>NIK</label>
													<input type="text" name="keterangan" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
												<!-- <div class="form-group">
													<label>Tanggal Request</label>
													<input type="date" name="tgl" class="form-control" value="<?= $s2;?>" readonly>
												</div> -->
												<!-- <div class="form-group">
													<label>Tanggal Request</label>
													<input type="date" name="tgl" class="form-control" value=<?= $date;?> required>
												</div> -->
												<div class="form-group">
													<label>Keperluan (*cth : persyaratan beasiswa)</label>
													<input type="text" name="keperluan" class="form-control" placeholder="Ceritakan keperluan anda.." autofocus>
												</div>
												<div class="form-group">
													<label>Penyebab (*cth : berpenghasilan rendah dibawah Rp. 1.000.000)</label>
													<input type="text" name="sebab" class="form-control" placeholder="Certakan penyebabnya.." autofocus>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">	
                                                <div class="form-group">
													<label>Scan KTP</label><br>
                                                    <img src="../dataFoto/sktm/scan_ktp/<?= $ktp;?>" width="200" height="100" alt="">
    
												</div>	
												<div class="form-group">
													<input type="file" name="ktp" class="form-control" size="37">
												</div>
												<div class="form-group">
													<label>Scan KK</label><br>
													<img src="../dataFoto/sktm/scan_kk/<?= $kk;?>" width="200" height="100" alt="">
                                                <div class="form-group">
													<input type="file" name="kk" class="form-control" size="37">
												</div>													
												</div>
												<div class="form-group">
													<label>Scan PBB</label><br>
													<img src="../dataFoto/sktm/scan_pbb/<?= $pbb;?>" width="200" height="100" alt="">
												</div>
                                                <div class="form-group">
													<input type="file" name="pbb" class="form-control" size="37">
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success">Ubah</button>
									<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>

<?php
if(isset($_POST['ubah'])){
	$keperluan = $_POST['keperluan'];
	$mt_rand = mt_rand(1000,9999);
	echo $mt_rand;
	$sebab = $_POST['sebab'];
		$nama_ktp = isset($_FILES['ktp']);
		$file_ktp =  $_POST['keterangan']."_"."$mt_rand"."_ubah"."sktm".".jpg";
		$nama_kk = isset($_FILES['kk']);
    	$file_kk = $_POST['keterangan']."_"."$mt_rand"."_ubah"."sktm".".jpg";
    	$nama_pbb = isset($_FILES['pbb']);
    	$file_pbb = $_POST['keterangan']."_"."$mt_rand"."_ubah"."sktm".".jpg";
    $sql = "UPDATE data_request_sktm SET
    keperluan='$keperluan',
    sebab='$sebab',
    scan_ktp='$file_ktp',
    scan_kk='$file_kk' ,
    scan_pbb='$file_pbb' WHERE id_request_sktm=$id";
	$query = mysqli_query($konek,$sql);

	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/sktm/scan_ktp/".$file_ktp);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/sktm/scan_kk/".$file_kk);
		copy($_FILES['pbb']['tmp_name'],"../dataFoto/sktm/scan_pbb/".$file_pbb);
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_sktm">';
	  }
}
	
?>