<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tambah Kegiatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/kegiatan")?>">kegiatan</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                  <h3 class="card-title">Tambah Data</h3>

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
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <?php echo form_open("kegiatan/save") ?>
                  <div class="form-group row">
                    <label for="judul" class="col-4 col-form-label">judul</label> 
                    <div class="col-8">
                      <input id="judul" name="judul" placeholder="Masukkan judul" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kapasitas" class="col-4 col-form-label">kapasitas</label> 
                    <div class="col-8">
                      <input id="kapasitas" name="kapasitas" placeholder="Masukkan kapasitas" type="number" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_tiket" class="col-4 col-form-label">harga_tiket</label> 
                    <div class="col-8">
                      <input id="harga_tiket" name="harga_tiket" placeholder="Masukkan harga_tiket" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">tanggal</label> 
                    <div class="col-8">
                      <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal" type="date" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="narasumber" class="col-4 col-form-label">narasumber</label> 
                    <div class="col-8">
                      <input id="narasumber" name="narasumber" placeholder="Masukkan narasumber" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat" class="col-4 col-form-label">tempat</label> 
                    <div class="col-8">
                      <input id="tempat" name="tempat" placeholder="Masukkan tempat" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pic" class="col-4 col-form-label">pic</label> 
                    <div class="col-8">
                      <input id="pic" name="pic" placeholder="Masukkan pic" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_id" class="col-4 col-form-label">jenis_id</label> 
                    <div class="col-8">
                      <select id="jenis_id" name="jenis_id" class="form-control">
                        <?php
                          include "config.php";
                          $result = mysqli_query($connect, "SELECT * FROM jeniskegiatan");
                          while ($row = mysqli_fetch_array($result)) 
                        { ?>
                          <option value="<?php echo $row[0]?>">
                        <?php echo $row[1]?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                <?php echo form_close() ?>

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