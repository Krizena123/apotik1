    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Akun</h1>
          	<!-- DataTales Example -->
          	<div class="card shadow mb-4">
            		<div class="card-body">
              			<div class="table-responsive">
                			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  				<thead>
                    				<tr align="center">
                      					<th width="16px">No</th>
					                    <th>Username</th>
					                    <th>Password</th>
					                    <th>Nama</th>
                             			<th>Level</th>
					                    <th width="100px">
					                    	Aksi
					                    	<a href="<?php echo site_url('c_akun/tambah')?>" class="btn btn-info">
									            Tambah
									        </a>
					                    </th>
				                    </tr>
                  				</thead>
                  				<tfoot>
                    				<tr align="center">
                      					<th>No</th>
                      					<th>Username</th>
                      					<th>Password</th>
                      					<th>Nama</th>
                                		<th>Level</th>
                      					<th>Aksi</th>
                    				</tr>
                  				</tfoot>
                  				<tbody>
                  					<?php $no = 1; foreach ( $akun->result() as $value) { ?>
				                    <tr>
				                    <td align="center"><?php echo "$no"; ?></td>
				                    <td><?php echo $value->username ?></td>
				                  	<td><?php echo $value->password ?></td>
				                  	<td><?php echo $value->namaApoteker ?></td>
                                	<td><?php echo $value->level ?></td>
				                    <td align="center">
				                      	<a href="<?php echo site_url('c_akun/edit/'.$value->No.'/'.$value->kodeApoteker)?>" class="btn btn-info btn-circle btn-sm" title="edit">
    						                	<i class="fas fa-pen"></i>
    						                </a>
										<a href="<?php echo site_url('c_akun/level/'.$value->No.'/'.$value->level)?>" class="btn btn-warning btn-circle btn-sm" title="level">
										<i class="fas fa-user"></i>
										</a>
				                      	<a href="<?php echo site_url('c_akun/hapus/'.$value->No.'/'.$value->kodeApoteker)?>" class="btn btn-danger btn-circle btn-sm" title="hapus">
    						                	<i class="fas fa-trash"></i>
    						                </a>
						        	</td>
                    				</tr>
                    				<?php $no++; } ?>
                  				</tbody>
                			</table>
              			</div>
            		</div>
          	</div>
    </div>