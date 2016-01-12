
<div id="page-wrapper">
<h3>Semester Wise Leads Report</h3>
<div class="row">
<div class="col-sm-6">
<canvas id="canvas" height="500" width="350"></canvas>
<script src="<?php echo URL; ?>js/Chart.js"></script>
<script src="<?php echo URL; ?>js/jquery.js"></script>
<script>
jQuery(document).ready(function() {
	var x=[];
	var y=[];
	$.each(<?php echo $arr?>, function(key, value){
    	x.push("Semester"+String(key));
    	y.push(Number(value));
	});
	
	var barChartData = {
		labels: x,
		datasets: [
		{
			label: "hj",
			fillColor : "rgba(25,26,255,1)",
			strokeColor : "rgba(220,220,220,0.8)",
			highlightFill: "rgba(25,26,255,0.75)",
			highlightStroke: "rgba(220,220,220,1)",
			data: y
		},
		
		]
	};
	var ctx = document.getElementById("canvas").getContext("2d");
	new Chart(ctx).Bar(barChartData, {
		responsive : false
	});
});
</script>
</div>
</div>
</div>