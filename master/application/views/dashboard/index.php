<?php $this->load->view('header'); ?>
<div id="right-panel" class="right-panel">
	<?php $this->load->view('top-panel'); ?>
	
	<div class="content mt-3">
		<div class="animated fadeIn">
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Calon</div>
								<div class="stat-digit"><?php echo $calon ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Kecamatan</div>
								<div class="stat-digit"><?php echo $kecamatan ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Kelurahan</div>
								<div class="stat-digit"><?php echo $desa ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">TPS</div>
								<div class="stat-digit"><?php echo $tps ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="stat-widget-one">
							<div class="stat-icon dib"><i class="ti-user text-success border-success"></i></div>
							<div class="stat-content dib">
								<div class="stat-text">Petugas</div>
								<div class="stat-digit"><?php echo $petugas ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

<?php $this->load->view('footer'); ?>


