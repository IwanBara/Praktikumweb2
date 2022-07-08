<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>MVC - Web Framework</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/kegiatan/index")?>">Kegiatan</a></li>
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
                  <h3 class="card-title">Kegiatan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body row mb-2">
                  <div class="col-sm-5">
                      <img src="<?=base_url()?>uploads/photos/<?=$kegiatan->id?>.jpg" width="420"/>
                        <div class="mt-4">
                                    <?php echo form_open_multipart('kegiatan/upload');?>
                                    <input type="file" name="foto" size="300"/>
                                    <input type="hidden" name="idkegiatan" value="<?=$kegiatan->id?>"/><br>
                                    <br>
                                    <button type="submit" value="upload foto" class="btn btn-primary col start ">
                                      <i class="fas fa-upload"></i>
                                      <span>Start upload</span>
                                    </button>
                        </div>
                  </div>
                  <div class="col-sm-7">
                    <table class="table">
                        <tbody>
                            <tr></tr><th>Id</th><td>: <?php echo $kegiatan -> id ?></td></tr>
                            <tr><th>Judul</th><td>: <?php echo $kegiatan -> judul ?> </td></tr>
                            <tr><th>Kapasitas</th><td>: <?php echo $kegiatan -> kapasitas ?> </td></tr>
                            <tr><th>Harga tiket</th><td>: <?php echo $kegiatan -> harga_tiket ?> </td></tr>
                            <tr><th>Tanggal</th><td>: <?php echo $kegiatan -> tanggal ?> </td></tr>
                            <tr><th>Narasumber</th><td>: <?php echo $kegiatan -> narasumber ?> </td></tr>
                            <tr><th>Tempat</th><td>: <?php echo $kegiatan -> tempat ?> </td></tr>
                            <tr><th>Pic</th><td>: <?php echo $kegiatan -> pic ?> </td></tr>
                            <tr><th>jenis_id</th><td>: <?php echo $kegiatan -> jenis_id ?> </td></tr>
                        </tbody>
                    </table>
                  </div>
                  
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