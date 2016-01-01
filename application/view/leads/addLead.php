<script src="<?php echo URL; ?>js/jquery.js"></script>
<script src="<?php echo URL; ?>js/validation/additional-methods.min.js"></script>
<script src="<?php echo URL; ?>js/validation/jquery.validate.min.js"></script>

<div id="page-wrapper">
	<div id="addCounsellorForm" class="addCounsellorForm">
		<form id="form_addLead" class="form-horizontal" method="post" action="<?php echo URL; ?>leads/addLeadAction">
			<legend>Add Lead page</legend>
			
			<input type="hidden" name="user_id" value="<?php echo $_SESSION["user"]->user_id?>">		    
		    
		  <div class="form-group">
		    <label for="user_firstname" class="col-sm-2 control-label" >First Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_firstname" name="lead_firstname" placeholder="Firstname" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="user_middlename" class="col-sm-2 control-label">Middle Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_middlename" name="lead_middlename" placeholder="Middle Name">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="user_lastname" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="lead_lastname" name="lead_lastname" placeholder="Last Name" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="contact" class="col-sm-2 control-label">Contact</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required="required">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="address" class="col-sm-2 control-label">Address</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="qualification" class="col-sm-2 control-label">Qualification</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Qualification" required="required">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="stream" class="col-sm-2 control-label">Stream</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="stream" name="stream" placeholder="Stream" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="semester" class="col-sm-2 control-label">Semester</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="nextfollowupDate" class="col-sm-2 control-label">Follow Up date</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="nextfollowupDate" name="nextfollowupDate" placeholder="Follow Up date" required="required">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="status" class="col-sm-2 control-label">Status</label>
		    <div class="col-sm-10">
		    	<select id="status" name="status" class="form-control">
						<option value="active">Active</option>
						<option value="expired">Expired</option>
						<option value="dismissed">Dismissed</option>
						<option value="postponed">Postponed</option>
				</select>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button id="submit" name="submit_addLead" type="submit" class="btn btn-primary">Add Lead</button>
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

</script>
