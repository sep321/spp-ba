<?php
// Koneksi ke database (gunakan koneksi sesuai dengan konfigurasi Anda)
include 'koneksi.php';

// Ambil data dari tabel spp
$tahun = $_GET['tahun']; 
$data1 = "SELECT * FROM tb_spp, tb_siswa, tb_ta WHERE id_siswa=siswa_id AND id_ta=ta_id AND id_ta=taid AND ta_id='$tahun' AND taid='$tahun'";
$result = mysqli_query($koneksi, $data1);

// Buat file HTML
$filename = "laporan_spp.doc";
$header = "<html><head><title>Laporan SPP</title></head><body><h2>Laporan SPP Tahun $tahun</h2><table border='1'><tr><th>Tahun Ajaran</th><th>Nama Siswa</th><th>Tanggal Bayar</th><th>Bulan Bayar</th><th>Tahun Bayar</th><th>Jumlah Bayar</th><th>Metode Bayar</th><th>Status Bayar</th></tr>";

$file = fopen($filename, 'w');
fwrite($file, $header);

// Tulis data dari tabel spp ke file HTML
while ($row = mysqli_fetch_assoc($result)) {
	$tgl = $row['tgl_bayar'];
    $bln = $row['bulan_bayar'];

    if ($row['status_bayar'] == 1) {
    	$sts = "Sudah Bayar";
    }

    //tanggal
    setlocale(LC_TIME, 'id_ID');
    $tanggal = strftime('%d %B %Y', strtotime($tgl));

    //bulan
    setlocale(LC_TIME, 'id_ID');
    $bln_format = strftime('%B %Y', strtotime($bln));

    $line = "<tr><td>" . $row['ta'] . "</td><td>" . $row['nama_siswa'] . "</td><td>" . $tanggal . "</td><td>" . $bln_format . "</td><td>" . $row['tahun_bayar'] . "</td><td>" . "Rp. " .number_format($row['jumlah_bayar']). ",-" . "</td><td>" . $row['metode_bayar'] . "</td><td>" . $sts . "</td></tr>";
    fwrite($file, $line);
}

$footer = "</table></body></html>";
fwrite($file, $footer);
fclose($file);

// Mengarahkan pengguna untuk mengunduh file
header("Content-Type: application/html");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Length: " . filesize($filename));
readfile($filename);

// Hapus file setelah diunduh
unlink($filename);
?>