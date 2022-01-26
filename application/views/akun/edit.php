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
					<?php 
						$no = $akun->No;
						$kode = $akun->kodeApoteker;
					?>
	                <?php echo form_open_multipart('c_akun/proses_edit/'.$no.'/'.$kode); ?>
	              		<div class="card-body">
						  	Kode Apoteker
		                  	<div class="form-group">
  			                  <input type="text" disabled class="form-control form-control-user" value="<?php echo($akun->kodeApoteker); ?>">
  			                </div>
		                  	Username
		                  	<div class="form-group">
  			                  <input type="text" required class="form-control form-control-user" name="username" placeholder="Silahkan Masukan Nama Username" value="<?php echo($akun->username); ?>">
  			                </div>
			            	Password
		                  	<div class="form-group">
  			                  <input type="text" required class="form-control form-control-user" placeholder="Silahkan Masukan Password" name="password" value="<?php echo($akun->password); ?>">
  			                </div>
			                Nama
		                  	<div class="form-group">
  			                  <input type="text" required class="form-control form-control-user" placeholder="Silahkan Masukan Nama" name="namaApoteker" value="<?php echo($akun->namaApoteker); ?>">
  			                </div>
							Tanggal Lahir
		                  	<div class="form-group">
  			                  <input type="date" required class="form-control form-control-user" name="nama" value="<?php echo($akun->tanggalLahir); ?>">
  			                </div>
			                <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
		                </div>
	              	<?php echo form_close(); ?>
              </div>
        </div>
        <!-- /.container-fluid -->