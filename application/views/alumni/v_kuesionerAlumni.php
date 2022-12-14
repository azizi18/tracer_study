  <!-- head -->
  <!-- Side Navbar -->
  <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header" style="background-color: #119db59c">
      <div class="container-fluid">
        <h2 class="no-margin-bottom">Daftar Kuesioner</h2>
      </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Beranda</a></li>
        <li class="breadcrumb-item active"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Kuesioner</a></li>
      </ul>
    </div>

    <section class="tables">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header d-flex align-items-center">
                <h3 class="h4">Sistem Informasi</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kuesioner</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Pekerjaan</td>
                        <td>
                          <a type="button" class="btn btn-success btn-sm" href="<?php echo site_url('alumni/Kuesioner/isiKuesioner') ?>">Isi Data</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Melanjutkan Studi</td>
                        <td>
                          <button type="button" class="btn btn-secondary btn-sm">Sunting Data</button>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>Kompetensi</td>
                        <td>
                          <button type="button" class="btn btn-warning btn-sm">Lengkapi Data</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->
      </div>
    </section>


    </body>

    </html>