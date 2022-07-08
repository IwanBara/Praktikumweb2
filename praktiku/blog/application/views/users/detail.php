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
                <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/users/index")?>">Users</a></li>
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
                  <h3 class="card-title">detail Users</h3>

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
                        <tr><th>Id</th><td>: <?php echo $users ->id ?></td></tr>
                        <tr><th>Username</th><td>: <?php echo $users -> username ?> </td></tr>
                        <tr><th>Password</th><td>: <?php echo $users -> password ?> </td></tr>
                        <tr><th>Email</th><td>: <?php echo $users -> email ?> </td></tr>
                        <tr><th>Created at</th><td>: <?php echo $users -> created_at ?> </td></tr>
                        <tr><th>Last_login</th><td>: <?php echo $users -> last_login ?> </td></tr>
                        <tr><th>Role</th><td>: <?php echo $users -> role ?> </td></tr>
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