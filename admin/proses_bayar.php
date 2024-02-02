<?php
// Lakukan koneksi ke database di sini
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idt = $_POST['idt'];
    $ids = $_POST['ids'];
    $tahun = $_POST['tahunA'];
    $tanggal_bayar = $_POST['tglbayar'];
    $bulan_bayar = $_POST['bulan'];
    $tahun_bayar = $_POST['tahun'];
    $jumlah_bayar = $_POST['jumlah'];
    $metode_bayar = $_POST['metode'];

    // Lakukan validasi data jika diperlukan

    // Simpan data pembayaran ke tabel pembayaran
    $query_pembayaran = "INSERT INTO tb_spp (siswa_id, taid, tgl_bayar, bulan_bayar, tahun_bayar, jumlah_bayar, metode_bayar, status_bayar) 
                        VALUES ('$ids', '$tahun', '$tanggal_bayar', '$bulan_bayar', '$tahun_bayar', '$jumlah_bayar', '$metode_bayar', '1')";

    $result_pembayaran = mysqli_query($koneksi, $query_pembayaran);

    if ($result_pembayaran) {
        // Jika penyimpanan data pembayaran berhasil, sekarang kita akan menyimpan detail tagihan
        $query_detail_tagihan = "INSERT INTO detail_tagihan (idsiswa, idtagihan, idtahun, status_tagihan) 
                                VALUES ('$ids', '$idt', '$tahun', 'Lunas')";

        $result_detail_tagihan = mysqli_query($koneksi, $query_detail_tagihan);

        if ($result_detail_tagihan) {
            echo '<script language="javascript" type="text/javascript">
                alert("Pembayaran berhasil disimpan.");</script>';
            echo "<meta http-equiv='refresh' content='0; url=pembayaran_spp.php?nisn=$ids&ta=$tahun'>";
        } else {
            echo "Terjadi kesalahan saat menyimpan detail tagihan. Silakan coba lagi.";
        }
    } else {
        echo "Terjadi kesalahan saat menyimpan pembayaran. Silakan coba lagi.";
    }
}
?>