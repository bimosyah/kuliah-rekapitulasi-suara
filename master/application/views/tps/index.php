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
							<?php echo form_open('TPS/insert'); ?>
							<div class="form-group">
								<label for="Desa" class="control-label mb-1">Desa</label>
								<select class="form-control" name="desa">
									<?php foreach ($desa as $value): ?>
										<option value="<?php echo $value->id ?>"><?php echo $value->nama_desa ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label for="nama_tps" class="control-label mb-1">Nama TPS</label>
								<input id="nama_tps" id="nama_tps" name="nama_tps" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="jml_dpt" class="control-label mb-1">Jumlah DPT</label>
								<input id="jml_dpt" id="jml_dpt" name="jml_dpt" type="text" class="form-control">
							</div>
							<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="card">
						<div class="card-header">
							<strong>Data</strong><small> TPS</small>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<td>Nama Desa</td>
										<td>Nama TPS</td>
										<td>Jumlah DPT</td>
										<td>Aksi</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($tps as $value): ?>
										<tr>
											<td><?php echo $value->nama_desa ?></td>
											<td><?php echo $value->nama_tps ?></td>
											<td><?php echo $value->jml_dpt ?></td>
											<td>
												<a href="<?php echo site_url('TPS/edit/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
												<a href="<?php echo site_url('TPS/delete/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-minus-circle"></i>&nbsp; Hapus</a>
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
