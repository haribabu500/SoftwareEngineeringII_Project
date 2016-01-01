<div id="page-wrapper">
	<div class="container-fluid">	
				<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small><?php echo $_SESSION['user']->user_firstname." ".$_SESSION['user']->user_middlename." ".$_SESSION['user']->user_lastname?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->		 
				<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary" id="<?php echo URL; ?>followUp/counsellorsFollowUp">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-phone fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo$followUps_to_make ?></div>
                                        <div>Todays Follow Ups</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL; ?>followUp/counsellorsFollowUp">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green" id="<?php echo URL; ?>leads/viewCounsellorsLeads">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $myleads_count?></div>
                                        <div>My Leads</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL; ?>leads/viewCounsellorsLeads">
                                <div class="panel-footer">
                                    <span class="pull-left">View my Leads</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow" id="<?php echo URL; ?>leads/addLead">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total_count?></div>
                                        <div>Total Leads</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo URL; ?>leads/addLead">
                                <div class="panel-footer">
                                    <span class="pull-left">Add Lead</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red" id="<?php echo URL; ?>followUp/viewFeedbacks">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-sticky-note fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Feedbacks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Feedbacks</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
	                <!-- /.row -->
	            <div class="row">
	            	<div class="col-sm-6">
	            		<canvas id="canvas" height="150" width="300"></canvas>
	            	</div>
	            	<div class="col-sm-6"></div>
	            	
	            </div>
	</div>
</div>
<!-- page wrapper -->
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
			url:"<?php echo URL;?>report/getDailyLead",
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