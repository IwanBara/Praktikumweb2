<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kegiatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Kegiatan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Kegiatan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Tanggal daftar</th>
                            <th>Alasan</th>
                            <th>users_id</th>
                            <th>No sertifikat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $nomor = 1;
                        foreach ($daftar as $dft)  {
                        ?>
                        <tr>
                        <td><?php echo $nomor ?></td>
                            <td><?php echo $dft -> tanggal_daftar ?> </td>
                            <td><?php echo $dft -> alasan ?> </td>
                            <td><?php echo $dft -> users_id ?> </td>
                            <td><?php echo $dft -> nosertifikat ?> </td>
                            <td>
                            <a class="btn btn-outline-info btn-sm" href="<?php echo base_url("index.php/daftar/detail/$dft->id")?>">
                                  <i class="fas fa-info-circle fa-xl">
                                    </i>
                                    Detail
                                </a>
                                <a class="btn btn-outline-primary btn-sm" href="<?php echo base_url("index.php/daftar/edit/$dft->id")?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url("index.php/daftar/delete/$dft->id")?>"
                                onclick=" return hapus('Anda Yakin ingin menghapus Nomor<?php echo $nomor ?>?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                        </tr>
                        <?php
                        $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
</div>
