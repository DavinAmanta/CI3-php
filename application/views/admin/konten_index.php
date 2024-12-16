<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3 mt-2" data-toggle="modal" data-target="#exampleModal">
	Tambah Konten
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="card-title mb-0">Tambah Konten</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
					<div class="card-body">
						<div class="form-group">
							<label for="nama">Judul</label>
							<input type="text" class="form-control input-square" name="judul" placeholder="Judul"
								required>
						</div>
						<div class="form-group">
							<label>Kategori</label>
							<select name="id_kategori" class="form-control input-square">
								<?php foreach($kategori as $aa) { ?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>keterangan</label>
							<input type="text" class="form-control input-square" name="keterangan"
								placeholder="Keterangan" required>
						</div>
						<div class="form-group">
							<label>link</label>
							<input type="text" class="form-control input-square" name="link"
								placeholder="link" required>
						</div>
						<div class="form-group">
							<label>Foto</label>
                            <input type="file" class="form-control input-square" accept="image/png,image/jpeg" name="foto">
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
					<th>Judul</th>
					<th>Kategori Konten</th>
					<th>Tanggal</th>
					<th>Kreator</th>
					<th>link</th>
					<th>Foto</th>
					<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
        <?php $no=1; foreach($konten as $aa) { ?>
			<tr>
            <td><?= $no; ?></td>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['link'] ?></td>
                    <td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<span class="tf-icons bx bx-search"></span> Lihat Foto
						</a>
					</td>
				<td>
					<a href="<?php echo site_url('admin/konten/delete/'.$aa['foto']); ?>"
						class="btn btn-sm btn-danger" onClick="return confirm('Apakah Anda Yakin Menghapus?')"><i
							class="la la-trash"></i></a>
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
						data-target="#konten<?= $no; ?>">
						<i class="la la-edit"></i>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h5 class="card-title mb-0">Edit Konten</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('admin/konten/update') ?>" method="post" enctype='multipart/form-data'>
                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="card-body">
											<div class="form-group">
												<label>Judul</label>
												<input type="text" class="form-control input-square"
													name="judul" placeholder="Judul" value="<?= $aa['judul'] ?>" required>
											</div>
											<div class="form-group">
												<label>Kategori</label>
												<select name="id_kategori" class="form-control input-square">
                                                <?php foreach($kategori as $uu) { ?>
                                                    <option
                                                    <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected"; } ?>
														value="<?= $uu['id_kategori'] ?>">
															<?= $uu['nama_kategori'] ?></option>
                                                        </option>
														<?php } ?>
                                                </select>
											</div>
                                            <div class="form-group">
												<label>Keterangan</label>
												<input type="text" class="form-control input-square"
													name="keterangan" placeholder="Keterangan" value="<?= $aa['keterangan'] ?>" required>
											</div>
                                            <div class="form-group">
												<label>Link</label>
												<input type="text" class="form-control input-square"
													name="link" placeholder="link" value="<?= $aa['link'] ?>" required>
											</div>
											<div class="form-group">
												<label>Foto</label>
												<input type="file" class="form-control input-square"
													name="foto" accept="image/png,image/jpeg">
											</div>
										</div>
										<div class="card-action d-flex justify-content-end">
											<button type="submit" class="btn btn-success mr-2">Simpan</button>
											<button type="button" class="btn btn-danger"
												data-dismiss="modal">Cancel</button>
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
