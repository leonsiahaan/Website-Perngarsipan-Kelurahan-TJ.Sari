<?php include '../konek.php';?>
<?php
    if(isset($_GET['id_request_sktm'])){
        $id=$_GET['id_request_sktm'];
        $sql = "SELECT * FROM data_request_sktm natural join data_pemohon WHERE id_request_sktm='$id'";
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
        $format5 = date('d F Y');
        $agama = $data['agama'];
        $jekel = $data['jekel'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $pekerjaan = $data['pekerjaan'];
        $request = $data['request'];
        $keperluan = $data['keperluan'];
        $sebab  = $data['sebab'];
        $acc = $data['acc'];
        $format4 = date('d F Y', strtotime($acc));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <table border="0" align="center">
        <tr>
        <td><img src="img/medan1.png" width="90" height="107" alt=""></td>
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
                                                    <font size="4">PEMERINTAHAN KOTA MEDAN</font><br>
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
                                                    <span>Nomor : 470 / <?php echo $id;?> / <?php echo $format1;?></span>
                                                </center>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                LURAH TANJUNG SARI, KECAMATAN MEDAN SELAYANG KOTA MEDAN dengan ini,<br> Menerangkan bahwa :
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>Nama Lengkap (yang diterangkan)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>Tempat, tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tempat.", ".$format2;?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $nik;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jekel;?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>Indonesia</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama;?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $pekerjaan;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat Keterangan ini diberikan kepadanya untuk menerangkan sesuai surat pernyataannya<br>tanggal<?php echo " ".$format3;?>, bahwa nama tersebut diatas adalah Warga <b><u><?php echo $request;?></u></b> karena<br><?php echo $sebab;?> .
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td></td>
            <td>
                "Surat Keterangan ini digunakan untuk <b><u><?php echo $keperluan;?></u></b>"<br>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian &nbsp;&nbsp;Surat &nbsp;Keterangan&nbsp;&nbsp; ini&nbsp; diperbuat&nbsp; untuk&nbsp;&nbsp; dapat&nbsp; dipergunakan&nbsp; sebagaimana <br>mestinya.
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <th width="100px"></th>
            <td>Dikeluarkan di &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: M e d a n</td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td></td>
            <td>Pada Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $format5;?><hr style="margin:0px" color="black"></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td></td>
            <td>KEPALA KELURAHAN TANJUNG SARI</td>
        </tr>
        <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
            <td></td>    
            <td>KECAMATAN MEDAN SELAYANG</td>
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
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
            <td>M.HUSNUL HAFIZ RAMBE,S.STP.MAP</td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td></td>
            <td>NIP.19851030 200412 1 002</td>
        </tr>
    </table>



    
</body>
</html>
        <script>
            window.print();
        </script>