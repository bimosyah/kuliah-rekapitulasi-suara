<?php $this->load->view('header'); ?>
<div id="right-panel" class="right-panel">
	<?php $this->load->view('top-panel'); ?>
	
	<div class="content mt-3">
		<div class="animated fadeIn">
			<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">
				<div class="col-lg-5">
					<div class="card">
						<div class="card-header">
							<strong>Form</strong><small> Input</small>
						</div>
						<div class="card-body">
							<?php echo form_open('Desa/insert'); ?>
							<div class="form-group">
								<label for="Kecamatan" class="control-label mb-1">Kecamatan</label>
								<select class="form-control" name="kecamatan">
									<?php foreach ($kecamatan as $value): ?>
										<option value="<?php echo $value->id ?>"><?php echo $value->nama_kecamatan ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label for="nama_desa" class="control-label mb-1">Nama Desa</label>
								<input id="nama_desa" id="nama_desa" name="nama_desa" type="text" class="form-control">
							</div>
							<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="card">
						<div class="card-header">
							<strong>Data</strong><small> Desa</small>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<td>Nama Kecamatan</td>
										<td>Nama Desa</td>
										<td>Aksi</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($desa as $value): ?>
										<tr>
											<td><?php echo $value->nama_kecamatan ?></td>
											<td><?php echo $value->nama_desa ?></td>
											<td>
												<a href="<?php echo site_url('Desa/edit/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
												<a href="<?php echo site_url('Desa/delete/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-minus-circle"></i>&nbsp; Hapus</a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>