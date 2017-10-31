<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log View | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/page-log-view.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Log View <small>Complete list of logs</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Applications</a></li>
                    <li class="active">Log view</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading clearfix">
                                
                                <div class="col-sm-4">
                                    <input type="text" class="form-control dateTime-picker" placeholder="Start Date & Time">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control dateTime-picker" placeholder="End Date & Time">
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary btn-block">Filter</button>
                                </div>
                                
                            </div>
                            <div class="panel-body">
                                <ul class="list-log-view">
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:20 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:22 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Phasellus nisi libero, suscipit sed nunc vitae, molestie tempor ex</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:23 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Proin eget enim ligula. Vestibulum id nisi justo</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:25 AM</span>
                                            <span class="user">Rowan Freeman</span>
                                            <span class="log-info">Donec aliquet mollis justo non tempor. Pellentesque tincidunt et dui vitae iaculis</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:27 AM</span>
                                            <span class="user">Trent Walton</span>
                                            <span class="log-info">Duis nibh velit, dictum consectetur fringilla vitae, tempor eu lectus</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:29 AM</span>
                                            <span class="user">Virgil Pana</span>
                                            <span class="log-info">Phasellus et tellus nec augue elementum tristique</span>
                                        </a>
                                    </li>
                                    
                                    <li class="danger">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:34 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Phasellus at turpis eu erat vestibulum lobortis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Praesent ullamcorper erat quis felis tempus commodo.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Curabitur tincidunt arcu mollis, aliquet nunc at, rutrum ligula.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:20 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="danger">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:24 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Phasellus at turpis eu erat vestibulum lobortis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Praesent ullamcorper erat quis felis tempus commodo.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Curabitur tincidunt arcu mollis, aliquet nunc at, rutrum ligula.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:20 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="danger">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:24 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Phasellus at turpis eu erat vestibulum lobortis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Praesent ullamcorper erat quis felis tempus commodo.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Curabitur tincidunt arcu mollis, aliquet nunc at, rutrum ligula.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="info">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:20 AM</span>
                                            <span class="user">System</span>
                                            <span class="log-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="danger">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:24 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Phasellus at turpis eu erat vestibulum lobortis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Praesent ullamcorper erat quis felis tempus commodo.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="success">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:37 AM</span>
                                            <span class="user">Ray Sensenbach</span>
                                            <span class="log-info">Curabitur tincidunt arcu mollis, aliquet nunc at, rutrum ligula.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                    <li class="warning">
                                        <a href="#">
                                            <span class="time">10/07/2016 - 10:49 AM</span>
                                            <span class="user">Stéphane Bouget</span>
                                            <span class="log-info">Proin accumsan diam in velit tempor mattis.</span>
                                        </a>
                                    </li>
                                    
                                </ul>
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
    <script type="text/javascript" src="assets/plugins/dateTime-picker/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>