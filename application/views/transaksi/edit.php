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
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Transaksi</h6>
                </div>
					<?php echo form_open_multipart('c_obat/proses_edit/'.$transaksi->idTransaksi.'/'.$transaksi->kodeObat); ?>
	              		<div class="card-body">
						  	Kode Transaksi
		                  	<div class="form-group">
  			                	<input type="text" readonly class="form-control form-control-user" value="<?php echo($transaksi->idTransaksi); ?>">
  			                </div>
		                  	Kode Obat
		                  	<div class="form-group">
  			                	<input type="text" readonly class="form-control form-control-user" value="<?php echo($transaksi->kodeObat); ?>">
  			                </div>
							Apoteker
		                  	<div class="form-group">
  			                	<input type="text" readonly class="form-control form-control-user" value="<?php echo($transaksi->namaApoteker); ?>">
  			                </div>
							Jumlah Obat
							<div class="form-group">
  			                	<input type="text" name="sisaObat" id="sisa" class="form-control form-control-user" value="<?php echo($transaksi->sisaObat); ?>">
  			                </div>
							Jumlah Jual
							<div class="form-group">
  			                	<input type="text" name="jumlahJual" id="jual" class="form-control form-control-user" value="<?php echo($transaksi->jumlahJual); ?>">
  			                </div>
			                <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
		                </div>
	              	<?php echo form_close(); ?>
              </div>
        </div>
        <!-- /.container-fluid -->