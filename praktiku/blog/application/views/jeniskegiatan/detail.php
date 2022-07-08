<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Jenis Kegiatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/jeniskegiatan")?>">Jenis kegiatan</a></li>
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
                  <h3 class="card-title">Detail Data Event <?php echo $kegiatan -> nama ?></h3>
                </div>
                <div class="card-body">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="<?=base_url()?>uploads/photos/<?=$kegiatan->id?>.jpg" width="500"/>
                      <div class="mt-4">
                                    <?php echo form_open_multipart('jeniskegiatan/upload');?>
                                    <input type="file" name="foto" size="300"/>
                                    <input type="hidden" name="idjeniskegiatan" value="<?=$kegiatan->id?>"/><br>
                                    <br>
                                    <button type="submit" value="upload foto" class="btn btn-primary col start ">
                                      <i class="fas fa-upload"></i>
                                      <span>Start upload</span>
                                    </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="text-center">
                      Event <?php echo $kegiatan -> nama ?>
                      </h3>
                      <p style="text-align: justify;">
                        <?php echo $kegiatan -> deskripsi ?>
                      </p>
                    </div>
                  </div>
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