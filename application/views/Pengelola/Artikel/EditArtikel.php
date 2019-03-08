<div class="content-wrapper">
  
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        
        <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Artikel U-Project</h3>
                 </div>
              <!-- /.box-header -->
              <!-- form start -->
                <form role="form" action="<?php echo base_url()?>Pengelola/C_Artikel/prosesEdit" method="POST">

                    <div class="box-body">

                      <div class="form-group">
                        <label for="exampleInputId">Id Artikel</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="id_artikel" placeholder="Id Artikel" value="<?php echo $dataArtikel[0]->id_artikel ?>">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputJudul">Judul Artikel</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="judul" placeholder="Judul Artikel" value="<?php echo $dataArtikel[0]->judul_artikel ?>">
                      </div>
                      
                      <div class="form-group">
                          <label for="exampleInputTanggal">Tanggal Terbit Artikel</label>
                          <input type="date" class="form-control" id="exampleInputEmail1" name="tglterbit" placeholder="Tanggal Terbit Artikel" value="<?php echo $dataArtikel[0]->tgl_terbit ?>" >
                      </div>
                    
                      <div class="form-group">
                          <label for="exampleInputPengarang">Pengarang Artikel</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="pengarang" placeholder="Pengarang Artikel" value="<?php echo $dataArtikel[0]->pengarang ?>">
                        </div>
                    
                      <div class="form-group">
                        <label for="exampleInputIsi">Isi Artikel</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="isi" placeholder="Isi Artikel" value="<?php echo $dataArtikel[0]->isi ?>">
                      </div>

                  </div>
                  <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Update Artikel</button>
                    </div>
                </form>
             </div>

      </div>
    </div>
  </section>

</div>