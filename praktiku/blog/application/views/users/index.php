<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Users</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Users</li>
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
                  <h3 class="card-title">Data Users</h3>

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
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $nomor = 1;
                        foreach ($users as $use) {
                        ?>
                        <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $use -> username ?> </td>
                            <td><?php echo $use -> password ?> </td>
                            <td><?php echo $use -> email ?> </td>
                            <td><?php echo $use -> role ?> </td>
                            <td>
                              <a class="btn btn-outline-info btn-sm" href="<?php echo base_url("index.php/users/detail/$use->id")?>">
                                  <i class="fas fa-info-circle fa-xl">
                                    </i>
                                    Detail
                              </a>
                              <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url("index.php/users/delete/$use->id")?>"
                              onclick=" return hapus('Anda Yakin ingin menghapus <?php echo $use -> username ?>?')">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>

                            </td>
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