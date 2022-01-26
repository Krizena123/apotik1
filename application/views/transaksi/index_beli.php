<div class="container-fluid">
        <!-- Page Heading -->
		<div class="row">
			<div class="col-md-10">
			<h1 class="h3 mb-2 text-gray-800">Transaksi Beli</h1>
			</div>
			<div class="col-md-1">
				<a href="<?php echo site_url('c_transaksi/')?>" class="btn btn-info">
					Jual
				</a>
			</div>
			<div class="col-md-1">
				<a href="<?php echo site_url('c_transaksi/beli')?>" class="btn btn-info">
					Beli
				</a>
			</div>
		</div>
			<?php if ($this->session->userdata('level') == "admin") { ?>
			<a href="<?php echo site_url('c_transaksi/cetak')?>" class="btn btn-info">
				Cetak Laporan
			</a>
			<?php } ?>
          	<!-- DataTales Example -->
          	<div class="card shadow mb-4">
            	<div class="card-body">
              		<div class="table-responsive">
                		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  			<thead>
                    			<tr align="center">
                      				<th width="16px">No</th>
                                    <th>Nama Obat</th>
					                <th>Terjual</th>
					                <th>Sisa Obat</th>
					                <th>Apoteker</th>
					                <th>Tanggal Beli</th>
									<?php if ($this->session->userdata('level') == "admin") { ?>
				                    <th width="100px">Aksi</th>
									<?php } ?>
				                </tr>
                  			</thead>
                  			<tfoot>
                    			<tr align="center">
                      	    		<th>No</th>
									<th>Nama Obat</th>
					                <th>Terjual</th>
					                <th>Sisa Obat</th>
					                <th>Apoteker</th>
					                <th>Tanggal Beli</th>
									<?php if ($this->session->userdata('level') == "admin") { ?>
                  					<th>Aksi</th>
									<?php } ?>
                				</tr>
                  			</tfoot>
                  			<tbody>
                  				<?php $no = 1; foreach ( $obat->result() as $value) { ?>
				                <tr>
				                  	<td align="center"><?php echo "$no"; ?></td>
				                  	<td><?php echo $value->namaObat ?></td>
			                      	<td><?php echo $value->jumlahBeli ?></td>
									<td><?php echo $value->sisaObat ?></td>
									<td><?php echo $value->namaApoteker ?></td>
									<td><?php echo $value->tanggalBeli ?></td>
									<?php if ($this->session->userdata('level') == "admin") { ?>
									<td align="center">
						                <?php if ($this->session->userdata('level') == "admin") { ?>
										<!-- <a href="<?php echo site_url('c_transaksi/edit/'.$value->idTransaksi)?>" class="btn btn-info btn-circle btn-sm">
					                		<i class="fas fa-pen"></i>
						                </a> -->
				                      	<a href="<?php echo site_url('c_transaksi/hapusbeli/'.$value->idTransaksi)?>" class="btn btn-danger btn-circle btn-sm">
						                	<i class="fas fa-trash"></i>
						                </a>
						            	<?php } ?>
						            </td>
									<?php } ?>
                    			</tr>
                    			<?php $no++; } ?>
                  			</tbody>
                		</table>
              		</div>
            	</div>
            </div>
    </div>