<div class="card shadow mb-4">
	<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
		<div>
			<h6 class="m-0 font-weight-bold text-primary">Table Hasil Perhitungan</h6>
		</div>
	</div>
	<div class="card-body">
		<div class="card ">
			<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
				<div>
					<h6 class="m-0 font-weight-bold text-primary">Table 1 - Nilai Awal</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table1" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<?php
								$no = 1;
								$table = $this->page->getData('table1');
								foreach ($table as $item => $value) :
									foreach ($value as $heading => $itemValue) : ?>
										<th class="text-center"><?php echo $heading ?></th>

								<?php endforeach;
									break;
								endforeach;
								?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($table as $item => $value) : ?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<?php foreach ($value as $itemValue) : ?>
										<td><?php echo $itemValue ?></td>
									<?php endforeach ?>
								</tr>
							<?php $no++;
							endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<hr>


		<div class="card ">
			<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
				<div>
					<h6 class="m-0 font-weight-bold text-primary">Table 2 - Dihitung sesuai sifat cost atau benefit</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table2" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<?php
								$no = 1;
								$table = $this->page->getData('table2');
								foreach ($table as $item => $value) :
									foreach ($value as $heading => $itemValue) : ?>
										<th class="text-center"><?php echo $heading ?></th>

								<?php endforeach;
									break;
								endforeach;
								?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($table as $item => $value) : ?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<?php foreach ($value as $itemValue) : ?>
										<td><?php echo $itemValue ?></td>
									<?php endforeach ?>
								</tr>
							<?php $no++;
							endforeach ?>
						</tbody>
					</table>
				</div>
				<hr>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table3" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<th class="text-center">Kriteria</th>
								<th class="text-center">Sifat</th>
								<th class="text-center">Nilai min /max</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$dataSifat = $this->page->getData('dataSifat');
							$no = 1;
							foreach ($dataSifat as $item => $value) : ?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<td><?php echo $item ?></td>
									<td><?php echo $value->sifat ?></td>
									<td>
										<?php
										$valueMinMax = $dataSifat = $this->page->getData('valueMinMax');
										if (isset($valueMinMax['min' . $item])) {
											echo $valueMinMax['min' . $item] . ' - Minimal';
										}
										if (isset($valueMinMax['max' . $item])) {
											echo $valueMinMax['max' . $item] . ' - Maksimal';
										}
										?>
									</td>
								</tr>
							<?php $no++;
							endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<hr>


		<div class="card ">
			<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
				<div>
					<h6 class="m-0 font-weight-bold text-primary">Table 3 - Dikali dengan bobot</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table4" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<?php
								$no = 1;
								$table = $this->page->getData('table3');
								foreach ($table as $item => $value) :
									foreach ($value as $heading => $itemValue) : ?>
										<th class="text-center"><?php echo $heading ?></th>

								<?php endforeach;
									break;
								endforeach;
								?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($table as $item => $value) : ?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<?php foreach ($value as $itemValue) : ?>
										<td><?php echo $itemValue ?></td>
									<?php endforeach ?>
								</tr>
							<?php $no++;
							endforeach ?>
						</tbody>
					</table>

					<hr>
					<table class="table table-bordered table-striped table-hover" id="table5" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<th class="text-center">Kriteria</th>
								<th class="text-center">Bobot</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$bobot = $this->page->getData('bobot');
							$no = 1;
							foreach ($bobot as $item => $value) :
							?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<td><?php echo $value->kriteria ?></td>
									<td class="text-center"><?php echo $value->bobot ?></td>

								</tr>
							<?php $no++;
							endforeach ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
		<hr>


		<div class="card ">
			<div class="card-header py-3 d-flex flex-md-row  justify-content-between">
				<div>
					<h6 class="m-0 font-weight-bold text-primary">Table 4 - Dijumlah sesuai dengan rumah sakit dan di dapat hasil rangking</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover" id="table6" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th class="col-md-1 text-center">No</th>
								<?php
								$no = 1;
								$table = $this->page->getData('tableFinal');
								foreach ($table as $item => $value) :
									foreach ($value as $heading => $itemValue) : ?>
										<th class="text-center"><?php echo $heading ?></th>
								<?php endforeach;
									break;
								endforeach; ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($table as $item => $value) : ?>
								<tr>
									<td class="text-center"><?php echo $no ?></td>
									<?php foreach ($value as $itemValue) : ?>
										<td><?php echo $itemValue ?></td>
									<?php endforeach; ?>
								</tr>
							<?php $no++;
							endforeach; ?>
						</tbody>
					</table>
				</div>
				<?php
				$table = $this->page->getData('tableFinal');
				foreach ($table as $item => $value) :
					if ($value->Rangking == 1) : ?>
						<div class="alert alert-success" role="alert">
							<h4><b>Kesimpulan : </b> Dari hasil perhitungan yang dilakukan menggunakan metode Simple Additive Weighting (SAW),
								rumah sakit terbaik untuk di pilih adalah
								<?php echo $value->Puskesmas ?> dengan nilai <?php echo $value->Total ?>
							</h4>
						</div>
				<?php endif;
				endforeach; ?>
			</div>
		</div>
	</div>
</div>
