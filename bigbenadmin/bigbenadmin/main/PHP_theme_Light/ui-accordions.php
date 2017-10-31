<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Accordion | Big Ben Admin</title>
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
                <h1>Accordions</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">UI Elements</a></li>
                    <li class="active">Accordion</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Accordion Primary</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="panel-group accordion" id="accordion">
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                                                    <i class="fa fa-cloud"></i> What is a good example of a AFRO application?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="false" style="height: 2px;">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut porta massa, sit amet maximus odio. Nulla vel sagittis tellus. Nulla tristique nisi vitae blandit vehicula. Sed nunc ex, auctor id semper a, lacinia eu turpis. Maecenas eu mauris vehicula, blandit mauris nec, commodo magna. Nam commodo ultrices placerat. Vivamus suscipit vulputate lacinia. Vestibulum et nisi vel odio dignissim sagittis ut suscipit felis. Vestibulum convallis turpis lectus, a porta est facilisis id.
                                                <br>
                                                <br>
                                                Ut tincidunt elit vitae eleifend blandit. Aenean condimentum neque libero, vehicula sodales massa porta tincidunt. Vestibulum quis felis eget ante fringilla interdum. Pellentesque vehicula neque a libero porta cursus a a neque. Sed vitae lectus urna. Vivamus rutrum ex in purus lacinia vehicula. Fusce mollis sapien sit amet ipsum blandit, ac tristique erat aliquam.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                                    <i class="fa fa-gavel"></i> What can I build with AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Mauris eu ultrices metus. Nam blandit malesuada metus a laoreet. Maecenas nec dolor at purus elementum aliquam. Sed id risus at elit facilisis laoreet. Duis mollis ac justo sed varius. Duis non dolor non tellus tincidunt vestibulum at ac velit. Ut quis urna erat. Duis turpis est, egestas sed pellentesque fringilla, mattis eu augue.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                                    <i class="fa fa-building-o"></i> Do you have any pre-built applications using AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Sed lobortis non mi et elementum. Quisque in ex dictum, lacinia augue sit amet, commodo quam. Curabitur sit amet auctor nisi. Aenean viverra elit quam, eget efficitur turpis tincidunt vitae. Pellentesque a velit vitae neque tincidunt pharetra eu vel nisl. Integer ac ipsum sed ligula bibendum molestie vel sed sem. Pellentesque a vehicula ante. Fusce commodo sodales purus eget interdum. Pellentesque id aliquam quam.
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Accordion Warning</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="panel-group accordion" id="accordion">
                                    
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">
                                                    <i class="fa fa-cloud"></i> What is a good example of a AFRO application?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" aria-expanded="false" style="height: 2px;">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut porta massa, sit amet maximus odio. Nulla vel sagittis tellus. Nulla tristique nisi vitae blandit vehicula. Sed nunc ex, auctor id semper a, lacinia eu turpis. Maecenas eu mauris vehicula, blandit mauris nec, commodo magna. Nam commodo ultrices placerat. Vivamus suscipit vulputate lacinia. Vestibulum et nisi vel odio dignissim sagittis ut suscipit felis. Vestibulum convallis turpis lectus, a porta est facilisis id.
                                                <br>
                                                <br>
                                                Ut tincidunt elit vitae eleifend blandit. Aenean condimentum neque libero, vehicula sodales massa porta tincidunt. Vestibulum quis felis eget ante fringilla interdum. Pellentesque vehicula neque a libero porta cursus a a neque. Sed vitae lectus urna. Vivamus rutrum ex in purus lacinia vehicula. Fusce mollis sapien sit amet ipsum blandit, ac tristique erat aliquam.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">
                                                    <i class="fa fa-gavel"></i> What can I build with AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Mauris eu ultrices metus. Nam blandit malesuada metus a laoreet. Maecenas nec dolor at purus elementum aliquam. Sed id risus at elit facilisis laoreet. Duis mollis ac justo sed varius. Duis non dolor non tellus tincidunt vestibulum at ac velit. Ut quis urna erat. Duis turpis est, egestas sed pellentesque fringilla, mattis eu augue.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-warning">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false">
                                                    <i class="fa fa-building-o"></i> Do you have any pre-built applications using AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Sed lobortis non mi et elementum. Quisque in ex dictum, lacinia augue sit amet, commodo quam. Curabitur sit amet auctor nisi. Aenean viverra elit quam, eget efficitur turpis tincidunt vitae. Pellentesque a velit vitae neque tincidunt pharetra eu vel nisl. Integer ac ipsum sed ligula bibendum molestie vel sed sem. Pellentesque a vehicula ante. Fusce commodo sodales purus eget interdum. Pellentesque id aliquam quam.
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-inverse">
                            <div class="panel-heading">
                                <h3 class="panel-title">Accordion default</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="panel-group accordion" id="accordion">
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false">
                                                    <i class="fa fa-cloud"></i> What is a good example of a AFRO application?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSeven" class="panel-collapse collapse" aria-expanded="false" style="height: 2px;">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut porta massa, sit amet maximus odio. Nulla vel sagittis tellus. Nulla tristique nisi vitae blandit vehicula. Sed nunc ex, auctor id semper a, lacinia eu turpis. Maecenas eu mauris vehicula, blandit mauris nec, commodo magna. Nam commodo ultrices placerat. Vivamus suscipit vulputate lacinia. Vestibulum et nisi vel odio dignissim sagittis ut suscipit felis. Vestibulum convallis turpis lectus, a porta est facilisis id.
                                                <br>
                                                <br>
                                                Ut tincidunt elit vitae eleifend blandit. Aenean condimentum neque libero, vehicula sodales massa porta tincidunt. Vestibulum quis felis eget ante fringilla interdum. Pellentesque vehicula neque a libero porta cursus a a neque. Sed vitae lectus urna. Vivamus rutrum ex in purus lacinia vehicula. Fusce mollis sapien sit amet ipsum blandit, ac tristique erat aliquam.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false">
                                                    <i class="fa fa-gavel"></i> What can I build with AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseEight" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Mauris eu ultrices metus. Nam blandit malesuada metus a laoreet. Maecenas nec dolor at purus elementum aliquam. Sed id risus at elit facilisis laoreet. Duis mollis ac justo sed varius. Duis non dolor non tellus tincidunt vestibulum at ac velit. Ut quis urna erat. Duis turpis est, egestas sed pellentesque fringilla, mattis eu augue.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapNine" aria-expanded="false">
                                                    <i class="fa fa-building-o"></i> Do you have any pre-built applications using AFRO?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapNine" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="panel-body">
                                                Sed lobortis non mi et elementum. Quisque in ex dictum, lacinia augue sit amet, commodo quam. Curabitur sit amet auctor nisi. Aenean viverra elit quam, eget efficitur turpis tincidunt vitae. Pellentesque a velit vitae neque tincidunt pharetra eu vel nisl. Integer ac ipsum sed ligula bibendum molestie vel sed sem. Pellentesque a vehicula ante. Fusce commodo sodales purus eget interdum. Pellentesque id aliquam quam.
                                            </div>
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