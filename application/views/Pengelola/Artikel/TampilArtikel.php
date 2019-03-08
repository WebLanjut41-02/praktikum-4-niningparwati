<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Data Artikel</h3>
        </div>

        <div class="box-header">
          <a class="btn btn-info" href="<?php echo site_url('Pengelola/C_Artikel/index') ?>" role="button"><span class="glyphicon glyphicon-plus"> TAMBAH ARTIKEL</span></a>
        </div>

        <div>
          <form action="<?php echo base_url('Pengelola/C_Artikel/search')?>" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="cari" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
        </div>

        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th><center>Id Artikel</center></th>
                <th><center>Judul Artikel</center></th>
                <th><center>Tanggal Terbit</center></th>
                <th><center>Pengarang</center></th>
                <th><center>Isi</center></th>
                <th><center>Aksi</center></th>
              </tr>
            </thead>

            <tbody>
              <?php 

                $artikel = $this->session->daftar_artikel;

                if (count($artikel) > 0) {

                foreach ($artikel as $data) {

               ?>

              <tr>
               <td><?php echo $data->id_artikel ?></td>
                <td><?php echo $data->judul_artikel ?></td>
                <td><?php echo $data->tgl_terbit ?></td>
                <td><?php echo $data->pengarang ?></td>
                <td><?php echo $data->isi ?></td>
                <td>
                  
                  
                    <a href="<?php echo site_url() ?>/Pengelola/C_Artikel/editArtikel?ID_Artikel=<?php echo $data->id_artikel ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                  
                 
                    <a href="<?php echo base_url()?>/Pengelola/C_Artikel/hapusArtikel?ID_Artikel=<?php echo $data->id_artikel ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>
              </tr>
              <?php 
              } 
            }
              else
              {
                echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
              }

             ?>
            </tbody>

          </table>
        </div>

      </div>

    </section>





    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->