<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Alerts | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">
    
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/toast/jquery.toast.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Alerts <small>Bootstrap alerts, Toast Notifications and notes</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Pages</a></li>
                    <li class="active">Blank Page</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Alert Without Close</h3>
                            </div>
                            <div class="panel-body">

                                <div class="alert alert-success" role="alert"> 
                                    <strong>Well done!</strong> You successfully read this important alert message. 
                                </div>

                                <div class="alert alert-info" role="alert"> 
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important. 
                                </div>

                                <div class="alert alert-warning" role="alert"> 
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good. 
                                </div>

                                <div class="alert alert-danger" role="alert"> 
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again. 
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Alert With Close</h3>
                            </div>
                            <div class="panel-body">

                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <strong>Well done!</strong> You successfully read this important alert message. 
                                </div>

                                <div class="alert alert-info" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important. 
                                </div>

                                <div class="alert alert-warning" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good. 
                                </div>

                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <strong>Oh snap!</strong> Change a few things up and try submitting again. 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Alert Without Close</h3>
                            </div>
                            <div class="panel-body">

                                <div class="alert alert-block alert-success fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <h4 class="alert-heading">Success !</h4>
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    <p class="actions">
                                        <a class="btn btn-danger" href="javascript:;"> Cancel </a>
                                        <a class="btn btn-primary" href="javascript:;"> Ok </a>
                                    </p>
                                </div>

                                <div class="alert alert-block alert-info fade in">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <h4 class="alert-heading">Info!</h4>
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    <p class="actions">
                                        <a class="btn btn-danger" href="javascript:;"> Cancel </a>
                                        <a class="btn btn-primary" href="javascript:;"> Ok </a>
                                    </p>
                                </div>

                                <div class="alert alert-block alert-warning fade in">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <h4 class="alert-heading">Warning!</h4>
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    <p class="actions">
                                        <a class="btn btn-danger" href="javascript:;"> Cancel </a>
                                        <a class="btn btn-primary" href="javascript:;"> Ok </a>
                                    </p>
                                </div>

                                <div class="alert alert-block alert-danger fade in">
                                    <button type="button" class="close" data-dismiss="alert"><i class="ti-close"></i></button>
                                    <h4 class="alert-heading">Error!</h4>
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                    <p class="actions">
                                        <a class="btn btn-danger" href="javascript:;"> Cancel </a>
                                        <a class="btn btn-primary" href="javascript:;"> Ok </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Notes</h3>
                            </div>
                            <div class="panel-body">

                                <div class="callout callout-success">
                                    <h4>Examples</h4>
                                    <p>For better understanding, have a look at the <a href="#">off canvas slide in menu</a>, <a href="#">off canvas push menu</a> and <a href="#">off canvas reveal menu</a> exapmles.</p>
                                </div>

                                <div class="callout callout-info">
                                    <h4>Examples</h4>
                                    <p>For better understanding, have a look at the <a href="#">off canvas slide in menu</a>, <a href="#">off canvas push menu</a> and <a href="#">off canvas reveal menu</a> exapmles.</p>
                                </div>

                                <div class="callout callout-warning">
                                    <h4>Examples</h4>
                                    <p>For better understanding, have a look at the <a href="#">off canvas slide in menu</a>, <a href="#">off canvas push menu</a> and <a href="#">off canvas reveal menu</a> exapmles.</p>
                                </div>

                                <div class="callout callout-danger">
                                    <h4>Examples</h4>
                                    <p>For better understanding, have a look at the <a href="#">off canvas slide in menu</a>, <a href="#">off canvas push menu</a> and <a href="#">off canvas reveal menu</a> exapmles.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Toast Alerts</h3>
                            </div>
                            <div class="panel-body">

                                <div class="col-xs-12 col-md-6 col-lg-6">
                                    <h4>Alerts</h4>
                                    <div class="callout callout-info">
                                        <h4>Position</h4>
                                        <p>bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values</p>
                                    </div>
                                    <a href="javascript:;" class="btn btn-danger toast-top-left">top-left</a>
                                    <a href="javascript:;" class="btn btn-danger toast-top-right">top-right</a>
                                    <a href="javascript:;" class="btn btn-danger toast-bottom-left">bottom-left</a>
                                    <a href="javascript:;" class="btn btn-danger toast-bottom-right">bottom-right</a>
                                </div>

                                <div class="col-xs-12 col-md-6 col-lg-6">
                                    <h4>Icons</h4>
                                    <div class="callout callout-info">
                                        <h4>Type of toast icon</h4>
                                        <p>error, success, infi, warning</p>
                                    </div>
                                    <a href="javascript:;" class="btn btn-danger toast-error">Error</a>
                                    <a href="javascript:;" class="btn btn-info toast-info">Info</a>
                                    <a href="javascript:;" class="btn btn-warning toast-warning">Warning</a>
                                    <a href="javascript:;" class="btn btn-success toast-success">Success</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                
            </div>  <!--END: Content Wrap-->
            
        </div>  <!-- END: Main Container -->
        
        <footer class="footer"> <!-- START: Footer -->
            &copy; 2016 <b>Big Ben</b> Admin
        </footer>   <!-- END: Footer -->
        
    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>
    <script type="text/javascript" src="assets/plugins/toast/jquery.toast.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/cmp-alerts.js"></script>
</body>
</html>