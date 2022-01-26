<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><u><h3>Transaksi Keluar</h3></u></center>
	<table border="1" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Terjual</th>
				<th>Sisa Obat</th>
				<th>Apoteker</th>
			    <th>Tanggal Beli</th>
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ( $obatJ->result() as $value) { ?>
        	<tr>
                <td align="center"><?php echo "$no"; ?></td>
                <td><?php echo $value->namaObat ?></td>
                <td><?php echo $value->jumlahJual ?></td>
                <td><?php echo $value->sisaObat ?></td>
                <td><?php echo $value->namaApoteker ?></td>
                <td><?php echo $value->tanggalBeli ?></td>
        	</tr>
        	<?php $no++; } ?>
        </tbody>
    </table>
    <br><br><br>
    <hr>


    <center><u><h3>Transaksi Keluar</h3></u></center>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Terjual</th>
                <th>Sisa Obat</th>
                <th>Apoteker</th>
                <th>Tanggal Beli</th>
            </tr>
        </thead>
        <tbody>
        	<?php $angka=1; foreach ( $obatB->result() as $value) { ?>
        	<tr>
                <td><?php echo $angka ?></td>
                <td><?php echo $value->namaObat ?></td>
			    <td><?php echo $value->jumlahBeli ?></td>
				<td><?php echo $value->sisaObat ?></td>
				<td><?php echo $value->namaApoteker ?></td>
			    <td><?php echo $value->tanggalBeli ?></td>
        	</tr>
        	<?php $angka++; } ?>
        </tbody>
    </table>

	<script type="text/javascript">
        window.print();
    </script>
</body>
</html>