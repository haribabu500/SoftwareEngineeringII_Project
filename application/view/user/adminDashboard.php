        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary" id="<?php echo URL; ?>user/viewCounsellors">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $num_of_counsellors ?></div>
                                        <div>Total Counsellors</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL; ?>user/viewCounsellors">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow" id="<?php echo URL; ?>user/addCounsellor">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $num_of_counsellors?></div>
                                        <div>Total Counsellor</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL; ?>user/addCounsellor">
                                <div class="panel-footer">
                                    <span class="pull-left">Add Counsellor</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-6">
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
	            	<div class="col-sm-6">
	            		<h3>Counsellor Wise Leads</h3>
	            		<canvas id="canvas" height="150" width="300"></canvas>
	            	</div>
	            	<div class="col-sm-6"></div>
	            	
	            </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<script src="<?php echo URL; ?>js/Chart.js"></script>
<script src="<?php echo URL; ?>js/jquery.js"></script>
<script>
	$(".panel").click(function(){
		location.href=$(this).attr("id");
		});
</script>

<script src="<?php echo URL; ?>js/Chart.js"></script>
 <script src="<?php echo URL; ?>js/jquery.js"></script>
<script>
	jQuery(document).ready(function() {
		var x=[];
		var y=[];
		$.ajax({
			url:"<?php echo URL;?>report/getCounsellorsLead",
			dataType: "json",
			success:function(data){
				$.each(data, function(key, value){
				    	x.push(String(key));
				    	y.push(Number(value));
				});
				
				var barChartData = {
						labels: x,
						datasets: [
								{
						            label: "My First dataset",
						            fillColor: "rgba(66,139,202,0.2)",
						            strokeColor: "rgba(66,139,202,1)",
						            pointColor: "rgba(66,139,202,1)",
						            data:y
						        }
										        
							    ]
						};
				var ctx = document.getElementById("canvas").getContext("2d");
				new Chart(ctx).Line(barChartData, {
				responsive : true
				});
			}
		});
		
   	});
</script>