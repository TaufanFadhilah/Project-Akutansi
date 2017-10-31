<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vector Map | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" media="all"  href="assets/plugins/jvectormap/jquery-jvectormap-2.0.4.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Vector Map <small>jVectorMap Plugin</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Maps</a></li>
                    <li class="active">Vector Map</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="world-mile-map" style="height:500px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">USA</h3>
                            </div>
                            <div class="panel-body">
                                <div id="usa-chart" style="height:450px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Africa</h3>
                            </div>
                            <div class="panel-body">
                                <div class="mapAfrica" style="height:450px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">India</h3>
                            </div>
                            <div class="panel-body">
                                <div class="mapIndia" style="height:450px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Europe</h3>
                            </div>
                            <div class="panel-body">
                                <div class="mapEurope" style="height:450px;"></div>
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
    
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-2.0.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/gdp-data.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-africa-mill.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-in-merc.js"></script>
    <script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-europe-merc.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/map-vector.js"></script>
    <script>
        jQuery(document).ready(function () {
            Maps.init();
        });
    </script>
</body>
</html>