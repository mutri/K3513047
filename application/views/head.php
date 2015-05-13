<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi FOSS Data</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo base_url('assets/css/custom-styles.css')?>" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Foss Data</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if ($this->uri->segment(2)=='insert') echo "class='active-menu'"?>>
                        <a href="<?php echo base_url('home/insert')?>"><i class="fa fa-desktop"></i> Insert</a>
                    </li>
					<li <?php if ($this->uri->segment(2)=='select') echo "class='active-menu'"?>>
                        <a href="<?php echo base_url('home/select')?>"><i class="fa fa-bar-chart-o"></i> Select</a>
                    </li>
                    <li <?php if ($this->uri->segment(2)=='update') echo "class='active-menu'"?>>
                        <a href="<?php echo base_url('home/update')?>"><i class="fa fa-qrcode"></i> Update</a>
                    </li>
                    
                    <li <?php if ($this->uri->segment(2)=='delete') echo "class='active-menu'"?>>
                        <a href="<?php echo base_url('home/delete')?>"><i class="fa fa-table"></i> Delete</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->