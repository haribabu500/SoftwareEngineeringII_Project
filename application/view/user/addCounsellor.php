<div id="page-wrapper">
	<div id="addCounsellorForm" class="addCounsellorForm">
		<form id="form_addCounselor" class="form-horizontal" method="post" action="<?php echo URL; ?>user/addCounsellorAction">
			<legend>Add Counselor page</legend>
		  <div class="form-group">
		    <label for="user_firstname" class="col-sm-2 control-label" >First Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="user_firstname" name="user_firstname" placeholder="Firstname" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="user_middlename" class="col-sm-2 control-label">Middle Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="user_middlename" name="user_middlename" placeholder="Middle Name">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="user_lastname" class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="user_lastname" name="user_lastname" placeholder="Last Name" required="required">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="email" class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="contact" class="col-sm-2 control-label">Contact</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="address" class="col-sm-2 control-label">Address</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="username" class="col-sm-2 control-label">Username</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="password" class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button id="submit" name="submit_addCounsellor" type="submit" class="btn btn-primary">Add Counsellor</button>
		    </div>
		  </div>
		</form>
	</div>
</div>
<script src="<?php echo URL; ?>js/jquery.js"></script>
<script src="<?php echo URL; ?>js/validation/additional-methods.min.js"></script>
<script src="<?php echo URL; ?>js/validation/jquery.validate.min.js"></script>
<script>
$("#form_addCounselor").validate({
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
