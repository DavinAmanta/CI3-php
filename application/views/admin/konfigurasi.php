<div id="ngilang" class="mb-3">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card">
	<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
		<div class="card-header">
			<div class="card-title">Konfigurasi</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Judul Website</label>
				<input type="text" class="form-control input-square" placeholder="Judul Website" name="judul_website" value="<?= $konfig->judul_website; ?>" >
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Profile</label>
				<textarea type="text" class="form-control input-square" placeholder="Profile" name="profil_website"><?= $konfig->profil_website; ?></textarea>
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Facebook</label>
				<input type="text" class="form-control input-square" placeholder="Facebook" name="facebook" value="<?= $konfig->facebook; ?>" >
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Instagram</label>
				<input type="text" class="form-control input-square" placeholder="Instagram" name="instagram" value="<?= $konfig->instagram; ?>" >
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control input-square" placeholder="Email" name="email" value="<?= $konfig->email; ?>" >
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" class="form-control input-square" placeholder="Alamat" name="alamat" value="<?= $konfig->alamat; ?>" >
			</div>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>No Handphone</label>
				<input type="text" class="form-control input-square" placeholder="No Handphone" name="no_wa" value="<?= $konfig->no_wa; ?>" >
			</div>
		</div>
		<div class="card-action">
			<button type="submit" class="btn btn-success">Simpan</button>
		</div>
</div>
</form>
