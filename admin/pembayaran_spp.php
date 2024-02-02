<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION["login_type"])) {
    echo '<script language="javascript" type="text/javascript">
        alert("Anda Tidak Berhak Memasuki Halaman Ini.!");</script>';
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>"; // Redirect ke halaman login jika tidak ada sesi
    exit();
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title><?php echo $title; ?></title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/logo1.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!--<img
                  src="../assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />-->
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="assets/images/spp.jpeg" width="170px"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <span class="d-none d-md-block"
                    >Create New <i class="fa fa-angle-down"></i
                  ></span>
                  <span class="d-block d-md-none"
                    ><i class="fa fa-plus"></i
                  ></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="mdi mdi-magnify fs-4"></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-bell font-24"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Messages -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="font-24 mdi mdi-comment-processing"></i>
                </a>
                <ul
                  class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                  aria-labelledby="2"
                >
                  <ul class="list-style-none">
                    <li>
                      <div class="">
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-calendar text-white fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Event today</h5>
                              <span class="mail-desc"
                                >Just a reminder that event</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-settings fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Settings</h5>
                              <span class="mail-desc"
                                >You can customize this template</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-account fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Pavan kumar</h5>
                              <span class="mail-desc"
                                >Just see the my admin!</span
                              >
                            </div>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="javascript:void(0)" class="link border-top">
                          <div class="d-flex no-block align-items-center p-10">
                            <span
                              class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                              ><i class="mdi mdi-link fs-4"></i
                            ></span>
                            <div class="ms-2">
                              <h5 class="mb-0">Luanch Admin</h5>
                              <span class="mail-desc"
                                >Just see the my new admin!</span
                              >
                            </div>
                          </div>
                        </a>
                      </div>
                    </li>
                  </ul>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                    Setting</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-success btn-rounded text-white"
                      >View Profile</a
                    >
                  </div>
                </ul>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <?php include 'menu.php'; ?>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Tabel Pembayaran SPP</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Tabel Pembayaran SPP
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Filter Nis Siswa</h5>
                </div>
                <div class="container">
                  <form method="GET">
                    <div class="row">
                      <div class="col-md-6">
                        <!-- Input NISN Siswa -->
                        <div class="form-group">
                          <label for="nisn">NISN Siswa</label>
                          <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" id="nisn" name="nisn">
                            <option selected disabled>Pilih Nis Siswa</option>
                            <?php 
                            $datas = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
                            while ($rs = mysqli_fetch_assoc($datas)){
                            ?>
                            <option value="<?php echo $rs['id_siswa']; ?>"><?php echo $rs['nisn']; ?> <?php echo $rs['nama_siswa']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- Input Tahun Ajaran -->
                        <div class="form-group">
                          <label for="tahunAjaran">Tahun Ajaran</label>
                          <select class="select2 form-select shadow-none" style="width: 100%; height: 36px" id="ta" name="ta">
                            <option selected disabled>Pilih Tahun Ajaran</option>
                            <?php 
                            $dataa = mysqli_query($koneksi, "SELECT * FROM tb_ta");
                            while ($ra = mysqli_fetch_assoc($dataa)){
                            ?>
                            <option value="<?php echo $ra['id_ta']; ?>"><?php echo $ra['ta']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </form>
                </div>
                <br>
              </div>

              <?php 
              if (isset($_GET['nisn']) && isset($_GET['ta'])) {
                $id_siswa = $_GET["nisn"];
                $ta = $_GET['ta'];
              ?>
              <?php
              // Query untuk mendapatkan informasi pembayaran terakhir
              $query = "SELECT siswa.nama_siswa, spp.bulan_bayar, spp.tgl_bayar, tahun_ajaran.ta
                        FROM tb_spp spp
                        JOIN tb_siswa siswa ON spp.siswa_id = siswa.id_siswa
                        JOIN tb_ta tahun_ajaran ON spp.taid = tahun_ajaran.id_ta
                        WHERE siswa.id_siswa = $id_siswa
                        ORDER BY spp.tgl_bayar DESC
                        LIMIT 1";

              $result = mysqli_query($koneksi, $query);

              if ($result && mysqli_num_rows($result) > 0) {
                  $data = mysqli_fetch_assoc($result);
                  $nama_siswa = $data['nama_siswa'];
                  $bulan_spp = $data['bulan_bayar'];
                  $tanggal_spp = $data['tgl_bayar'];
                  $tahun_ajaran = $data['ta'];

                  //tanggal
                  setlocale(LC_TIME, 'id_ID');
                  $tanggal_spp = strftime('%d %B %Y', strtotime($tanggal_spp));

                  //bulan
                  setlocale(LC_TIME, 'id_ID');
                  $bulan_spp = strftime('%B %Y', strtotime($bulan_spp));

                  // Tampilkan pesan alert
                  echo '<div class="alert alert-success" role="alert">';
                  echo "<center>";
                  echo "<b>Halo, $nama_siswa! Anda terakhir membayar SPP pada bulan $bulan_spp, tanggal $tanggal_spp dengan tahun ajaran $tahun_ajaran.</b>";
                  echo "</center>";
                  echo '</div>';
              } else {
                  echo '<div class="alert alert-danger" role="alert">';
                  echo "<center>";
                  echo "<b>Halo, Anda belum melakukan pembayaran SPP</b>";
                  echo "</center>";
                  echo '</div>';
              }
              ?>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Tagihan SPP Siswa</h5>
                </div>
                <div class="table-responsive">
                  <table id="zero_config1" class="table table-striped table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Tahun Ajaran</th>
                        <th scope="col">Bulan Tagihan</th>
                        <th scope="col">Tahun Tagihan</th>
                        <th scope="col">Jumlah Tagihan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="customtable">
                      <?php 
                      $dt = mysqli_query($koneksi, "SELECT * FROM tb_tagihan, tb_siswa, tb_ta WHERE id_ta=idta AND id_ta=ta_id AND id_siswa='$id_siswa' AND ta_id='$ta' AND idta='$ta'");
                      while ($rt = mysqli_fetch_assoc($dt)) {
                        $idt = $rt['id_tagihan'];
                        $bulan = $rt['bulan_tagihan'];

                        //bulan
                        setlocale(LC_TIME, 'id_ID');
                        $bulan_format = strftime('%B %Y', strtotime($bulan));

                        $detail = mysqli_query($koneksi, "SELECT * FROM detail_tagihan WHERE idsiswa='$id_siswa' AND idtahun='$ta' AND idtagihan='$idt'");
                        $rd = mysqli_fetch_assoc($detail);
                        $tagihan = $rd['status_tagihan'] ?? null;
                      ?>
                      <tr>
                        <td><?php echo $rt['nama_siswa']; ?></td>
                        <td><?php echo $rt['ta']; ?></td>
                        <td><?php echo $bulan_format; ?></td>
                        <td><?php echo $rt['tahun_tagihan']; ?></td>
                        <td><?php echo "Rp. " .number_format($rt['jumlah_tagihan']). ",-"; ?></td>
                        <td>
                          <?php if ($tagihan == "") { ?>
                            <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal" data-bs-target="#bayarModal<?php echo $rt['id_tagihan']; ?>"><i class="mdi mdi-credit-card"></i> Bayar SPP</a>
                          <?php }elseif ($tagihan == "Lunas") { ?>
                            <span class="badge bg-success">Sudah Lunas</span>
                          <?php } ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <br>
                </div>
              </div>

              <?php 
              $dt = mysqli_query($koneksi, "SELECT * FROM tb_tagihan, tb_siswa, tb_ta WHERE id_ta=idta AND id_ta=ta_id AND id_siswa='$id_siswa' AND ta_id='$ta' AND idta='$ta'");
              while ($rdt = mysqli_fetch_assoc($dt)){
              ?>
              <div class="modal fade" id="bayarModal<?php echo $rdt['id_tagihan']; ?>">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Pembayaran SPP Siswa</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="proses_bayar.php">
                      <input type="hidden" name="idt" value="<?php echo $rdt['id_tagihan']; ?>">
                      <input type="hidden" name="ids" value="<?php echo $rdt['id_siswa']; ?>">
                      <input type="hidden" name="tahunA" value="<?php echo $rdt['id_ta']; ?>">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="namaSiswa" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="namaSiswa" value="<?php echo $rdt['nama_siswa']; ?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label for="tanggalBayar" class="form-label">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tanggalBayar" name="tglbayar" required>
                          </div>
                          <div class="mb-3">
                            <label for="bulanBayar" class="form-label">Bulan Bayar</label>
                            <input type="month" class="form-control" id="bulanBayar" name="bulan" value="<?php echo $rdt['bulan_tagihan']; ?>" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="tahunBayar" class="form-label">Tahun Bayar</label>
                            <input type="text" class="form-control" id="tahunBayar" name="tahun" value="<?php echo $rdt['tahun_tagihan']; ?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label for="jumlahBayar" class="form-label">Jumlah Bayar</label>
                            <input type="text" class="form-control" id="jumlahBayar" name="jumlah" value="<?php echo $rdt['jumlah_tagihan']; ?>" readonly>
                          </div>
                          <div class="mb-3">
                            <label for="metodeBayar" class="form-label">Metode Bayar</label>
                            <select class="form-select" id="metode" name="metode" required>
                              <option selected disabled>Pilih Metode Bayar</option>
                              <option value="Tunai">Tunai</option>
                              <option value="Kredit">Kredit</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Pembayaran SPP</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama Siswa</th>
                          <th>Tahun Ajaran</th>
                          <th>Tgl. Bayar</th>
                          <th>Bulan Bayar</th>
                          <th>Tahun Bayar</th>
                          <th>Jumlah Bayar</th>
                          <th>Metode Bayar</th>
                          <th>Status Bayar</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=1; 
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_spp, tb_siswa, tb_ta WHERE id_siswa=siswa_id AND id_ta=ta_id AND id_ta=taid AND id_siswa='$id_siswa' AND ta_id='$ta' AND taid='$ta'");
                        while ($row = mysqli_fetch_assoc($data)) {
                          $status = $row['status_bayar'];
                          $tgl = $row['tgl_bayar'];
                          $bln = $row['bulan_bayar'];

                          //tanggal
                          setlocale(LC_TIME, 'id_ID');
                          $tanggal = strftime('%d %B %Y', strtotime($tgl));

                          //bulan
                          setlocale(LC_TIME, 'id_ID');
                          $bln_format = strftime('%B %Y', strtotime($bln));
                        ?>
                        <tr>
                          <td><?php echo $no++; ?>.</td>
                          <td><?php echo $row['nama_siswa']; ?></td>
                          <td><?php echo $row['ta']; ?></td>
                          <td><?php echo $tanggal; ?></td>
                          <td><?php echo $bln_format; ?></td>
                          <td><?php echo $row['tahun_bayar']; ?></td>
                          <td><?php echo "Rp. " .number_format($row['jumlah_bayar']). ",-"; ?></td>
                          <td><?php echo $row['metode_bayar']; ?></td>
                          <td>
                            <?php if ($status == 1) { ?>
                              <span class="badge bg-success">Sudah Bayar</span>
                            <?php } ?>
                          </td>
                          <td>
                            <a class="btn btn-sm btn-danger" href="kwintasi.php?nisn=<?php echo $id_siswa; ?>&idspp=<?php echo $row['id_spp']; ?>" target="_blank"><i class="mdi mdi-printer"></i></a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <?php }else{ ?>
                <center>
                  <div class="alert alert-primary" role="alert">
                    Silakan Select Nisn Siswa
                  </div>
                </center>
              <?php } ?>

            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>

    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config1").DataTable();
    </script>

    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
</html>
