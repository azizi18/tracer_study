        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #119db59c">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <!-- <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url('alumni/Pengguna') ?>"><i class="fas fa-chevron-left"></i> Pengguna  Alumni</a></li>
            </ul>
          </div> -->
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Alumni yang Bekerja pada <?php echo $this->m_master->getInstansiByID($id_instansi)->nama_instansi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Posisi</th>
                              <th>Gaji</th>
                              <th>Periode Kerja</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                            foreach($pekerjaan as $a) { ?>
                          <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $this->m_alumni->getAlumniByID($a->id_alumni)->nama ?></td>
                              <td><?php echo $a->posisi ?></td>
                              <td>Rp <?php echo number_format($a->gaji,0,",",",") ?></td>
                              <td><?php echo $a->periode_kerja ?></td>
                              <td><?php echo $this->m_alumni->getAlumniByID($a->id_alumni)->email ?></td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>
