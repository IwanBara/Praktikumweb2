<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Daftar</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/daftar/index")?>">Daftar</a></li>
                <li class="breadcrumb-item active">Detail</li>
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
                  <h3 class="card-title">Detail Daftar</h3>

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
                <table class="table">
                    <tbody>
                      <tr><th>Id</th><td>: <?php echo $daftar -> id ?></td></tr>
                      <tr><th>Tanggal daftar</th><td>: <?php echo $daftar -> tanggal_daftar ?> </td></tr>
                      <tr><th>Alasan</th><td>: <?php echo $daftar -> alasan ?> </td></tr>
                      <tr><th>users_id</th><td>: <?php echo $daftar -> users_id ?> </td></tr>
                      <tr><th>Kegiatan_id</th><td>: <?php echo $daftar -> kegiatan_id ?> </td></tr>
                      <tr><th>Kategori peserta id</th><td>: <?php echo $daftar -> kategori_peserta_id ?> </td></tr>
                      <tr><th>No sertifikat</th><td>: <?php echo $daftar -> nosertifikat ?> </td></tr>
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