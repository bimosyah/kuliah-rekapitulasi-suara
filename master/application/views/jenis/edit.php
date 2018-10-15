<?php $this->load->view('header'); ?>
<div id="right-panel" class="right-panel">
	<?php $this->load->view('top-panel'); ?>
	
	<div class="content mt-3">
		<div class="animated fadeIn">
			<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<strong>Form</strong><small> Input</small>
						</div>
						<div class="card-body">
							<?php echo form_open('Jenis/update/'.$this->uri->segment(3)); ?>
							<div class="form-group">
								<label for="nama_pemilu" class="control-label mb-1">Nama Pemilu</label>
								<input value="<?php echo $jenis[0]->nama_pemilu ?>" id="nama_pemilu" id="nama_pemilu" name="nama_pemilu" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="tgl" class="control-label mb-1">Tanggal</label>
								<input value="<?php echo $jenis[0]->tgl ?>" id="tgl" id="tgl" name="tgl" type="date" class="form-control">
							</div>
							<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>