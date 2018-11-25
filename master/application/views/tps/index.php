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
								<label for="Desa" class="control-label mb-1">Kecamatan</label>
								<select class="form-control" id="dropdown_kecamatan">
									<option value="">Pilih Kecamatan</option>
									<?php foreach ($kecamatan as $value): ?>
										<option value="<?php echo $value->id ?>"><?php echo $value->nama_kecamatan ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<label for="Desa" class="control-label mb-1">Kelurahan</label>
								<select class="form-control" id="dropdown_desa" name="desa">
									<option value="">Pilih Kelurahan</option>
								</select>
							</div>
							<div class="form-group">
								<label for="nama_tps" class="control-label mb-1">Nama TPS</label>
								<input id="nama_tps" id="nama_tps" name="nama_tps" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="jml_dpt" class="control-label mb-1">Lokasi</label>
								<input name="lokasi" type="text" class="form-control">
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
							<table id="example" style="width:100%">
								<thead>
									<tr>
										<td>Kecamatan</td>
										<td>Kelurahan</td>
										<td>TPS</td>
										<td>Lokasi</td>
										<td>DPT</td>
										<td>Aksi</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($tps as $value): ?>
										<tr>
											<td><?php echo $value->nama_kecamatan ?></td>
											<td><?php echo $value->nama_desa ?></td>
											<td><?php echo $value->nama_tps ?></td>
											<td><?php echo $value->lokasi ?></td>
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

<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
		
		$('#dropdown_kecamatan').change(function(){
			var id_kecamatan = $('#dropdown_kecamatan').val();
			if (id_kecamatan != '') {
				$.ajax({
					url:"<?php echo site_url('TPS/getDesa') ?>",
					method:"POST",
					data:{id_kecamatan:id_kecamatan},
					success:function(data){
						$('#dropdown_desa').html(data);
					}
				})
			}else {
				$('#dropdown_desa').html('<option value="">Pilih Kelurahan</option>');
			}
		})
	});
</script>

<?php $this->load->view('footer'); ?>
