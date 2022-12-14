        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #119db59c">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
       
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Pengguna Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Pengguna</th>
                              <th>Divisi</th>
                              <th>Instansi</th>
                              <th>Email</th>
                              <th>Telepon</th>
                              <th>Daftar Alumni</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                              foreach($pengguna as $d){ 
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->pengguna_nama ?></td>
                              <td><?php echo $d->divisi ?></td>
                              <td>
                                <?php if ($d->id_instansi == '0' || $d->id_instansi == Null) {
                                echo "Non Instansi";
                                } else {echo $this->m_master->getInstansiByID($d->id_instansi)->nama_instansi;
                                } ?>
                              </td>
                              <td><?php echo $d->pengguna_email ?></td>
                              <td><?php echo $d->pengguna_telepon ?></td>
                              <td>
                                 <a type="button" href="<?php echo site_url('koorprodi/Pengguna/daftarAlumni/'.$d->id) ?>" class="btn btn-info btn-sm">Lihat</a>
                              </td>
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


<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );
</script>