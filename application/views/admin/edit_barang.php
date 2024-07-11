<div class="container-fluid">

	<h3><i class="fas fa-edit"> EDIT DATA BARANG</i></h3>

	<?php foreach ($barang as $brg) : ?>
		<form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
			<div class="form-group">
				<label>Nama Baju</label>
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
			</div>

			<div class="form-group">
				<label>Spesifikasi</label>
				<input type="text" name="spesifikasi_produk" class="form-control" value="<?php echo $brg->spesifikasi_produk ?>">
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
				<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div>

			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>

</div>