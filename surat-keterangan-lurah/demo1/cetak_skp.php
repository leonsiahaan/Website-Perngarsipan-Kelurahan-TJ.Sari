<?php include '../konek.php';?>
<?php
	if(isset($_GET['id_request_skp'])){
		$id=$_GET['id_request_skp'];
		$sql = "SELECT * FROM data_request_skp natural join data_pemohon WHERE id_request_skp='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
		$agama = $data['agama'];
		$jekel = $data['jekel'];
		$alamat = $data['alamat'];
		$pekerjaan = $data['pekerjaan'];
        $request = $data['request'];
        $acc = $data['acc'];
        $instansi = $data['instansi'];
        $jabatan = $data['jabatan'];
        $lama = $data['lama'];
        $keperluan = $data['keperluan'];
        $sampai = $data['sampai_tanggal'];
        $format4 = date('d F Y', strtotime($acc));
        $sampai_tanggal = date('d F Y', strtotime($sampai));
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SKP</title>
</head>
<body>

    <table border="0" align="center">
        <tr>
        <td><img src="img/medan1.png" width="70" height="87" alt=""></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
            <td>
                <center>
                    <font size="4">PEMERINTAH KOTA MEDAN</font><br>
                    <font size="4">KECAMATAN MEDAN SELAYANG</font><br>
                    <font size="5"><b>KELURAHAN TANJUNG SARI</b></font><br>
                    <font size="2"><i>Sekretariat : Jl.Setiabudi Psr -1 No.4 Medan</i></font><br>
                </center>
            </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td colspan="45"><hr color="black"></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center>
                    <font size="4"><b>SURAT KETERANGAN <?php echo $request;?></b></font><br>
                    <hr style="margin:0px" color="black">
                    <span>Nomor : <?php echo $id;?> / Ds. Wergu Wetan / <?php echo $format1;?></span>
                </center>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Desa Wergu Wetan Kabupaten Kota <br> Kudus, Menerangkan bahwa :
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tempat.", ".$format2;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jekel;?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama;?></td>
        </tr>
        <tr>
            <td>No. NIK</td>
            <td>:</td>
            <td><?php echo $nik;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Instansi</td>
            <td>:</td>
            <td><?php echo $instansi;?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan;?></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama surat ini bermaksud permohonan izin untuk tidak masuk kerja selama <?php echo $lama;?></b><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hari,  mulai hari ini tanggal <b><u><?=$format3?></u></b> sampai tanggal <b><u><?php echo $sampai_tanggal;?></u></b> karena <b><u><?php echo $keperluan;?>.</u></b>
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <th></th>
            <th width="100px"></th>
            <th>Kudus, <?php echo $format4;?></th>
        </tr>
        <tr>
            <td>Tanda tangan <br> Yang bersangkutan </td>
            <td></td>
            <td>Lurah Tanjung Sari</td>
        </tr>
        <tr>
            <td rowspan="15"></td>
            <td></td>
            <td rowspan="15"></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr>
        <tr>
            <td><b style="text-transform:uppercase"><u>(<?php echo $nama;?>)</u></b></td>
            <td></td>
            <td><b><u>(AGUS SUPRIYANTO)</u></b></td>
        </tr>
    </table>



    
</body>
</html>
        <script>
            window.print();
        </script>