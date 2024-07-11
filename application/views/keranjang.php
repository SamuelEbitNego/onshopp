<div class="container-fluid">

	<h4>Keranjang Belanja</h4>

	<table class="table table-bordered table-striped table-hover m-10">
		<tr>
			<center>
				<th>NO</th>
				<th>NAMA BARANG</th>
				<th>JUMLAH</th>
				<th>HARGA</th>
				<th>SUB-TOTAL</th>
			</center>
		</tr>

		<?php
		$no = 1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td align="center"><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="center">Rp<?php echo number_format($items['price'], 0, ',', '.') ?></td>
				<td align="center">Rp<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
			</tr>


		<?php endforeach; ?>

		<tr>
			<td colspan="4"></td>
			<td align="center">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
		</tr>


	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
			<div class="btn btn-sm btn-danger mb-3">Hapus Keranjang</div>
		</a>
		<a href="<?php echo base_url('dashboard/index') ?>">
			<div class="btn btn-sm btn-dark mb-3">Lanjutkan Belanja</div>
		</a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
			<div class="btn btn-sm btn-secondary mb-3">Pembayaran</div>
		</a>
	</div>

</div>

<style>
	table {
		height: 50%;
	}
</style>

<table>
	<!-- table content here -->
</table>