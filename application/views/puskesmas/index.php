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
<div class="row">
	<div class="col-lg-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">List Puskesmas</h6>
				<div>
					<a href="<?= site_url('puskesmas/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1">No</th>
								<th class="col-md-6">Puskesmas</th>
								<th class="col-md-5 ">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							if (isset($puskesmas)) {
								if (count($puskesmas) == 0) {
									echo '<tr><td colspan="3" class="text-center"><h3>No Data Input</h3></td></tr>';
								}
								foreach ($puskesmas as $item) {
							?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $item->puskesmas ?></td>
										<td>
											<a class="btn btn-primary btn-xs" href="<?= site_url('puskesmas/tambah/' . $item->kdPuskesmas) ?>" role="button">
												<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Ubah
											</a>

											<!-- Indicates a dangerous or potentially negative action -->
											<button type="button" data-toggle="modal" class="btn btn-danger btn-xs" data-target="#modalDelete">
												<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Hapus
											</button>
										</td>
									</tr>
							<?php
								}
							}
							?>
						</tbody>
					</table>
				</div>
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
				<button type="button" class="btn btn-danger" onclick="hapus_puskesmas('<?= $item->kdPuskesmas; ?>')"><i class="fas fa-trash"></i> Delete</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>
