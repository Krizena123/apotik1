<?php $max = $obat->sisaObat ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Transaksi</h1>

<div class="row">

  <!-- Content Column -->
<div class="col-lg-6 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Obat Keluar</h6>
      </div>
          <?php echo form_open_multipart('c_obat/proses_jual/'.$obat->kodeObat); ?>
                <div class="card-body">
                    Kode Transaksi
                    <div class="form-group">
                        <input type="text" name="idTransaksi" readonly class="form-control form-control-user" value="TRK<?php echo sprintf("%03s", $idTransaksi) ?>">
                    </div>
                    Kode Obat
                    <div class="form-group">
                        <input type="text" name="kodeObat" readonly class="form-control form-control-user" value="<?php echo($obat->kodeObat); ?>">
                    </div>
                    Nama Obat
                    <div class="form-group">
                        <input type="text" readonly class="form-control form-control-user" value="<?php echo($obat->namaObat); ?>">
                    </div>
                    Harga Obat
                    <div class="form-group">
                        <input type="number" readonly class="form-control form-control-user" value="<?php echo($obat->hargaObat); ?>">
                    </div>
                    Sisa Obat
                    <div class="form-group">
                        <input type="number" id="sisa" readonly class="form-control form-control-user" value="<?php echo($obat->sisaObat); ?>">
                    </div>
                    Terjual
                    <div class="form-group">
                        <input type="number" name="jumlahJual" max="<?php echo $max ?>" id="terjual" required class="form-control form-control-user" placeholder="Masukan jumlah obat terjual">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="total" id="total" class="form-control form-control-user">
                    </div>
                  <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
              </div>
            <?php echo form_close(); ?>
    </div>
</div>

<div class="col-lg-6 mb-4">

    <!-- Project Card Examplea -->
    <div class="card shadow mb-4 border-left-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Obat Masuk</h6>
      </div>
            <?php echo form_open_multipart('c_obat/proses_beli/'.$obat->kodeObat); ?>
                <div class="card-body">
                    Kode Transaksi
                    <div class="form-group">
                        <input type="text" name="idTransaksi" readonly class="form-control form-control-user" value="TRK<?php echo sprintf("%03s", $idTransaksi1) ?>">
                    </div>
                    Kode Obat
                    <div class="form-group">
                        <input type="text" name="kodeObat" readonly class="form-control form-control-user" value="<?php echo($obat->kodeObat); ?>">
                    </div>
                    Nama Obat
                    <div class="form-group">
                        <input type="text" readonly class="form-control form-control-user" value="<?php echo($obat->namaObat); ?>">
                    </div>
                    Harga Obat
                    <div class="form-group">
                        <input type="number" readonly class="form-control form-control-user" value="<?php echo($obat->hargaObat); ?>">
                    </div>
                    Sisa Obat
                    <div class="form-group">
                        <input type="number" id="sisa" readonly class="form-control form-control-user" value="<?php echo($obat->sisaObat); ?>">
                    </div>
                    Dibeli
                    <div class="form-group">
                        <input type="number" name="jumlahBeli" min="1" id="beli" required class="form-control form-control-user" placeholder="Masukan jumlah obat terjual">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="total" id="total_beli" class="form-control form-control-user">
                    </div>
                  <center><button type="submit" class="btn btn-success btn-icon-split"><span class="text">KIRIM</span></button></center>
              </div>
            <?php echo form_close(); ?>
    </div>
</div>
<!-- /.container-fluid -->