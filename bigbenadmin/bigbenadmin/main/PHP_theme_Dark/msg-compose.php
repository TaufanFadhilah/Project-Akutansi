<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inbox | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen/ImageSelect/ImageSelect.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/trumbowyg/ui/trumbowyg.css">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/page_messages.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row view-inbox">
                    
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body no-padding">
                                
                                <div class="side-bar">  <!--START: Mail Sidebar -->
                                    
                                    <div class="action">
                                        <a class="btn btn-success btn-lg btn-block" href="msg-compose.php">SEND <i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    
                                    <nav class="folders-wrapper">
                                        <ul class="folders-list list-unstyled">
                                            <li class="active"><a href="msg-inbox.php"><i class="sli-drawer"></i> Inbox (18)</a></li>
                                            <li><a href="msg-inbox.php"><i class="sli-book-open"></i> Draft (3)</a></li>
                                            <li><a href="msg-inbox.php"><i class="sli-action-redo"></i> Sent</a></li>
                                            <li><a href="msg-inbox.php"><i class="sli-trash"></i> Deleted</a></li>
                                        </ul>
                                    </nav>

                                    <div class="labels-wrapper">
                                        <h4 class="sub-title">Labels</h4>
                                        <ul class="labels-list list-unstyled">
                                            <li><a href="javascript:;"><span class="label-color label-danger"></span> HTML5</a></li>
                                            <li><a href="javascript:;"><span class="label-color label-info"></span> UI/UX</a></li>
                                            <li><a href="javascript:;"><span class="label-color label-primary"></span> CSS</a></li>
                                            <li><a href="javascript:;"><span class="label-color label-warning"></span> CLIENTS</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>  <!-- End: Mail Side bar -->
                                
                                <div class="content-panel">

                                    <div class="content-utilities clearfix"> <!--Start: Mail Toolbar -->
                                        
                                        <button class="btn btn-sm btn-success"><i class="fa fa-floppy-o"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="ti-alert"></i> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="javascript:;">High</a></li>
                                                <li><a href="javascript:;">Normal</a></li>
                                                <li><a href="javascript:;">Low</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-sm btn-primary" data-toggle="collapse" href="#mailAttachements" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-paperclip"></i></button>
                                        
                                    </div>  <!-- End: Mail Tool bar -->
                                    
                                    <div class="mails-wrapper p-md"> <!-- Start: Mail Create -->
                                    
                                        <div class="col-md-12 pt-md pb-sm to-address">
                                            <div class="input-group">
                                                <span class="input-group-addon">TO</span>
                                                <select multiple="multiple" class="toUserEmail" data-placeholder="Select User">
                                                    <option data-img-src="demo/users/img-user-02.jpg">Cynthianawen</option> 
                                                    <option data-img-src="demo/users/img-user-03.jpg">Megan Stamper</option> 
                                                    <option data-img-src="demo/users/img-user-04.jpg">Alex Pushkin</option> 
                                                    <option data-img-src="demo/users/img-user-05.jpg">Bjarne Flur Kvistad</option> 
                                                    <option data-img-src="demo/users/img-user-06.jpg">Diellza Gojani</option> 
                                                    <option data-img-src="demo/users/img-user-07.jpg">Hassan Ali</option> 
                                                    <option data-img-src="demo/users/img-user-08.jpg">Vicky Mangasaryan</option> 
                                                    <option data-img-src="demo/users/img-user-029.jpg">Joseph Lattimer</option> 
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 pb-sm">
                                            <div class="input-group">
                                                <span class="input-group-addon">SUBJECT</span>
                                                <input type="text" class="form-control to-email" placeholder="Subject">
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-12 pb-sm collapse" id="mailAttachements">
                                            <form action="includs/upload.php" class="dropzone"></form>
                                        </div>
                                    
                                        <div class="col-md-12">
                                            <div class="editorTrumbowyg" style="min-height: 500px;"></div>
                                        </div>
                                        
                                    </div>
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
    
    <script type="text/javascript" src="assets/plugins/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/chosen/ImageSelect/ImageSelect.jquery.js"></script>
    <script type="text/javascript" src="assets/plugins/dropzone/dropzone.js"></script>
    <script type="text/javascript" src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/page-messages.js"></script>
    <script>
        jQuery(document).ready(function () {
            Compose.init();
        });
    </script>
</body>
</html>