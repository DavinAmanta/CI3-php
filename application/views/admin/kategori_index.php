<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3 mt-2" data-toggle="modal" data-target="#exampleModal">
	Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="card-title mb-0">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="card-body">
						<div class="form-group">
							<label>Nama Kategori</label>
							<input type="text" class="form-control input-square" name="nama_kategori" placeholder="Nama Kategori" required>
						</div>
					</div>
					<div class="card-action d-flex justify-content-end">
						<button type="submit" class="btn btn-success mr-2">Simpan</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
                <th>Aksi</th>
			</tr>
		</thead>
		<tbody>
        <?php $no=1; foreach($kategori as $aa) { ?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $aa['nama_kategori'] ?></td>
				<td>
					<a href="<?php echo site_url('admin/kategori/delete/'.$aa['id_kategori']); ?>" class="btn btn-sm btn-danger"
						onClick="return confirm('Apakah Anda Yakin Menghapus?')"><i class="la la-trash"></i></a>
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
						data-target="#edit<?= $aa['id_kategori'] ?>">
						<i class="la la-edit"></i>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h5 class="card-title mb-0">Edit Kategori</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
										<div class="card-body">
											<div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control input-square" name="nama_kategori" placeholder="Nama"
													value="<?= $aa['nama_kategori'] ?>" required>
											</div>
										</div>
										<div class="card-action d-flex justify-content-end">
											<button type="submit" class="btn btn-success mr-2">Simpan</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</div>
