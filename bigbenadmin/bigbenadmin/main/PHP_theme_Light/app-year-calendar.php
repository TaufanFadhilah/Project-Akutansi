<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Year Calendar | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" media="all"  href="assets/plugins/year-calendar/css/bootstrap-year-calendar.min.css" />
    
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="calendar"></div>
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
    
    
    <div class="modal modal-fade" id="event-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">
                        Event
                    </h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="event-index">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="min-date" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-7">
                                <input name="event-name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="min-date" class="col-sm-4 control-label">Location</label>
                            <div class="col-sm-7">
                                <input name="event-location" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="min-date" class="col-sm-4 control-label">Dates</label>
                            <div class="col-sm-7">
                                <div class="input-group input-daterange" data-provide="datepicker">
                                    <input name="event-start-date" type="text" class="form-control" value="2012-04-05">
                                    <span class="input-group-addon">to</span>
                                    <input name="event-end-date" type="text" class="form-control" value="2012-04-19">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="save-event">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>
    
    <script type="text/javascript" src="assets/plugins/fullcalendar/moment.min.js"></script>
    <script type="text/javascript" src="assets/plugins/year-calendar/js/bootstrap-year-calendar.min.js"></script>
    
    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/page-yearCalendar.js"></script>
</body>
</html>