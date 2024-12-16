<div id="ngilang" class="mb-3">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card">
	<div class="card-header">
		<div class="card-title">File Input</div>
	</div>
    <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
	<div class="card-body">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control input-square" placeholder="Judul Foto" name="judul" required>
			</div>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>Pilih Foto dengan ukuran (1:3)</label>
			<input type="file" class="form-control input-square" name="foto">
		</div>
	</div>
	<div class="card-action">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="button" class="btn btn-danger">Cancel</button>
	</div>
	</form>
</div>

<?php foreach($caraousel as $aa) { ?>
<div class="row row-card-no-pd mt-3">
	<div class="col-md-4">
		
			<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
			<div class="card-body">
				<h5 class="card-title"><?= $aa['judul'] ?></h5>
				<a href="<?php echo site_url('admin/caraousel/delete/'.$aa['foto']); ?>" class="btn btn-danger"
					onClick="return confirm('Apakah Anda Yakin Menghapus?')"><span
						class="la la-trash"></span></a>
			</div>
		
	</div>
</div>
<?php } ?>
