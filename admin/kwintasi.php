<?php 
include 'koneksi.php';

$id = $_GET['nisn'];
$idspp = $_GET['idspp'];
$datas = mysqli_query($koneksi, "SELECT * FROM tb_spp, tb_siswa, tb_ta, tb_kelas WHERE id_siswa=siswa_id AND id_ta=ta_id AND id_ta=taid AND id_kelas=kelas AND id_siswa='$id' AND id_spp='$idspp'");
$rs = mysqli_fetch_assoc($datas);
$jumlah_bayar = $rs['jumlah_bayar'];
$tanggal = $rs['tgl_bayar'];
$bulan = $rs['bulan_bayar'];

function terbilang($angka) {
    $bilangan = array(
        '', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima',
        'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh',
        'Sebelas'
    );

    if ($angka < 12) {
        return $bilangan[$angka];
    } elseif ($angka < 20) {
        return $bilangan[$angka - 10] . ' Belas';
    } elseif ($angka < 100) {
        return $bilangan[floor($angka / 10)] . ' Puluh ' . $bilangan[$angka % 10];
    } elseif ($angka < 200) {
        return 'Seratus ' . terbilang($angka - 100);
    } elseif ($angka < 1000) {
        return terbilang(floor($angka / 100)) . ' Ratus ' . terbilang($angka % 100);
    } elseif ($angka < 2000) {
        return 'Seribu ' . terbilang($angka - 1000);
    } elseif ($angka < 1000000) {
        return terbilang(floor($angka / 1000)) . ' Ribu ' . terbilang($angka % 1000);
    }
}
$terbilang = terbilang($jumlah_bayar);

//tanggal
setlocale(LC_TIME, 'id_ID');
$format_tanggal = strftime('%d %B %Y', strtotime($tanggal));

//bulan
setlocale(LC_TIME, 'id_ID');
$bulan_format_indonesia = strftime('%B %Y', strtotime($bulan));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran SPP</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>KWITANSI PEMBAYARAN SPP</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="mb-0">NISN: <strong><?php echo $rs['nisn']; ?></strong></p>
                            <p class="mb-0">Nama: <strong><?php echo $rs['nama_siswa']; ?></strong></p>
                            <p class="mb-0">Kelas: <strong><?php echo $rs['nama_kelas']; ?></strong></p>
                            <p>T/A: <strong><?php echo $rs['ta']; ?></strong></p>
                        </div>
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Jumlah Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td><?php echo $bulan_format_indonesia; ?></td>
                                    <td><?php echo $rs['tahun_bayar']; ?></td>
                                    <td><?php echo $format_tanggal; ?></td>
                                    <td><?php echo "Rp. " .number_format($rs['jumlah_bayar']). ",-"; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <span style="font-size: 14px;"><em>Terbilang: <b><?php echo $terbilang; ?> Rupiah</b></em></span>
                    </div>
                    <div class="card-footer text-center">
                        <p>Total Pembayaran: <strong><?php echo "Rp. " .number_format($rs['jumlah_bayar']). ",-"; ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan link JavaScript Bootstrap (opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        window.print();
    </script>
    
</body>
</html>