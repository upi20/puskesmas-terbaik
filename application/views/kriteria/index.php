<?php
$msg = $this->session->flashdata('message');
if (isset($msg)) {
?>
	<div class="alert alert-success alert-dismissable">
		<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		<?= $msg; ?>
	</div>
<?php
}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">List Kriteria</h6>
		<div>
			<a href="<?= site_url('kriteria/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No</th>
						<th>Kriteria</th>
						<th>Sifat</th>
						<th>Bobot</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($kriteria) {
						$no = 1;
						foreach ($kriteria as $item) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $item->kriteria ?></td>
								<td><?= $item->sifat ?></td>
								<td><?= $item->bobot ?></td>
								<td>

									<!-- Contextual button for informational alert messages -->
									<button type="button" class="btn btn-info btn-sm" onclick="lihat_kriteria(<?= $item->kdKriteria; ?>)">
										<i class="fas fa-eye"></i> Lihat
									</button>

									<!-- Indicates caution should be taken with this action -->
									<button type="button" class="btn btn-warning btn-sm" onclick="edit_kriteria(<?= $item->kdKriteria; ?>)">
										<i class="fas fa-edit"></i> Ubah Kriteria
									</button>

									<button type="button" class="btn btn-primary btn-sm" onclick="edit_item_kriteria(<?= $item->kdKriteria; ?>)">
										<i class="fas fa-edit"></i> Ubah Item Kriteria
									</button>

									<!-- Indicates a dangerous or potentially negative action -->
									<button type="button" data-toggle="modal" class="btn btn-danger btn-sm" data-target="#modalDelete">
										<i class="fas fa-trash"></i> Hapus
									</button>

								</td>
							</tr>
						<?php }
					} else { ?>
						<tr>
							<td colspan="5" class="text-center">
								<h3>No Data Input</h3>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="form_kriteria" tabindex="-1" role="dialog" aria-labelledby="form_kriteriaLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah Kriteria Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" id="formKriteria" class="form-horizontal">
					<div id="errors">
					</div>
					<input name="kdKriteria" placeholder="Kode Kriteria" class="form-control" type="hidden">

					<div class="form-group row">
						<label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kriteria" name="kriteria" placeholder="Kriteria">
						</div>
					</div>

					<div class="form-group row">
						<label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="bobot" name="bobot" placeholder="Bobot">
						</div>
					</div>

					<fieldset class="form-group">
						<div class="row">
							<legend class="col-form-label col-sm-2 pt-0">Sifat</legend>
							<div class="col-sm-10">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="sifat" id="benefit" value="B" checked>
									<label class="form-check-label" for="benefit">
										Benefit
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="sifat" id="cost" value="C">
									<label class="form-check-label" for="cost">
										Cost
									</label>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="save_kriteria()"><i class="fas fa-save"></i> Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="form_item_kriteria" tabindex="-1" role="dialog" aria-labelledby="form_kriteriaLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Ubah Item Kriteria Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" id="formItemKriteria" class="form-horizontal">
					<input id="kdKriteriaSub" name="kdKriteria" placeholder="Kode Kriteria" class="form-control" type="hidden">
					<?php $no = 1;
					for ($no; $no <= 5; $no++) : ?>
						<div class="form-group row">
							<label class="control-label col-lg-2">Item Kriteria <?= $no ?></label>
							<div class="col-lg-7">
								<input name="itemKriteria<?= $no ?>" placeholder="Item Kriteria <?= $no ?>" class="form-control" type="text">
								<input name="kdSubKriteria<?= $no ?>" type="hidden">
							</div>
							<div class="col-lg-3">
								<span>Value <b><?= $no ?></b></span>
								<div class="col-md-6">
									<input name="value<?= $no ?>" placeholder="" class="form-control" type="hidden" disabled>
								</div>
							</div>
						</div>
					<?php endfor ?>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="save_item_kriteria()"><i class="fas fa-save"></i> Save changes</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="form_kriteriaLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi hapus data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin menghapus data ini ? </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapus_kriteria('<?= $item->kdKriteria; ?>')"><i class="fas fa-trash"></i> Delete</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="view_kriteria" tabindex="-1" role="dialog" aria-labelledby="form_kriteriaLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Kriteria</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Detail Kriteria</h6>
					</div>
					<div class="card-body">
						<table>
							<tr>
								<td><b>Kode Kriteria</b></td>
								<td id="viewKodeKriteria"></td>
							</tr>
							<tr>
								<td><b>Kriteria </b></td>
								<td id="viewKriteria"></td>
							</tr>
							<tr>
								<td><b>Sifat</b></td>
								<td id="viewSifat"></td>
							</tr>
							<tr>
								<td><b>Bobot</b></td>
								<td id="viewBobot"></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="card mt-3">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Item Kriteria</h6>
					</div>
					<div class="card-body">
						<table class="w-100">
							<?php $no = 1;
							for ($no; $no <= 5; $no++) : ?>
								<tr>
									<td><b>Item Kriteria <?= $no ?></b></td>
									<td><b class="mx-1">:</b></td>
									<td id="viewItemKriteria<?= $no ?>"></td>
									<td><b>Value <?= $no ?></b></td>
									<td><b class="mx-1">:</b></td>
									<td id="viewValue<?= $no ?>"></td>
								</tr>
							<?php endfor; ?>
						</table>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>
