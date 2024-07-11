<div class="container-fluid">

	<div class="card">
		<h5 class="card-header">
			Detail Barang
		</h5>
		<div class="card-body-top">
			<?php foreach ($barang as $brg) : ?>
				<div class="row">
					<div class="col-md-4"></div>
					<center><img src="<?php echo base_url() . '/foto/' . $brg->gambar ?>" width="150" height="150"></center>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>Nama Barang</td>
								<td><strong><?php echo $brg->nama_brg ?></strong></td>
							</tr>

							<tr>
								<td>Keterangan</td>
								<td><strong><?php echo $brg->spesifikasi_produk ?></strong></td>
							</tr>

							<tr>
								<td>Kategori</td>
								<td><strong><?php echo $brg->kategori ?></strong></td>
							</tr>

							<tr>
								<td>Harga</td>
								<td><strong>Rp.<?php echo number_format($brg->harga, 0, ',', '.')  ?></strong></td>
							</tr>

						</table>
						<?php echo anchor('dashboard/tambah_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Keranjang</div>') ?>

						<?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</div>

<style>
	.card {
		padding: 15px;
		top: -5%;
	}
</style>