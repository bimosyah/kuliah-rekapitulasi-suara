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
							<?php echo form_open('Calon/update/'.$this->uri->segment(3)); ?>
							<div class="form-group">
								<label for="no_urut" class="control-label mb-1">No Urut</label>
								<input value="<?php echo $calon[0]->no_urut ?>" id="no_urut" id="no_urut" name="no_urut" type="text" class="form-control" >
							</div>
							<div class="form-group">
								<label for="nama_calon" class="control-label mb-1">Nama Calon</label>
								<input value="<?php echo $calon[0]->nama_calon ?>" id="nama_calon" id="nama_calon" name="nama_calon" type="text" class="form-control">
							</div><div class="form-group">
								<label for="nama_wakil_calon" class="control-label mb-1">Nama Wakil</label>
								<input value="<?php echo $calon[0]->nama_wakil_calon ?>" id="nama_wakil_calon" id="nama_wakil_calon" name="nama_wakil_calon" type="text" class="form-control">
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