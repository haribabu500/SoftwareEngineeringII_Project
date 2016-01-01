<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo URL; ?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
    	<div class="container-fluid">
	    	<div class="loginbox" style="background: white; border-radius:10px; width: 70%;padding:20px; margin:50px;">
				<div class="page-wrapper">
					<form action="<?php echo URL; ?>login/checkLogin" method="post">
					<legend>Login</legend>
					  <div class="form-group">
					    <label for="username">Username</label>
					    <input type="text" class="form-control" name="username" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>