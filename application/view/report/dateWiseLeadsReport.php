<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-2">
			<div class="choose">
				<select id="select">
					<option id="week">This Week</option>
					<option id="month">This Month</option>
					<option id="custom">Custom date</option>
				</select>
			</div>
		</div>
		<div id="fromToDate" class="col-sm-3 hidden">
			<form class="form-horizontal">
			<div class="form-group">
			    <label class="col-sm-2 control-label">From Date</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="fromDate">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">To Date</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="toDate">
			    </div>
			</div>	
			</form>
		</div>
		<div class="col-sm-7"></div>
	</div>
	<div id="display">
		
	</div>
</div>
<script>
	
	$('select').click(function(){
		var id=$("#select").find(":selected").attr("id");
		//alert(id);
		$("#display").html(id);
		if(id=="week"){
			var url="<?php echo URL?>report/getWeeklyReport";
			//alert(url);
			$.ajax({
				url:url,
				success:function(data){
					$("#display").html(data);
				},
				error:function(data){
				}
				});
		}
		if(id=="month"){
			var url="<?php echo URL?>report/getMonthlyReport";
			//alert(url);
			$.ajax({
				url:url,
				success:function(data){
					$("#display").html(data);
				},
				error:function(data){
				}
				});
		}
		if(id=="custom"){
			$("#fromToDate").removeClass("hidden");
		}
		else{
			$("#fromToDate").addClass("hidden");
		}
	});
	
</script>
<script>
$.ajax({
	url:"<?php echo URL?>report/getWeeklyReport",
	success:function(data){
		$("#display").html(data);
	},
	error:function(data){
	}
	});
</script>