<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              
              <div class="jumbotron text-center">
                    <div class="container">
                        <h1 class="display-4 ">Hello, 
                          <?php
                            if($this->session->has_userdata('USERNAME')){
                              echo $this->session->userdata('USERNAME');
                            }
                          ?>
                        <br><span class="font-weight-bold">EONS Event Organizer</span></h1>
                        <hr class="my-4">
                        <p>Kami, EONS, adalah jasa Event Planner Organizer secara Online dan Offline profesional yang siap menciptakan nuansa acara berkesan dan tentunya menjadi memori terbaik. Tim EO kami akan membantu Anda menemukan konsep terbaik untuk acara seminar, konser musik, bazaar, event olahraga dan event lain yang tidak akan terlupakan!</p>
                        <a href="<?php echo base_url("index.php/kegiatan/form")?>" class="btn btn-primary btn-lg"> Daftar Kegiatan</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
</div>
