<div id="page-wrapper">
	<h3>Report details goes here</h3>
	<canvas id="canvas" height="150" width="300"></canvas>
			<script src="<?php echo URL; ?>js/Chart.js"></script>
			 <script src="<?php echo URL; ?>js/jquery.js"></script>
   			<script>
   			jQuery(document).ready(function() {
					var barChartData = {
						    labels: ["January", "February", "March", "April", "May", "June", "July"],
						    datasets: [
						        {
						            label: "My First dataset",
						            fillColor: "rgba(220,220,220,0.5)",
						            strokeColor: "rgba(220,220,220,0.8)",
						            highlightFill: "rgba(220,220,220,0.75)",
						            highlightStroke: "rgba(220,220,220,1)",
						            data: [65, 59, 80, 81, 56, 55, 40]
						        },
						        {
						            label: "My Second dataset",
						            fillColor: "rgba(151,187,205,0.5)",
						            strokeColor: "rgba(151,187,205,0.8)",
						            highlightFill: "rgba(151,187,205,0.75)",
						            highlightStroke: "rgba(151,187,205,1)",
						            data: [28, 48, 40, 19, 86, 27, 90]
						        }
						    ]
						};
						var ctx = document.getElementById("canvas").getContext("2d");
						new Chart(ctx).Bar(barChartData, {
							responsive : true
						});
   			});
	</script>
</div>