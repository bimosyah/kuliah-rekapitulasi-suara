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
							<strong>Form</strong><small></small>
						</div>
						<div class="card-body">
							<h4>Nama Kelurahan = <?php echo $nama_desa ?></h4>
							<h4>Jumlah TPS = <?php echo $jumlah_tps ?></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php echo $form_input ?>
			</div>
		</div>		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
		
		$.ajax({
			url:"<?php echo site_url('Calon/getCalon') ?>",
			method:"GET",
	        dataType: "html",
	        success:function(response){
	        	for (var i = 0; i < 50; i++) {
	        		$('#calon'+i).html(response);
	        	}
	        }
	    });
	});
</script>

<?php $this->load->view('footer'); ?>


