<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Daftar Project
     <small>U-Project</small>
    </h1>

    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">U-Project</li>
      </ol>
    
  </section>

  <section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->

              <?php $dashboard = $this->session->daftar_project;

                foreach ($dashboard as $tampil) {
                
              ?>
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->

              <h3 class="widget-user-username"><?php echo $tampil->nama_project ?></h3>
              <h5 class="widget-user-desc">Lead Developer</h5>
            </div>
            <div class="box-footer no-padding">

              <ul class="nav nav-stacked">

                <li>
                  <a href="#">Dana Yang Dibutuhkan
                    <span class="pull-right badge bg-aqua">
                      <?php echo $tampil->dana_dibutuhkan ?>
                      </span>
                  </a>
                </li>

                <li>
                  <a href="#">Tanggal Jatuh Tempo
                    <span class="pull-right badge bg-green">
                      <?php echo $tampil->jatuh_tempo ?>
                    </span>
                  </a>
                </li>

                <li>
                  <a href="#">Detail Project
                    <span class="pull-right badge bg-red">
                      <?php echo $tampil->detail_project ?>
                    </span>
                  </a>
                </li>

              </ul>

            </div>

            <?php } ?>
        </div>
        <br>
    </section>
    
  </div>
  
</div>