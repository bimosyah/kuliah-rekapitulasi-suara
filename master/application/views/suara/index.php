<?php $this->load->view('header'); ?>
<div id="right-panel" class="right-panel">
	<?php $this->load->view('top-panel'); ?>
	
	<div class="content mt-3">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<strong>Form</strong><small> Input</small>
						</div>
						<div class="card-body">
							<h5 class="pb-2 display-5 text-center">Perolehan Data Keseluruhan</h5>
							<hr>
							<div id="chart_div">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<strong>Form</strong><small> Input</small>
						</div>
						<div class="card-body">
							<h5 class="pb-2 display-5 text-center">Perolehan Data per Kecamatan</h5>
							<hr>
							<select class="form-control">
								<option value="">Pilih Kecamatan</option>
								<?php foreach ($kecamatan as $value): ?>
									<option value="<?php echo $value->id ?>"><?php echo $value->nama_kecamatan ?></option>
								<?php endforeach ?>
							</select>
							<div id="chart_div_kecamatan">
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header">
							<strong>Form</strong><small> Input</small>
						</div>
						<div class="card-body">
							<h5 class="pb-2 display-5 text-center">Tingkat golput</h5>
							<hr>
							<div id="chart_div_golput">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart1);

	function drawChart1() {

		var jsonData = $.ajax({
			url: "<?php echo base_url('Suara/getSuara') ?>",
			dataType: "json",
			async:false
		}).responseText;

		var data = new google.visualization.DataTable(jsonData);
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, {width: 400, height: 200});

		var jsonDataGolput = $.ajax({
			url: "<?php echo base_url('Suara/getGolput') ?>",
			dataType: "json",
			async:false
		}).responseText;

		var data2 = new google.visualization.DataTable(jsonDataGolput);
		var chart2 = new google.visualization.PieChart(document.getElementById('chart_div_golput'));
		chart2.draw(data2, {width: 430, height: 200});

		// var data2 = new google.visualization.DataTable(jsonDataGolput);
		// var chart2 = new google.visualization.PieChart(document.getElementById('chart_div_golput'));
		// chart2.draw(data, {width: 400, height: 200});

		// var chart3 = new google.visualization.PieChart(document.getElementById('chart_div_kecamatan'));
		// chart3.draw(data, {width: 400, height: 200});
	}

	function drawChart2() {
		var jsonDataGolput = $.ajax({
			url: "<?php echo base_url('Suara/getGolput') ?>",
			dataType: "json",
			async:false
		}).responseText;

		var data2 = new google.visualization.DataTable(jsonDataGolput);
		var chart2 = new google.visualization.PieChart(document.getElementById('chart_div_golput'));
		chart2.draw(data2, {width: 430, height: 200});
	}
	

</script>
<?php $this->load->view('footer'); ?>