<div class="container-fluid">
	<h4>Detail Pesanan<div class="btn btn-sm btn-success">No. Invoices: <?php echo $invoices->id ?> </div></h4>

	<table class="table table-bordered table-hover table-striped">

		<tr>
			<th>ID BARANG</th>
			<th>NAMA BAJU</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUB-TOTAL</th>
		</tr>

		<?php $total= 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
			?>

			<tr>
				<td><?php echo $psn->id_brg ?></td>
				<td><?php echo $psn->nama_brg ?></td>
				<td><?php echo $psn->jumlah ?></td>
				<td><?php echo number_format($psn->harga,0,',','.') ?></td>
				<td><?php echo number_format($subtotal,0,',','.')  ?></td>
			</tr>

			<tr>
				<td colspan="4" align="right">Total</td>
				<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
			</tr>

		<?php endforeach; ?>
	</table>

	<a href="<?php echo base_url('admin/invoices/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>

</div>