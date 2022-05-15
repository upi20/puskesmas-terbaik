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
<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
		<div>
			<h6 class="m-0 font-weight-bold text-primary">Tambah Rumah Sakit</h6>
		</div>
		<div>
			<a class="btn btn-danger" href="<?= site_url('puskesmas') ?>" role="button"><i class="fas fa-times"></i> Batal</a>
		</div>
	</div>
	<div class="card-body">
		<form action="" class="form-horizontal" method="post" accept-charset="utf-8" id="mainForm">
			<div class="errors">
				<?php
				$errors = $this->session->flashdata('errors');
				if (isset($errors)) {
					foreach ($errors as $error) {
				?>
						<div class="alert alert-danger alert-dismissable">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
							<?= $error; ?>
						</div>
				<?php
					}
				}
				?>
			</div>

			<div class="form-group row">
				<label for="puskesmas" class="col-sm-2 col-form-label">Rumah Sakit</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="puskesmas" name="puskesmas" placeholder="Nama Rumah Sakit" value="<?= isset($nilaiPuskesmas[0]->puskesmas) ? $nilaiPuskesmas[0]->puskesmas : '' ?>">
					<input name="puskesmas_asal" type="text" id="puskesmas_asal" value="<?= isset($nilaiPuskesmas[0]->puskesmas) ? $nilaiPuskesmas[0]->puskesmas : '' ?>" hidden>
				</div>
			</div>


			<table class="table table-striped">
				<tr>
					<th class="col-md-3">Kriteria</th>
					<th colspan="5" class="text-center col-md-9">Nilai</th>
				</tr>
				<?php
				foreach ($dataView as $item) {
				?>
					<tr>
						<td><?= $item['nama']; ?></td>
						<?php
						$no = 1;
						foreach ($item['data'] as $dataItem) {

						?>
							<td>
								<input type="radio" name="nilai[<?= $dataItem->kdKriteria ?>]" id="nilai<?= $dataItem->kdKriteria ?>-<?= $dataItem->value ?>" value="<?= $dataItem->value ?>" <?php if (isset($nilaiPuskesmas)) {
																																																	foreach ($nilaiPuskesmas as $item => $value) {
																																																		if ($value->kdKriteria == $dataItem->kdKriteria) {
																																																			if ($value->nilai ==  $dataItem->value) {
																																																?> checked="checked" <?php
																																																					}
																																																				}
																																																			}
																																																		} else {
																																																			if ($no == 3) {
																																																						?> checked="checked" <?php
																																																											}
																																																										}
																																																												?> /> <?= '<label class="label-kriteria" for="nilai' . $dataItem->kdKriteria . '-' . $dataItem->value . '">' . $dataItem->subKriteria . "</label>";
																																																														$no++;
																																																														?>
							</td>

					<?php
						}
						echo '</tr>';
					}
					?>

			</table>

		</form>
	</div>
	<div class="card-footer d-flex flex-md-row justify-content-between">
		<button class="btn btn-success" form="mainForm"><i class="fas fa-save"></i> Simpan</button>
	</div>
</div>
