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
                                        <a class="btn btn-success btn-lg btn-block" href="msg-compose.php"><i class="di di-edit"></i> Compose</a>
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
                                        
                                        <div class="actions">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default"><i class="fs-spinner-4"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fs-archive"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fs-remove"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"> <span class="fs-menu-2"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Mark as read</a></li>
                                                    <li><a href="#">Mark as unread</a></li>
                                                    <li><a href="#">Mark as important</a></li>
                                                    <li><a href="#">Mark as not important</a></li>
                                                    <li><a href="#">Add to star</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="page-nav">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default"><i class="fa fa-angle-left"></i></button>
                                                <button type="button" class="btn btn-default"><i class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                        
                                    </div>  <!-- End: Mail Tool bar -->
                                    
                                    <div class="mails-wrapper p-md"> <!-- Start: Mail List -->
                                    
                                        <h2 class="sub">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                                        
                                        <div class="media info-mail-sender">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64" src="demo/users/img-user-02.jpg" style="width: 64px; height: 64px;"> 
                                                </a> 
                                            </div> 
                                            
                                            <div class="media-body"> 
                                                <h4 class="media-heading">Cynthianawen</h4> 
                                                <em>cynthianawen@email.com</em> to You, Diellza Gojani<br>
                                                <span>Nov 25 - 12:57 PM</span>
                                            </div> 
                                        </div>
                                        
                                        <div class="clearfix mail-attachment">
                                            <p>
                                                <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                                <a href="#">Download all</a>
                                            </p>
                                            
                                            <ul class="list-mail-attachments">
                                                
                                                <li class="file-item">
                                                    <a href="#">
                                                        <div class="file pdf">pdf</div>
                                                        <h3>Curabitur-consequat.pdf <span>10.00 MB</span></h3>
                                                    </a>
                                                </li>
                                                
                                                <li class="file-item">
                                                    <a href="#">
                                                        <div class="file doc">docx</div>
                                                        <h3>Phasellus-nec-dictum.docx <span>13.00 MB</span></h3>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                            
                                        </div>
                                        
                                        <div class="clearfix message">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat viverra ex eget accumsan. Pellentesque ornare purus purus, vel placerat eros ullamcorper et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur facilisis lectus et vehicula. Mauris eu condimentum arcu. Nunc placerat sem eget sapien molestie, nec varius tortor vehicula. Mauris non gravida ante. Curabitur iaculis laoreet leo quis dapibus. Pellentesque porttitor, nibh quis hendrerit semper, ligula nulla eleifend nunc, eget tincidunt mauris neque nec ex.</p>
                                            
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse pretium vitae risus ut placerat. Fusce tempus lectus eget risus ullamcorper, non auctor diam tempus. Donec id ligula dictum, tristique quam ac, euismod quam. In auctor lacinia ex, vitae luctus augue auctor a. Curabitur et est est. Sed imperdiet in quam vitae dapibus. Nam tempus sit amet leo vitae aliquet. Curabitur pulvinar accumsan ligula nec cursus. Nam suscipit lacus nec ligula feugiat, sed tincidunt magna tincidunt. Aenean at venenatis velit. Nullam sodales ligula vitae arcu pharetra congue.</p>
                                            
                                            <p>Vivamus eu nisi metus. Sed pellentesque eros nisi, ut fringilla purus egestas vitae. Pellentesque id commodo lectus. Fusce libero mi, imperdiet tempus rhoncus sit amet, fringilla quis neque. Aliquam molestie, diam nec lacinia ornare, ante leo ornare est, in feugiat justo lacus nec lorem. Etiam a tortor eu lorem interdum pulvinar et nec massa. Proin gravida urna urna, sed lacinia velit mollis et.</p>
                                            
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse pretium vitae risus ut placerat. Fusce tempus lectus eget risus ullamcorper, non auctor diam tempus. Donec id ligula dictum, tristique quam ac, euismod quam. In auctor lacinia ex, vitae luctus augue auctor a. Curabitur et est est. Sed imperdiet in quam vitae dapibus. Nam tempus sit amet leo vitae aliquet. Curabitur pulvinar accumsan ligula nec cursus. Nam suscipit lacus nec ligula feugiat, sed tincidunt magna tincidunt. Aenean at venenatis velit. Nullam sodales ligula vitae arcu pharetra congue.</p>
                                            
                                            <p>Vivamus eu nisi metus. Sed pellentesque eros nisi, ut fringilla purus egestas vitae. Pellentesque id commodo lectus. Fusce libero mi, imperdiet tempus rhoncus sit amet, fringilla quis neque. Aliquam molestie, diam nec lacinia ornare, ante leo ornare est, in feugiat justo lacus nec lorem. Etiam a tortor eu lorem interdum pulvinar et nec massa. Proin gravida urna urna, sed lacinia velit mollis et.</p>
                                            <br>
                                            <p><strong>Thanks.</strong><br>Cynthianawen</p>
                                            
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

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>