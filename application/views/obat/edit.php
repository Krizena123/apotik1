<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Data</h1>

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Akun</h6>
                </div>
					<?php echo form_open_multipart('c_obat/proses_edit/'.$obat->kodeObat); ?>
	              		<div class="card-body">
		                  	Kode Obat
		                  	<div class="form-group">
  			                	<input type="text" readonly class="form-control form-control-user" value="<?php echo($obat->kodeObat); ?>">
  			                </div>
							Nama Obat
		                  	<div class="form-group">
  			                	<input type="text" name="namaObat" required class="form-control form-control-user" value="<?php echo($obat->namaObat); ?>">
  			                </div>
							Harga Obat
		                  	<div class="form-group">
  			                	<input type="number" name="hargaObat" required class="form-control form-control-user" value="<?php echo($obat->hargaObat); ?>">
  			                </div>
							Sisa Obat
		                  	<div class="form-group">
  			                	<input type="number" name="sisaObat" required class="form-control form-control-user" value="<?php echo($obat->sisaObat); ?>">
  			                </div>
							tanggalKadarluasa
							<div class="form-group">
  			                	<input type="date" name="tanggalKadarluasa" required class="form-control form-control-user" value="<?php echo($obat->tanggalKadarluasa); ?>">
  			                </div>
			                <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
		                </div>
	              	<?php echo form_close(); ?>
              </div>
        </div>
        <!-- /.container-fluid -->