<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nestable List | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/sortable/sortable.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Nestable List</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Components</a></li>
                    <li class="active">Nestable</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List One</h3>
                            </div>
                            
                            <div class="panel-body">
                                <div class="dd" id="sortable-0">
                                    <button class="dd-new-item">+</button>
                                    <li class="dd-item-blueprint">
                                        <button class="collapse" data-action="collapse" type="button" style="display: none;">–</button>
                                        <button class="expand" data-action="expand" type="button" style="display: none;">+</button>
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content">
                                            <span class="item-name">[item_name]</span>
                                            <div class="dd-button-container">
                                                <button class="item-add">+</button>
                                                <button class="item-remove" data-confirm-class="item-remove-confirm">&times;</button>
                                            </div>
                                            <div class="dd-edit-box" style="display: none;">
                                                <input type="text" name="title" autocomplete="off" placeholder="Item"
                                                       data-placeholder="Any nice idea for the title?"
                                                       data-default-value="Sortable List Item. {?numeric.increment}">
                                                <i class="end-edit">save</i>
                                            </div>
                                        </div>
                                    </li>
                                    <ol class="dd-list"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">List Two</h3>
                            </div>
                            
                            <div class="panel-body">
                                <div class="dd" id="MenuItem">

                                    <button id="sortable-add-item-btn" class="dd-new-item">+</button>

                                    <li class="dd-item-blueprint">
                                        <button class="collapse" data-action="collapse" type="button" style="display: none;">–</button>
                                        <button class="expand" data-action="expand" type="button" style="display: none;">+</button>
                                        <div class="dd-handle dd3-handle">Drag</div>

                                        <div class="dd3-content">
                                            <span class="item-name">[item_name]</span>
                                            <div class="dd-button-container">
                                                <button class="item-add">+</button>
                                                <button class="item-remove" data-confirm-class="item-remove-confirm">&times;</button>
                                            </div>

                                            <div class="dd-edit-box" style="display: none;">

                                                <input type="text" name="title" autocomplete="off" placeholder="Item"
                                                       data-placeholder="Any nice idea for the title?"
                                                       data-default-value="Sortable List Item. {?numeric.increment}">
                                                <i class="end-edit">save</i>
                                            </div>
                                        </div>
                                    </li>

                                    <ol class="dd-list"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">List Two JSON Output</h3>
                            </div>
                            <div class="panel-body">
                                <code class="Mnu1jsonOutput"></code>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">List Three</h3>
                            </div>
                            <div class="panel-body">
                                <div class="dd" id="shopMenu">
                                    <button class="dd-new-item">+</button>

                                    <li class="dd-item-blueprint">

                                        <button class="collapse" data-action="collapse" type="button" style="display: none;">–</button>
                                        <button class="expand" data-action="expand" type="button" style="display: none;">+</button>
                                        <div class="dd-handle dd3-handle">Drag</div>
                                        <div class="dd3-content">
                                            <span class="item-name">[item_name]</span>

                                            <div class="dd-button-container">
                                                <button class="item-add">+</button>
                                                <button class="item-remove" data-confirm-class="item-remove-confirm">&times;</button>
                                            </div>

                                            <div class="dd-edit-box" style="display: none;">

                                                <input type="text" name="title" autocomplete="off" placeholder="Item"
                                                       data-placeholder="Any nice idea for the title?"
                                                       data-default-value="Sortable List Item. {?numeric.increment}">
                                                <select name="custom-select">
                                                    <option>select something...</option>
                                                    <optgroup label="Pages">
                                                        <option value="1">http://example.com/page/1</option>
                                                        <option value="2">http://example.com/page/2</option>
                                                    </optgroup>
                                                    <optgroup label="Categories">
                                                        <option value="3">News</option>
                                                        <option value="4">Stories</option>
                                                    </optgroup>
                                                </select>

                                                <i class="end-edit">save</i>
                                            </div>
                                        </div>
                                    </li>
                                    <ol class="dd-list"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">List Three JSON Output</h3>
                            </div>
                            <div class="panel-body">
                                <code class="MnuShopjsonOutput"></code>
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
    <script type="text/javascript" src="assets/plugins/sortable/jquery.sortable-1.0.0.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.min.js"></script>
    
    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/page-nestable.js"></script>
    <script>
        jQuery(document).ready(function() {
            Nestable.init();
        });
    </script>
</body>
</html>