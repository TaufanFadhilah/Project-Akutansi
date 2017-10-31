<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>General UI Elements | Big Ben Admin</title>
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
                <h1>General UI Elements <small>Bootstrap UI Elements</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">UI Elements</a></li>
                    <li class="active">General</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Tooltips</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-buttons">
                                    <li><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button></li>
                                    <li><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button></li>
                                    <li><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button></li>
                                    <li><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Popovers</h3>
                            </div>
                            <div class="panel-body">
                                
                                <ul class="list-buttons">
                                    <li>
                                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            On left
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            On top
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus.">
                                            On bottom
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                            On right
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Media object</h3>
                            </div>
                            <div class="panel-body">
                            
                            <div class="media"> 
                                <div class="media-left">
                                    <a href="#"> 
                                        <img class="media-object" src="demo/users/img-user-01.jpg" data-holder-rendered="true"> 
                                    </a> 
                                </div> 
                                <div class="media-body"> 
                                    <h4 class="media-heading">Media heading</h4> 
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
                                </div> 
                            </div> 
                            
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="demo/users/img-user-02.jpg">
                                    </a>
                                </div>
                                <div class="media-body"> 
                                    <h4 class="media-heading">Media heading</h4> 
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
                                    <div class="media"> 
                                        <div class="media-left"> 
                                            <a href="#"> 
                                                <img class="media-object" src="demo/users/img-user-03.jpg"> 
                                            </a> 
                                        </div> 
                                        <div class="media-body"> 
                                            <h4 class="media-heading">Nested media heading</h4>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. 
                                        </div> 
                                    </div>
                                </div> 
                            </div> 
                            
                            <div class="media">
                                <div class="media-body"> 
                                    <h4 class="media-heading">Media heading</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </div> 
                                <div class="media-right"> 
                                    <a href="#"> 
                                        <img class="media-object" src="demo/users/img-user-04.jpg"> 
                                    </a> 
                                </div> 
                            </div> 
                            <div class="media"> 
                                <div class="media-left"> 
                                    <a href="#"> 
                                        <img class="media-object" src="demo/users/img-user-05.jpg"> 
                                    </a>
                                </div>
                                <div class="media-body"> 
                                    <h4 class="media-heading">Media heading</h4> 
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                                </div> 
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Labels &amp; Badges</h3>
                            </div>
                            <div class="panel-body">

                                <h1>Example heading <span class="label label-default">New</span></h1> 
                                <h2>Example heading <span class="label label-primary">New</span></h2> 
                                <h3>Example heading <span class="label label-success">New</span></h3> 
                                <h4>Example heading <span class="label label-info">New</span></h4> 
                                <h5>Example heading <span class="label label-warning">New</span></h5> 
                                <h6>Example heading <span class="label label-danger">New</span></h6> 

                                <span class="label label-default">Default</span>
                                <span class="label label-primary">Primary</span>
                                <span class="label label-success">Success</span>
                                <span class="label label-info">Info</span>
                                <span class="label label-warning">Warning</span>
                                <span class="label label-danger">Danger</span>
                                <span class="label label-inverse">Inverse</span>

                                <br><br><br>
                                <ul class="nav nav-pills" role="tablist">
                                    <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
                                    <li role="presentation"><a href="#">Profile</a></li>
                                    <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
                                </ul><br><br><br>
                                
                            </div>
                        </div>
                        
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Images</h3>
                            </div>
                            <div class="panel-body">
                                <img src="demo/users/img-user-02.jpg" alt="..." class="img-rounded" style="width: 140px">
                                <img src="demo/users/img-user-03.jpg" alt="..." class="img-circle" style="width: 140px">
                                <img src="demo/users/img-user-04.jpg" alt="..." class="img-thumbnail" style="width: 140px">
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pagination</h3>
                            </div>
                            <div class="panel-body">
                                
                                <h4>Default pagination</h4>
                                <nav>
                                    <ul class="pagination">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                
                                <h4>Rounded pagination</h4>
                                <nav>
                                    <ul class="pagination rounded">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <h4>Sizing</h4>
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li class="disabled">
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Jumbotron</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="jumbotron p-md">
                                    <h1>Hello, world!</h1>
                                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List group</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="fs-IcoMoon"></i> Cras justo odio</li>
                                    <li class="list-group-item"><i class="fs-blogger"></i> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><i class="fs-book"></i> Morbi leo risus</li>
                                    <li class="list-group-item"><i class="fs-bubble-2"></i> Porta ac consectetur ac</li>
                                    <li class="list-group-item"><i class="fs-balance"></i> Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List group Badges</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item"><i class="fs-IcoMoon"></i> Cras justo odio <span class="badge badge-primary">14</span></li>
                                    <li class="list-group-item"><i class="fs-blogger"></i> Dapibus ac facilisis in</li>
                                    <li class="list-group-item"><i class="fs-book"></i> Morbi leo risus <span class="badge badge-danger">8</span></li>
                                    <li class="list-group-item"><i class="fs-bubble-2"></i> Porta ac consectetur ac</li>
                                    <li class="list-group-item"><i class="fs-balance"></i> Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Collapse</h3>
                            </div>
                            <div class="panel-body">
                                
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-target
                                </button> <br><br>
                                <div class="collapse" id="collapseExample">
                                    <div class="well">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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