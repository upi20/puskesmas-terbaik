<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
		<h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
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
							<?php echo $error; ?>
						</div>
				<?php
					}
				}
				?>
			</div>

			<div class="form-group row">
				<label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="kriteria" name="kriteria" placeholder="Nama Kriteria">
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


			<div class="form-group row">
				<label for="bobot" class="col-sm-2 col-form-label">Bobot</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="bobot" name="bobot" placeholder="Jumlah Bobot">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Item Kriteria</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="itemKriteria1" placeholder="Nama Item Kriteria 1">
				</div>
				<div class="col-sm-2">
					Value : <b>1</b>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="itemKriteria2" placeholder="Nama Item Kriteria 2">
				</div>
				<div class="col-sm-2">
					Value : <b>2</b>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="itemKriteria3" placeholder="Nama Item Kriteria 3">
				</div>
				<div class="col-sm-2">
					Value : <b>3</b>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="itemKriteria4" placeholder="Nama Item Kriteria 4">
				</div>
				<div class="col-sm-2">
					Value : <b>4</b>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="itemKriteria5" placeholder="Nama Item Kriteria 5">
				</div>
				<div class="col-sm-2">
					Value : <b>5</b>
				</div>
			</div>

		</form>
	</div>
	<div class="card-footer">
		<button class="btn btn-success" form="mainForm"><i class="fas fa-save"></i> Simpan</button>
	</div>
</div>
