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
							<?php echo form_open('Jenis/insert'); ?>
							<div class="form-group">
								<label for="nama_pemilu" class="control-label mb-1">Nama Pemilu</label>
								<input id="nama_pemilu" id="nama_pemilu" name="nama_pemilu" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="tgl" class="control-label mb-1">Tanggal</label>
								<input id="tgl" id="tgl" name="tgl" type="date" class="form-control">
							</div>
							<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<div class="card">
						<div class="card-header">
							<strong>Data</strong><small> Jenis pemilu</small>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<td>Nama Pemilu</td>
										<td>Tanggal</td>
										<td>Aksi</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($jenis as $value): ?>
										<tr>
											<td><?php echo $value->nama_pemilu ?></td>
											<td><?php echo $value->tgl ?></td>
											<td>
												<a href="<?php echo site_url('Jenis/edit/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-pencil"></i>&nbsp; Edit</a>
												<a href="<?php echo site_url('Jenis/delete/'.$value->id) ?>" class="btn btn-link"><i class="fa fa-minus-circle"></i>&nbsp; Hapus</a>
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