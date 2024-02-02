        <?php if ($_SESSION['peran'] == 'admin') { ?>
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="kelas.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account"></i
                  ><span class="hide-menu">Kelas</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="tahunA.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-school"></i
                  ><span class="hide-menu">Tahun Ajaran</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="siswa.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-school"></i
                  ><span class="hide-menu">Siswa</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="tagihan.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-numeric-1-box"></i
                  ><span class="hide-menu">Tagihan SPP</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pembayaran_spp.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-credit-card"></i
                  ><span class="hide-menu">Pembayaran SPP</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="user.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Pengguna </span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-file-pdf"></i
                  ><span class="hide-menu">Laporan </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="lap_pembayaran.php" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu"> Laporan Pembayaran </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="keluar.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout"></i
                  ><span class="hide-menu">keluar</span></a
                >
              </li>
            </ul>
          </nav>
        <?php }elseif ($_SESSION['peran'] == 'pemegang uang') { ?>
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="tagihan.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-numeric-1-box"></i
                  ><span class="hide-menu">Tagihan SPP</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="pembayaran_spp.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-credit-card"></i
                  ><span class="hide-menu">Pembayaran SPP</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="keluar.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-logout"></i
                  ><span class="hide-menu">keluar</span></a
                >
              </li>
            </ul>
          </nav>
          <?php } ?>