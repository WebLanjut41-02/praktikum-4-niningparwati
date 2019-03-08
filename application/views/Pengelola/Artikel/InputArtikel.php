<div class="content-wrapper">
	<section class="content-header">
		<h1>Form Input Artikel</h1>
		<small>U-Project</small>
	</section>
	
	<section class="content">
		<div class="row">
			<div class="col-md-8">
				
				<div class="box box-primary">
	            	<div class="box-header with-border">
	              		<h3 class="box-title">Input Artikel U-Project</h3>
	           		 </div>
	            <!-- /.box-header -->
	            <!-- form start -->
		            <form role="form" action="<?php echo base_url()?>Pengelola/C_Artikel/input" method="POST">

		              	<div class="box-body">

		                	<div class="form-group">
		                 		<label for="exampleInputId">Id Artikel</label>
		                  		<input type="text" class="form-control" id="exampleInputEmail1" name="id_artikel" placeholder="Id Artikel">
		                	</div>
		                
		                	<div class="form-group">
		                 		<label for="exampleInputJudul">Judul Artikel</label>
		                  		<input type="text" class="form-control" id="exampleInputPassword1" name="judul" placeholder="Judul Artikel">
		                	</div>
		                	
		                	<div class="form-group">
		                  		<label for="exampleInputTanggal">Tanggal Terbit Artikel</label>
		                  		<input type="date" class="form-control" id="exampleInputEmail1" name="tglterbit" placeholder="Tanggal Terbit Artikel">
		                	</div>
		                
		                	<div class="form-group">
		                  		<label for="exampleInputPengarang">Pengarang Artikel</label>
		                  		<input type="text" class="form-control" id="exampleInputPassword1" name="pengarang" placeholder="Pengarang Artikel">
		                		</div>
		                
		                	<div class="form-group">
		                 		<label for="exampleInputIsi">Isi Artikel</label>
		                  		<input type="text" class="form-control" id="exampleInputPassword1" name="isi" placeholder="Isi Artikel">
		                	</div>
		                		                
		                	<div class="checkbox">
		                  		<label>
		                    		<input type="checkbox"> Check me out
		                  		</label>
		                	</div>
		            	</div>
		              <!-- /.box-body -->

		              	<div class="box-footer">
		                	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		              	</div>
		            </form>
		         </div>

			</div>
		</div>
	</section>

</div>