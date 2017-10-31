<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Search | Big Ben Admin</title>
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
                <h1>Search <small>All Search Results page</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Pages</a></li>
                    <li class="active">Search</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                
                                <div class="clearfix mb-lg form-group-lg">
                                    <div class="input-group ">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary btn-lg" type="button">Search</button>
                                        </span>
                                    </div>
                                </div>

                                <div class="search-filter">
                                    <ul class="nav nav-pills">
                                        <li class="active"><a href="#">All</a></li>
                                        <li><a href="#">Website</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">News</a></li>							
                                        <li><a href="#">Social</a></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-8">

                                        <div class="search-container">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="search-header">
                                                        <a href="#" class="h4 inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                                        <div class="text-primary">www.someExample.com/search/blog</div>
                                                    </div>

                                                    <p class="m-top-sm">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, <span class="text-danger">consectetur</span> adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec <span class="text-danger">consectetur</span>, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. 
                                                    </p>

                                                    <div class="text-right">
                                                        <a class="btn btn-sm btn-success"><i class="fa fa-link"></i></a>
                                                        <a class="btn btn-sm btn-primary"><i class="fa fa-save"></i></a>
                                                        <a class="btn btn-sm btn-warning"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div><!-- /panel -->
                                        </div><!-- /search-container -->

                                        <div class="search-container">
                                            <div class="panel panel-default">
                                                <div class="panel-body">	
                                                    <div class="search-header">
                                                        <a href="#" class="h4 inline-block">Understanding Twitter Bootstrap 3</a>
                                                        <div class="text-muted">getbootstrap.com</div>
                                                    </div>

                                                    <div class="seperator"></div>

                                                    <p class="m-top-sm">
                                                        <a href="#" class="pull-left avatar m-right-sm"> 
                                                            <img class="img-w100 mr-sm" src="demo/users/img-user-03.jpg" alt="Author"> 
                                                        </a>
                                                        Lorem ipsum dolor sit amet, <span class="text-danger">consectetur</span> adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec <span class="text-danger">consectetur</span>, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula.
                                                    </p>

                                                    <div class="text-right">
                                                        <a class="btn btn-sm btn-success"><i class="fa fa-link"></i></a>
                                                        <a class="btn btn-sm btn-primary"><i class="fa fa-save"></i></a>
                                                        <a class="btn btn-sm btn-warning"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div><!-- /panel -->
                                        </div><!-- /search-container -->

                                        <div class="search-container">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="search-header">
                                                        <a href="#" class="h4 inline-block">Nullam nunc tortor, luctus id justo ut, porttitor molestie urna</a>
                                                        <div class="text-muted">https://nullamnunctortor.net/</div>
                                                    </div>

                                                    <p class="m-top-sm">
                                                        Lorem ipsum dolor sit amet, <span class="text-danger">consectetur</span> adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec <span class="text-danger">consectetur</span>, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. 
                                                    </p>

                                                    <div class="text-right">
                                                        <a class="btn btn-sm btn-success"><i class="fa fa-link"></i></a>
                                                        <a class="btn btn-sm btn-primary"><i class="fa fa-save"></i></a>
                                                        <a class="btn btn-sm btn-warning"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div><!-- /panel -->
                                        </div><!-- /search-container -->

                                        <div class="search-container">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="search-header">
                                                        <a href="#" class="h4 inline-block">Create Effective Search Result Pages - Admin</a>
                                                        <div class="text-muted">http://themeforest.net/category/site-templates/admin-templates</div>
                                                    </div>

                                                    <p class="m-top-sm">
                                                        Lorem ipsum dolor sit amet, <span class="text-danger">consectetur</span> adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec <span class="text-danger">consectetur</span>, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. 
                                                    </p>

                                                    <div class="text-right">
                                                        <a class="btn btn-sm btn-success"><i class="fa fa-link"></i></a>
                                                        <a class="btn btn-sm btn-primary"><i class="fa fa-save"></i></a>
                                                        <a class="btn btn-sm btn-warning"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div><!-- /panel -->
                                        </div><!-- /search-container -->

                                        <div class="search-options clearfix">
                                            <strong style="margin-right:20px;">341 list(s)</strong>
                                            Sort by
                                            <select class="form-control input-sm" style="display:inline-block; width:100px;">
                                                <option value="">Date</option>
                                                <option>Name</option>
                                                <option>Popular</option>
                                            </select>

                                            <div class="search-pager">
                                                <ul class="pagination pagination-sm pagination-split no-margin">
                                                    <li class="disabled"><a href="#">«</a></li>
                                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div><!-- /search-pager -->
                                        </div><!-- /search-option -->

                                    </div><!-- /.col -->
                                    
                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <div class="row">
                                            <h4>Images</h4>
                                            <div class="col-md-6">
                                                <img class="img-responsive mb-sm" src="demo/photos/img-wall-01.jpg" alt="Image One">
                                            </div><!-- /.col -->
                                            <div class="col-md-6">
                                                <img class="img-responsive mb-sm" src="demo/photos/img-wall-02.jpg" alt="Image Two">
                                            </div><!-- /.col -->

                                            <div class="col-md-12">
                                                <img class="img-responsive mb-sm" src="demo/photos/img-wall-03.jpg" alt="Image Three">
                                            </div>

                                            <div class="col-md-12 m-top-md">
                                                <img class="img-responsive mb-sm" src="demo/photos/img-wall-04.jpg" alt="Image Four">
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.col -->
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