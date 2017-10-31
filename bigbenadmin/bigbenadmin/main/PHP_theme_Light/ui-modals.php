<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Modal View | Big Ben Admin</title>
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

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Modal View <small>Bootstrap & Custom Modal</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">UI Elements</a></li>
                    <li class="active">Modal View</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Default Modal</h3>
                            </div>
                            <div class="panel-body">

                                <div class="callout callout-warning">
                                    <h4>Optional sizes and colors</h4>
                                    <p>Modals having Optional sizes and bootstrap validation color versions</p>
                                </div>

                                <h4>Sizes</h4>
                                <ul class="list-buttons">
                                    <li>
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                            Normal Modal
                                        </button>
                                    </li>

                                    <li>
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
                                            Small Modal
                                        </button>
                                    </li>

                                    <li>
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">
                                            Launch Large Modal
                                        </button>
                                    </li>
                                </ul>


                                <h4>Colors</h4>
                                <ul class="list-buttons">
                                    <li>
                                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal4">
                                            Primary
                                        </button>
                                    </li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#myModal8">
                                            Secondary
                                        </button>
                                    </li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">
                                            Info
                                        </button>
                                    </li>

                                    <li>
                                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal6">
                                            Success
                                        </button>
                                    </li>

                                    <li>
                                        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal7">
                                            Warning
                                        </button>
                                    </li>
                                    
                                    <li>
                                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal9">
                                            Danger
                                        </button>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Float Modal</h3>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-secondary" data-toggle='modal-float' data-target='.fModalTopOne'>top</button>
                                <button class="btn btn-secondary" data-toggle='modal-float' data-target='.fModalBottomOne'>Bottom</button>
                                <button class="btn btn-secondary" data-toggle='modal-float' data-target='.fModalLeftOne'>Left</button>
                                <button class="btn btn-secondary" data-toggle='modal-float' data-target='.fModalRightOne'>Right</button>
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
    
    <div class="modal-flot modal-primary fModalTopOne" data-position='top'>
        <div class="modal-header">
            <h3 class="modal-title">Header Default</h3>
            <a href="javascript:;" data-dismiss="modal-flot"><i class="ti-close"></i></a>
        </div>
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et auctor mi. 
                Curabitur tortor elit, accumsan ut augue quis, porta euismod velit. Praesent vitae finibus purus. 
                Cras dapibus id ipsum et hendrerit. Sed convallis sem vitae ex tempus interdum. 
                Aenean finibus nibh risus, ut pellentesque eros tristique a. Fusce interdum justo ac velit vulputate ultricies.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal-flot">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    
    <div class="modal-flot fModalBottomOne" data-position='bottom'>
        <div class="modal-header">
            <h3 class="modal-title">Header Default</h3>
            <a href="javascript:;" data-dismiss="modal-flot"><i class="ti-close"></i></a>
        </div>
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et auctor mi. 
                Curabitur tortor elit, accumsan ut augue quis, porta euismod velit. Praesent vitae finibus purus. 
                Cras dapibus id ipsum et hendrerit. Sed convallis sem vitae ex tempus interdum. 
                Aenean finibus nibh risus, ut pellentesque eros tristique a. Fusce interdum justo ac velit vulputate ultricies.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal-flot">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    
    <div class="modal-flot fModalLeftOne" data-position='left'>
        <div class="modal-header">
            <h3 class="modal-title">Header Default</h3>
            <a href="javascript:;" data-dismiss="modal-flot"><i class="ti-close"></i></a>
        </div>
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et auctor mi. 
                Curabitur tortor elit, accumsan ut augue quis, porta euismod velit. Praesent vitae finibus purus. 
                Cras dapibus id ipsum et hendrerit. Sed convallis sem vitae ex tempus interdum. 
                Aenean finibus nibh risus, ut pellentesque eros tristique a. Fusce interdum justo ac velit vulputate ultricies.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal-flot">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    
    <div class="modal-flot fModalRightOne" data-position='right'>
        <div class="modal-header">
            <h3 class="modal-title">Header Default</h3>
            <a href="javascript:;" data-dismiss="modal-flot"><i class="ti-close"></i></a>
        </div>
        <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et auctor mi. 
                Curabitur tortor elit, accumsan ut augue quis, porta euismod velit. Praesent vitae finibus purus. 
                Cras dapibus id ipsum et hendrerit. Sed convallis sem vitae ex tempus interdum. 
                Aenean finibus nibh risus, ut pellentesque eros tristique a. Fusce interdum justo ac velit vulputate ultricies.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal-flot">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    
    
    
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-primary fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-primary fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-info fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-success fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-warning fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-secondary fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal modal-danger fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>