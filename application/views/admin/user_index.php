<div id="ngilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3 mt-2" data-toggle="modal" data-target="#exampleModal">
	Tambah User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="card-title mb-0">Tambah User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="card-body">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" class="form-control input-square" name="nama" placeholder="Nama" required>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="username" class="form-control input-square" name="username" placeholder="Username"
								required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control input-square" name="password"
								placeholder="Password" required>
						</div>
						<div class="form-group">
							<label for="level">Level</label>
							<select id="level" name="level" class="form-control input-pill">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
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
				<th>Username</th>
				<th>Nama</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($user as $aa) { ?>
			<tr>
				<td><?= $aa['username'] ?></td>
				<td><?= $aa['nama'] ?></td>
				<td><?= $aa['level'] ?></td>
				<td>
					<a href="<?php echo site_url('admin/user/delete/'.$aa['id_user']); ?>" class="btn btn-sm btn-danger"
						onClick="return confirm('Apakah Anda Yakin Menghapus?')"><i class="la la-trash"></i></a>
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
						data-target="#edit<?= $aa['id_user'] ?>">
						<i class="la la-edit"></i>
					</button>

					<!-- Modal -->
					<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h5 class="card-title mb-0">Edit User</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="card-body">
											<div class="form-group">
												<label>Nama</label>
												<input type="text" id="nama" class="form-control input-square" name="nama" placeholder="Nama"
													value="<?= $aa['nama'] ?>" required>
											</div>
											<div class="form-group">
												<label>Username</label>
												<input type="text" id="username" class="form-control input-square" name="username"
													placeholder="Username" value="<?= $aa['username'] ?>" readonly>
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
			<?php } ?>
		</tbody>
	</table>
</div>
