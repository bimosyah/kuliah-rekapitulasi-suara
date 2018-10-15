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
							<strong>Data</strong><small> Petugas</small>
						</div>
						<div class="card-body">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<td>Nama Petugas</td>
										<td>Username</td>
										<td>Password</td>
									</tr>									
								</thead>
								<tbody>
									<?php foreach ($login as $value): ?>
										<tr>
											<td><?php echo $value->nama_petugas ?></td>
											<td><?php echo $value->username ?></td>
											<td><?php echo $value->password ?></td>
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
