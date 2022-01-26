<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Tambah Data</h1>

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4 border-left-primary">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah</h6>
                </div>
	                <?php echo form_open_multipart('c_akun/proses_tambah/'); ?>
	              		<div class="card-body">
						  	Kode Apoteker
		                  	<div class="form-group">
			                  <input type="text" readonly class="form-control form-control-user" name="kodeApoteker" value="AP<?php echo sprintf("%03s", $kodeApoteker) ?>">
			                </div>
		                  	Username
		                  	<div class="form-group">
			                  <input type="text" required class="form-control form-control-user" name="username" placeholder="Silahkan Masukan Nama">
			                </div>
			            	Password
		                  	<div class="form-group">
			                  <input type="password" class="form-control form-control-user" placeholder="Silahkan Masukan Password" name="password">
			                </div>
			                Nama
		                  	<div class="form-group">
			                  <input type="text" required class="form-control form-control-user" placeholder="Silahkan Masukan Nama" name="namaApoteker">
			                </div>
							Tanggal Lahir
		                  	<div class="form-group">
			                  <input type="date" required class="form-control form-control-user" name="tanggalLahir">
			                </div>
			                
			                <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
		                </div>
	              	<?php echo form_close(); ?>
              </div>
        </div>
        <!-- /.container-fluid -->