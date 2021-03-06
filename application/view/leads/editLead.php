<?php if(isset($added)){echo "<script>
		alert('".$added."');
		location.href='".URL . "leads/viewCounsellorsLeads'
	</script>";}?>
<script src="<?php echo URL; ?>js/jquery.js"></script>
<script src="<?php echo URL; ?>js/validation/additional-methods.min.js"></script>
<script src="<?php echo URL; ?>js/validation/jquery.validate.min.js"></script>
<script src="<?php echo URL; ?>js/bootstrap-datepicker.js"></script>

<div id="page-wrapper">
	<div id="addCounsellorForm" class="addCounsellorForm">
		
		<form id="form_addLead" class="form-horizontal" method="post" action="<?php echo URL; ?>leads/editLeadAction">
			<legend>Edit Lead page</legend>
			<input type="hidden" name="lead_id" value="<?php echo htmlspecialchars($lead->lead_id, ENT_QUOTES, 'UTF-8'); ?>" />
			<input type="hidden" name="user_id" value="<?php echo htmlspecialchars($lead->user_id, ENT_QUOTES, 'UTF-8'); ?>" />
			
			
			
		  <div class="form-group">
		    <label for="lead_firstname" class="col-sm-2 control-label" >First Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_firstname" name="lead_firstname" placeholder="Firstname" required="required" value="<?php echo htmlspecialchars($lead->lead_firstname, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="lead_middlename" class="col-sm-2 control-label">Middle Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_middlename" name="lead_middlename" placeholder="Middle Name" value="<?php echo htmlspecialchars($lead->lead_middlename, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="lead_lastname" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_lastname" name="lead_lastname" placeholder="Last Name" required="required" value="<?php echo htmlspecialchars($lead->lead_lastname, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required" value="<?php echo htmlspecialchars($lead->email, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="contact" class="col-sm-2 control-label">Contact</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required="required" value="<?php echo htmlspecialchars($lead->contact, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="address" class="col-sm-2 control-label">Address</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo htmlspecialchars($lead->address, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="qualification" class="col-sm-2 control-label">Qualification</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification" required="required" value="<?php echo htmlspecialchars($lead->qualification, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="stream" class="col-sm-2 control-label">Stream</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="stream" name="stream" placeholder="Stream" required="required" value="<?php echo htmlspecialchars($lead->stream, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="semester" class="col-sm-2 control-label">Semester</label>
		    <div class="col-sm-10">
		      <select id="semester" name="semester" class="form-control">
						<option value="1" <?php if($lead->semester == '1') { ?> selected="selected"<?php } ?>>Semester 1</option>
						<option value="2" <?php if($lead->semester == '2') { ?> selected="selected"<?php } ?>>Semester 2</option>
						<option value="3" <?php if($lead->semester == '3') { ?> selected="selected"<?php } ?>>Semester 3</option>
						<option value="4" <?php if($lead->semester == '4') { ?> selected="selected"<?php } ?>>Semester 4</option>
						<option value="5" <?php if($lead->semester == '5') { ?> selected="selected"<?php } ?>>Semester 5</option>
						<option value="6" <?php if($lead->semester == '6') { ?> selected="selected"<?php } ?>>Semester 6</option>
				</select>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="nextfollowupDate" class="col-sm-2 control-label">Follow Up date</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="nextfollowupDate" name="nextfollowupDate" placeholder="Follow Up date" required="required" value="<?php echo htmlspecialchars($lead->nextfollowupDate, ENT_QUOTES, 'UTF-8'); ?>">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="status" class="col-sm-2 control-label">Status</label>
		    <div class="col-sm-10">
		    	<select id="status" name="status" class="form-control">
						<option value="active" <?php if($lead->status == 'active') { ?> selected="selected"<?php } ?>>Active</option>
						<option value="expired" <?php if($lead->status == 'expired') { ?> selected="selected"<?php } ?>>Expired</option>
						<option value="dismissed" <?php if($lead->status == 'dismissed') { ?> selected="selected"<?php } ?>>Dismissed</option>
						<option value="postponed" <?php if($lead->status == 'postponed') { ?> selected="selected"<?php } ?>>Postponed</option>
				</select>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button id="submit" name="submit_editLead" type="submit" class="btn btn-primary">Update Lead</button>
		    </div>
		  </div>
		</form>
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
	format: 'yyyy/mm/dd'
});

</script>
