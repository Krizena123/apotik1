<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tambah Data Obat</h1>

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah</h6>
                </div>
	                <?php echo form_open_multipart('c_obat/tambahobat/'); ?>
	              		<div class="card-body">
						  	Kode Obat  
							<div class="form-group">
			                  <input type="text" class="form-control form-control-user" value="CM<?php echo sprintf("%03s", $kodeObat) ?>" name="kodeObat" readonly>
			                </div>
						  	Nama Obat  
							<div class="form-group">
			                  <input type="text" class="form-control form-control-user" placeholder="Silahkan Masukan Nama Obat" name="namaObat">
			                </div>
					        Harga Obat  
							<div class="form-group">
			                  <input type="number" class="form-control form-control-user" placeholder="Silahkan Masukan Harga Obat" name="hargaObat">
			                </div>
					        Stok Obat  
							<div class="form-group">
			                  <input type="number" class="form-control form-control-user" placeholder="Silahkan Masukan Sisa Obat" name="sisaObat">
			                </div>
					        Tanggal Kadarluasa  
							<div class="form-group">
			                  <input type="date" class="form-control form-control-user" placeholder="Silahkan Masukan Tanggal Kadarluasa" name="tanggalKadarluasa">
			                </div>
			                
			                <center>
								<button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button>
								<button type="reset" class="btn btn-danger btn-icon-split"><span class="text">RESET</span></button>
							</center>
		                </div>
	              	<?php echo form_close(); ?>
              </div>
        </div>
        <!-- /.container-fluid -->