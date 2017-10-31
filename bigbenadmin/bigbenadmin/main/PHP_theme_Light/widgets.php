<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Widgets | Big Ben Admin</title>
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
                <h1>Widgets <small>All the small widgets</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">widgets</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Chats</h3>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                                </div>
                            </div>
                            <div class="panel-body scroller" data-height="350px">
                                
                                <div class="chat-widget">   <!-- Chat body starts -->
                                    <ul class="list-unstyled">

                                        <li class="by-me">
                                            <div class="avatar pull-left">
                                                <b class="c-idle"></b>
                                                <img src="demo/users/img-user-02.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">Cynthianawen <span class="pull-right">3 hours ago</span></div>
                                                Vivamus diam elit diam, consectetur dapibus adipiscing elit. Duis dolor sit eut purus dolor feugiat sit interum euis.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li> 

                                        <li class="by-other">
                                            <div class="avatar pull-right">
                                                <b class="c-off"></b>
                                                <img src="demo/users/img-user-01.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">3 hours ago</div>
                                                Vivamus diam elit diam, consectetur elit. Ut non dolor sit feu sit amet dolor feugiat sit consequat.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>   

                                        <li class="by-me">
                                            <div class="avatar pull-left">
                                                <b class="c-on"></b>
                                                <img src="demo/users/img-user-02.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">Cynthianawen <span class="pull-right">4 hours ago</span></div>
                                                Lorem dolor sit sit amet dolor feugiat sit adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>  

                                        <li class="by-other">
                                            <div class="avatar pull-right">
                                                <b class="c-off"></b>
                                                <img src="demo/users/img-user-01.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">3 hours ago <span class="pull-right">Undelivered</span></div>
                                                Vivamus diam elit diam, consectetur fpibus adipiscing elit. Duis dolor sit eut purus dolor feugiat sit interum euis.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li> 

                                        <li class="by-me">
                                            <div class="avatar pull-left">
                                                <b class="c-on"></b>
                                                <img src="demo/users/img-user-02.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">Cynthianawen <span class="pull-right">4 hours ago</span></div>
                                                Vivamus diam  eget, Vivamus consectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>  

                                        <li class="by-other">
                                            <div class="avatar pull-right">
                                                <b class="c-off"></b>
                                                <img src="demo/users/img-user-01.jpg" alt="" class="img-responsive"/>
                                            </div>

                                            <div class="chat-content">
                                                <div class="chat-meta">3 hours ago <span class="pull-right">Undelivered</span></div>
                                                Duis dolor sit eut purus dolor feugius diam elit diam, consecsectetur dapibus adipiscing elit.
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>  <!-- Widget body ends -->
                                
                            </div>
                            <div class="panel-footer">
                                <form role="form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your message...">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-lblue">Send</button>
                                        </span>
                                    </div>
                                </form>	
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">TO-DO List</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>                                
                                </div>
                            </div>
                            <div class="panel-body todoapp">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 id="todo-message">
                                            <span id="todo-remaining"></span>of <span id="todo-total"></span>remaining
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="javascript:;" class="pull-right btn btn-success btn-sm" id="btn-archive">Archive</a>
                                    </div>
                                </div>
                                
                                <div class="scroller" data-height="290px">
                                    <ul class="list-group no-margn todo-list" id="todo-list">

                                    </ul>
                                </div>
                                    
                            </div>
                            <div class="panel-footer">
                                <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                    <div class="row">
                                        <div class="col-sm-9 todo-inputbar">
                                            <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                        </div>
                                        <div class="col-sm-3 todo-send">
                                            <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 socialAnalytics">
                        
                        <div class="col-md-6 col-sm-6 col-xs-6 ui-padd">
                            <!-- UI social -->
                            <div class="ui-social facebook">
                                <!-- facebook -->
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2345</a></h5>
                                        <h6><a href="#">Likes</a></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2224</a></h5>
                                        <h6><a href="#">Shares</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-6 ui-padd">
                            <div class="ui-social google-plus ">
                                <!-- Google plus -->
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2345</a></h5>
                                        <h6><a href="#">Photos</a></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">1111</a></h5>
                                        <h6><a href="#">Share</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-6 ui-padd">
                            <!-- Twitter -->
                            <div class="ui-social twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">1144</a></h5>
                                        <h6><a href="#">Tweets</a></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2211</a></h5>
                                        <h6><a href="#">Followers</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-6 ui-padd">
                            <!-- Youtube -->
                            <div class="ui-social youtube">
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2312</a></h5>
                                        <h6><a href="#">Videos</a></h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h5><a href="#">2478</a></h5>
                                        <h6><a href="#">Likes</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Visitors</h4>
                                
                                <input class="chart-knob" 
                                       data-angleArc=360 
                                       data-bgColor="rgba(255,72,89,0.1)" 
                                       data-fgColor="#FF4859" 
                                       data-thickness=".2" 
                                       value="90" 
                                       data-end="90" 
                                       data-width="100" 
                                       data-height="100" 
                                       data-readonly="true">
                                
                                <div class="db-details pt-md">
                                    <ul class="list-unstyled text-left">
                                        <li class="text-danger">
                                            <i class="fa fa-square"></i> &nbsp;Today
                                            <span class="pull-right">20%</span>
                                        </li>
                                        <li class="text-success">
                                            <i class="fa fa-square"></i> &nbsp;Yesterday
                                            <span class="pull-right">40%</span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Bar Chart</h4>
                                
                                <span class="sparkline-bar" 
                                      data-height="100" 
                                      data-barColor="#00C9E6" 
                                      data-lineColor="#32c8de" 
                                      data-barWidth="10">15,20,34,56,78,23,90,13,50,20,45</span>
                                
                                <div class="pt-md mb-sm text-lg">
                                    <span> 140 <i class="fa fa-angle-double-up text-success"></i></span> &nbsp; 
                                    <span> 250 <i class="fa fa-angle-double-down text-danger"></i></span> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                        <div class="panel">
                            <div class="panel-body text-center">
                                <h4>Settings</h4>
                                <ul class="text-left list-unstyled list-quick-setting-1">
                                    <li><i class="fa fa-wifi"></i> &nbsp; Wifi <a href="#" class="btn btn-danger btn-xs">Off</a></li>
                                    <li><i class="fa fa-envelope"></i> &nbsp; Email <a href="#" class="btn btn-success btn-xs">On</a></li>
                                    <li><i class="fa fa-linux"></i> &nbsp; Linux <a href="#" class="btn btn-success btn-xs">On</a></li>
                                    <li><i class="fa fa-book"></i> &nbsp; Book <a href="#" class="btn btn-danger btn-xs">Off</a></li>
                                    <li><i class="fa fa-dropbox"></i> &nbsp; Dropbox <a href="#" class="btn btn-success btn-xs">On</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6 col-mob">
                        <div class="panel">
                            <div class="panel-body text-center">
                                
                                <h4>Pie Chart</h4>
                                
                                <span class="sparkline-pie" 
                                      data-height="100" 
                                      data-width="120" 
                                      data-sliceColors="['#ed5441','#609cec', '#51d466', '#fcd419']">13,28,35,16</span>
                                
                                <div class="pt-md mb-sm text-lg">
                                    <span> 140 <i class="fa fa-angle-double-up text-success"></i></span> &nbsp; 
                                    <span> 250 <i class="fa fa-angle-double-down text-danger"></i></span> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3 col-sm-6">
                        
                        <div class="mini-Vchart ui-item">
                            <div class="ui-top">
                                <!-- Heading -->
                                <h4>Today's Visitors</h4>
                                <h2 class="text-primary">24,599</h2>
                            </div>
                            <div class="ui-bottom">
                                <div class="list">
                                    <!-- Item -->
                                    <div class="l-item">
                                        <div class="graph">
                                            <!-- Height -->
                                            <div class="in-graph bg-danger" style="height:40%"></div>
                                        </div>
                                        <!-- Heading -->
                                        <h6>Mon</h6>
                                    </div>
                                    <!-- Item -->
                                    <div class="l-item">
                                        <div class="graph">
                                            <!-- Height -->
                                            <div class="in-graph bg-success" style="height:30%"></div>
                                        </div>
                                        <!-- Heading -->
                                        <h6>Tue</h6>
                                    </div>
                                    <!-- Item -->
                                    <div class="l-item">
                                        <div class="graph">
                                            <!-- Height -->
                                            <div class="in-graph bg-warning" style="height:60%"></div>
                                        </div>
                                        <!-- Heading -->
                                        <h6>Wed</h6>
                                    </div>
                                    <!-- Item -->
                                    <div class="l-item">
                                        <div class="graph">
                                            <!-- Height -->
                                            <div class="in-graph bg-primary" style="height:70%"></div>
                                        </div>
                                        <!-- Heading -->
                                        <h6>Thu</h6>
                                    </div>
                                    <!-- Item -->
                                    <div class="l-item">
                                        <div class="graph">
                                            <!-- Height -->
                                            <div class="in-graph bg-info" style="height:60%"></div>
                                        </div>
                                        <!-- Heading -->
                                        <h6>Fri</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                        <!-- Item -->
                        <div class="mini-image-block">
                            <!-- Image -->
                            <img src="demo/images/img-imgBlock-01.jpg" alt="" class="img-responsive" />
                            <a href="#" class="ui-circle bg-info">12</a>
                            <!-- Details -->
                            <div class="ui-details">
                                <!-- Heading -->
                                <h3>Finibus</h3>
                                <!-- Paragraph -->
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a est gravida, laoreet nunc sed, varius lectus. Nullam elit tortor, venenatis in nisl id, sollicitudin rutrum urna. Duis sed suscipit orci. </p>
                                <!-- Button -->
                                <a href="#" class="btn btn-info btn-xs">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-card hovercard">
                            <div class="card-background">
                                <img class="card-bkimg" alt="" src="demo/photos/img-wall-01.jpg">
                            </div>
                            <div class="useravatar">
                                <img alt="" src="demo/users/img-user-02.jpg">
                            </div>
                            <div class="card-info">
                                <span class="card-title">Cynthianawen</span>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-flickr"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                    <li><a href="#"><i class="ti-dribbble"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
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
    
    <script type="text/javascript" src="assets/plugins/lib/sparklines.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery.knob.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/cmp-todo.js"></script>
</body>
</html>