<div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Obat</h1>
          	<!-- DataTales Example -->
          	<div class="card shadow mb-4">
            	<div class="card-body">
              		<div class="table-responsive">
                		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  			<thead>
                    			<tr align="center">
                      				<th width="16px">No</th>
                                    <th>Kode Obat</th>
					                <th>Nama Obat</th>
					                <th>Harga Obat</th>
					                <th>Sisa Obat</th>
					                <th>Tanggal Kadarluasa</th>
				                    <th width="100px">
				                    <a href="<?php echo site_url('c_obat/tambah')?>" class="btn btn-info">
						                Tambah
							        </a>
			                        </th>
				                </tr>
                  			</thead>
                  			<tfoot>
                    			<tr align="center">
                      	    		<th>No</th>
                    				<th>Kode Obat</th>
					                <th>Nama Obat</th>
					                <th>Harga Obat</th>
					                <th>Sisa Obat</th>
					                <th>Tanggal Kadarluasa</th>
                  					<th>Aksi</th>
                				</tr>
                  			</tfoot>
                  			<tbody>
                  				<?php $no = 1; foreach ( $obat->result() as $value) { ?>
				                <tr>
				                  	<td align="center"><?php echo "$no"; ?></td>
				                  	<td><?php echo $value->kodeObat ?></td>
			                      	<td><?php echo $value->namaObat ?></td>
			                        <td> <?php echo "Rp. ". number_format($value->hargaObat, 0, ".", "."). ""; ?></td>
				                  	<td><?php echo $value->sisaObat ?></td>
				                  	<td><?php echo $value->tanggalKadarluasa ?></td>
				                  	<td align="center">
									  	<a href="<?php echo site_url('c_obat/transaksi/'.$value->kodeObat)?>" class="btn btn-success btn-circle btn-sm">
					                		<i class="fas fa-shopping-cart"></i>
						                </a>
						                <?php if ($this->session->userdata('level') == "admin") { ?>
										<a href="<?php echo site_url('c_obat/edit/'.$value->kodeObat)?>" class="btn btn-info btn-circle btn-sm">
					                	<i class="fas fa-pen"></i>
						                </a>
				                      	<a href="<?php echo site_url('c_obat/hapus/'.$value->kodeObat)?>" class="btn btn-danger btn-circle btn-sm">
						                	<i class="fas fa-trash"></i>
						                </a>
						            	<?php } ?>
						            </td>
                    			</tr>
                    			<?php $no++; } ?>
                  			</tbody>
                		</table>
              		</div>
            	</div>
            </div>
    </div>