<?php 
	if(!isset($_SESSION["user"])){
		header('location: ' . URL . '');
	}
	
	if(isset($_SESSION["user"])){
		$user=$_SESSION["user"];
		if($user->role=="admin"){
			header('location: ' . URL . 'user/adminDashboard');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALMS</title>
	
	<link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo URL; ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo URL; ?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL; ?>font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="<?php echo URL; ?>js/jquery.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL; ?>user/counsellorsDashboard"><?php echo $_SESSION["user"]->user_firstname." ".$_SESSION["user"]->user_middlename.$_SESSION["user"]->user_lastname?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION["user"]->user_firstname." ".$_SESSION["user"]->user_middlename.$_SESSION["user"]->user_lastname?><b class="caret"></b></a>
                    <ul class="dropdown-menu" style="min-width:180px;">
<!--                         <li> -->
<!--                             <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a> -->
<!--                         </li> -->
<!--                         <li> -->
<!--                             <a href="#"><i class="fa fa-fw fa-gear"></i> Change Password</a> -->
<!--                         </li> -->
<!--                         <li class="divider"></li> -->
                        <li>
                            <a href="<?php echo URL; ?>login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo URL; ?>user/counsellorsDashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Leads <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo URL; ?>leads/addLead">Add Lead</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>leads/viewCounsellorsLeads">View My Leads</a>
                            </li>
                            <li>
                                <a href="<?php echo URL; ?>leads/viewAllLeads">View All Leads</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>followUp/counsellorsFollowUp"><i class="fa fa-fw fa-phone"></i> Follow Ups</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>followUp/viewFeedbacks"><i class="fa fa-fw fa-sticky-note"></i> Feedbacks</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>student/viewStudents"><i class="fa fa-fw fa-graduation-cap"></i> Students</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        

   