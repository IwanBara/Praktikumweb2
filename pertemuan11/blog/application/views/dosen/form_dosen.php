<div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Form Input Dosen</h2>
    <?php echo form_open("dosen/save_dosen")?>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">nama</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki"> 
            <label for="gender_0" class="custom-control-label">Laki Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="perempuan"> 
            <label for="gender_1" class="custom-control-label">Perempuan</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
        <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukan Tanggal Lahir" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nidn" class="col-4 col-form-label">NIDN</label> 
        <div class="col-8">
        <input id="nidn" name="nidn" placeholder="Masukan NIDN" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="ipk" class="col-4 col-form-label">Pendidikan</label> 
        <div class="col-8">
        <input id="ipk" name="pendidikan" placeholder="Masukan Pendidikan terakhir" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <?php echo form_close()?>
</div>