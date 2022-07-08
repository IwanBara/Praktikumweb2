<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Detail Kategori Peserta</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/kategoripeserta")?>">Kategori peserta</a></li>
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
                  <h3 class="card-title">Detail Data Event <?php echo $peserta -> nama ?></h3>

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
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <img src="<?=base_url()?>uploads/photos/<?=$peserta->id?>.jpg" width="500"/>
                      <div class="mt-4">
                                    <?php echo form_open_multipart('kategoripeserta/upload');?>
                                    <input type="file" name="foto" size="300"/>
                                    <input type="hidden" name="idkategoripeserta" value="<?=$peserta->id?>"/><br>
                                    <br>
                                    <button type="submit" value="upload foto" class="btn btn-primary col start ">
                                      <i class="fas fa-upload"></i>
                                      <span>Start upload</span>
                                    </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <h3 class="text-center">
                      Event <?php echo $peserta -> nama ?>
                      </h3>
                      <p style="text-align: justify;">
                        <?php echo $peserta -> deskripsi ?>
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