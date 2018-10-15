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
							<?php echo form_open('Calon/insert'); ?>
							<div class="form-group">
								<label for="no_urut" class="control-label mb-1">No Urut</label>
								<input id="no_urut" name="no_urut" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="nama_calon" class="control-label mb-1">Nama Calon</label>
								<input id="nama_calon" name="nama_calon" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="nama_wakil_calon" class="control-label mb-1">Nama Wakil</label>
								<input id="nama_wakil_calon"  name="nama_wakil_calon" type="text" class="form-control">
							</div>
							<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="card">
						<div class="card-header">
							<strong>Data</strong><small> Calon</small>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<td>Nomor Urut</td>
										<td>Calon</td>
										<td>Wakil Calon</td>
										<td>Aksi</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($calon as $value): ?>
										<tr>
											<td><?php echo $value->no_urut ?></td>
											<td><?php echo $value->nama_calon ?></td>
											<td><?php echo $value->nama_wakil_calon ?></td>
											<td>
												<a href="<?php echo site_url('Calon/edit/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
												<a href="<?php echo site_url('Calon/delete/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-minus-circle"></i>&nbsp; Hapus</a>
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