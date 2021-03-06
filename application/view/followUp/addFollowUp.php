<?php if(isset($added)){echo "<script>
		alert('".$added."');
		location.href='".URL . "followUp/counsellorsFollowUp'
	</script>";}?>

<script src="<?php echo URL; ?>js/jquery.js"></script>
<script src="<?php echo URL; ?>js/validation/additional-methods.min.js"></script>
<script src="<?php echo URL; ?>js/validation/jquery.validate.min.js"></script>
<script src="<?php echo URL; ?>js/bootstrap-datepicker.js"></script>

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="jumbotron">
			<h3><?php echo $lead->lead_firstname." ".$lead->lead_middlename." ".$lead->lead_lastname;?></h3>
			<p><label>Email: &nbsp </label><?php echo $lead->email;?></p>
			<p><label>Phone: &nbsp </label><?php echo $lead->contact;?></p>
			<p><label>Address: &nbsp </label><?php echo $lead->address;?></p>
			<p><label>Qualification: &nbsp </label><?php echo $lead->qualification;?></p>
			<p><label>Stream: &nbsp </label><?php echo $lead->stream;?></p>
			
			<form id="form_addFollowUp" class="form-horizontal" method="post" action="<?php echo URL; ?>followUp/addFollowUpAction">
				<input type="hidden" name="lead_id" value="<?php echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>" />
			  
			  <div class="form-group">
			    <label for="nextfollowupDate" class="col-sm-2 control-label">Next FollowUp date</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="nextfollowupDate" name="nextfollowupDate" placeholder="Follow Up date" required="required" value="<?php echo htmlspecialchars($lead->nextfollowupDate, ENT_QUOTES, 'UTF-8'); ?>">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="status" class="col-sm-2 control-label">Status</label>
			    <div class="col-sm-10">
			    	<select id="status" name="status" class="form-control">
							<option value="active" <?php if($lead->status == 'active') { ?> selected="selected"<?php } ?>>Active</option>
							<option value="dismissed" <?php if($lead->status == 'dismissed') { ?> selected="selected"<?php } ?>>Dismissed</option>
							<option value="postponed" <?php if($lead->status == 'postponed') { ?> selected="selected"<?php } ?>>Postponed</option>
					</select>
			    </div>
			  </div>
			  <div class="form-group">
			  	<label for="feedback" class="col-sm-2 control-label">Feedback</label>
			  	<div class="col-sm-10">
			  		<textarea name="feedback" class="form-control" rows="5"></textarea>
			  	</div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button id="submit" name="submit_editLead" type="submit" class="btn btn-primary">Add Follow Up</button>
			    </div>
			  </div>
		</form>
		</div>
	</div>
	<div id="addCounsellorForm" class="addCounsellorForm">
		
		
	</div>
</div>

<script>
$("#form_addLead").validate({
	rules:{
		contact: {
		      required: true,
		      digits: true,
		      maxlength:10,
			  minlength:10
		    },
		password:{
			required:true,
			minlength:5
		},
		email:{
			email:true
			}
	}
});
$('#nextfollowupDate').datepicker({
	format: 'yyyy/mm/dd',
	orientation: "auto"
});
</script>
