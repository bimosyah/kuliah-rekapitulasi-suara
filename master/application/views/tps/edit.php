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
							<?php echo form_open('TPS/update/'.$this->uri->segment(3)); ?>
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
								<input value="<?php echo $tps[0]->nama_tps ?>" id="nama_tps" id="nama_tps" name="nama_tps" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="jml_dpt" class="control-label mb-1">Jumlah DPT</label>
								<input value="<?php echo $tps[0]->jml_dpt ?>" id="jml_dpt" id="jml_dpt" name="jml_dpt" type="text" class="form-control">
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
