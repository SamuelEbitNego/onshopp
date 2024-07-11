<div class="container-fluid">

	<div class="alert alert-success">
		<p class="text-center" align="middle">Selamat Proses Pesanan Berhasil!</p>
		<center><a class="btn btn-sm btn-outlinedanger" onclick="#')" href="<?php echo base_url() . 'history/generate_dompdf/' . $this->session->userdata('user'); ?>"><span class="fa-solid fa-file-pdf fa-2xl" style="color: #c70046;"></span> Pdf</a></center>
	</div>



</div>

<style>
	.alert-success {
		bottom: 300%;
	}
</style>