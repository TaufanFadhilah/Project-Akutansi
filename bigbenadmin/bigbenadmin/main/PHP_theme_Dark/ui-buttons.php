<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Buttons | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/ladda/ladda.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Buttons</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">UI Elements</a></li>
                    <li class="active">Buttons</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-default">Default</button>
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Rounded Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-default btn-rounded">Default</button>
                                    <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
                                    <button type="button" class="btn btn-success btn-rounded">Success</button>
                                    <button type="button" class="btn btn-info btn-rounded">Info</button>
                                    <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                                    <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Outline Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-default-outline">Default</button>
                                    <button type="button" class="btn btn-primary-outline">Primary</button>
                                    <button type="button" class="btn btn-secondary-outline">Secondary</button>
                                    <button type="button" class="btn btn-success-outline">Success</button>
                                    <button type="button" class="btn btn-info-outline">Info</button>
                                    <button type="button" class="btn btn-warning-outline">Warning</button>
                                    <button type="button" class="btn btn-danger-outline">Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Outline Rounded Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-default-outline btn-rounded">Default</button>
                                    <button type="button" class="btn btn-primary-outline btn-rounded">Primary</button>
                                    <button type="button" class="btn btn-secondary-outline btn-rounded">Secondary</button>
                                    <button type="button" class="btn btn-success-outline btn-rounded">Success</button>
                                    <button type="button" class="btn btn-info-outline btn-rounded">Info</button>
                                    <button type="button" class="btn btn-warning-outline btn-rounded">Warning</button>
                                    <button type="button" class="btn btn-danger-outline btn-rounded">Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Labeled Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-labeled btn-success"><span class="btn-label"><i class="fa fa-chain"></i></span>Success</button>
                                    <button type="button" class="btn btn-labeled btn-danger"><span class="btn-label"><i class="fa fa-close"></i></span>Cancel</button>

                                    <button type="button" class="btn btn-labeled btn-warning"><span class="btn-label"><i class="fa fa-bookmark"></i></span>Bookmark</button>
                                    <button type="button" class="btn btn-labeled btn-primary"><span class="btn-label"><i class="fa fa-camera"></i></span>Camera</button>

                                    <button type="button" class="btn btn-labeled btn-default"><span class="btn-label"><i class="fa fa-arrow-left"></i></span>Left</button>
                                    <button type="button" class="btn btn-labeled btn-default">Right<span class="btn-label right"><i class="fa fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Labeled Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <button type="button" class="btn btn-labeled btn-success btn-rounded"><span class="btn-label"><i class="fa fa-chain"></i></span>Success</button>
                                    <button type="button" class="btn btn-labeled btn-danger btn-rounded"><span class="btn-label"><i class="fa fa-close"></i></span>Cancel</button>

                                    <button type="button" class="btn btn-labeled btn-warning btn-rounded"><span class="btn-label"><i class="fa fa-bookmark"></i></span>Bookmark</button>
                                    <button type="button" class="btn btn-labeled btn-primary btn-rounded"><span class="btn-label"><i class="fa fa-camera"></i></span>Camera</button>

                                    <button type="button" class="btn btn-labeled btn-default btn-rounded"><span class="btn-label"><i class="fa fa-arrow-left"></i></span>Left</button>
                                    <button type="button" class="btn btn-labeled btn-default btn-rounded">Right<span class="btn-label right"><i class="fa fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Button groups</h3>
                            </div>
                            <div class="panel-body">
                                <div class="btn-group" role="group" aria-label="button group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                </div>
                                
                                <h4>Button toolbar</h4>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups"> 
                                    <div class="btn-group" role="group" aria-label="First group"> 
                                        <button type="button" class="btn btn-default">1</button> 
                                        <button type="button" class="btn btn-default">2</button> 
                                        <button type="button" class="btn btn-default">3</button> 
                                        <button type="button" class="btn btn-default">4</button> 
                                    </div> 
                                    <div class="btn-group" role="group" aria-label="Second group"> 
                                        <button type="button" class="btn btn-default">5</button> 
                                        <button type="button" class="btn btn-default">6</button> 
                                        <button type="button" class="btn btn-default">7</button> 
                                    </div> 
                                    <div class="btn-group" role="group" aria-label="Third group"> 
                                        <button type="button" class="btn btn-default">8</button> 
                                    </div> 
                                </div>
                                
                                <h4>Nesting</h4>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default">1</button>
                                    <button type="button" class="btn btn-default">2</button>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <h4>Justified button groups</h4>
                                <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group"> 
                                    <a href="#" class="btn btn-default" role="button">Left</a> 
                                    <a href="#" class="btn btn-default" role="button">Middle</a> 
                                    <a href="#" class="btn btn-default" role="button">Right</a> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Vertical variation</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="btn-group-vertical" role="group" aria-label="Vertical button group"> 
                                    <button type="button" class="btn btn-default">Button</button> 
                                    <button type="button" class="btn btn-default">Button</button> 
                                    <div class="btn-group" role="group"> 
                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button> 
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"> 
                                            <li><a href="#">Dropdown link</a></li> 
                                            <li><a href="#">Dropdown link</a></li> 
                                        </ul> 
                                    </div> 
                                    <button type="button" class="btn btn-default">Button</button> 
                                    <button type="button" class="btn btn-default">Button</button> 
                                    <div class="btn-group" role="group"> 
                                        <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button> 
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"> 
                                            <li><a href="#">Dropdown link</a></li> 
                                            <li><a href="#">Dropdown link</a></li> 
                                        </ul> 
                                    </div> 
                                    <div class="btn-group" role="group"> 
                                        <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button> 
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3"> 
                                            <li><a href="#">Dropdown link</a></li> 
                                            <li><a href="#">Dropdown link</a></li> 
                                        </ul> 
                                    </div> 
                                    <div class="btn-group" role="group"> 
                                        <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span> </button> 
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4"> 
                                            <li><a href="#">Dropdown link</a></li> <li><a href="#">Dropdown link</a></li> 
                                        </ul> 
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Social Buttons</h3>
                            </div>
                            <div class="panel-body">
                                <div class="button-list">
                                    <a class="btn btn-social btn-adn"><span class="fa fa-adn"></span> Sign in with App.net</a>
                                    <a class="btn btn-social btn-bitbucket"><span class="fa fa-bitbucket"></span> Sign in with Bitbucket</a>
                                    <a class="btn btn-social btn-dropbox"><span class="fa fa-dropbox"></span> Sign in with Dropbox</a>
                                    <a class="btn btn-social btn-facebook"><span class="fa fa-facebook"></span> Sign in with Facebook</a>
                                    <a class="btn btn-social btn-flickr"><span class="fa fa-flickr"></span> Sign in with Flickr</a>
                                    <a class="btn btn-social btn-foursquare"><span class="fa fa-foursquare"></span> Sign in with Foursquare</a>
                                    <a class="btn btn-social btn-github"><span class="fa fa-github"></span> Sign in with GitHub</a>
                                    <a class="btn btn-social btn-google"><span class="fa fa-google"></span> Sign in with Google</a>
                                    <a class="btn btn-social btn-instagram"><span class="fa fa-instagram"></span> Sign in with Instagram</a>
                                    <a class="btn btn-social btn-linkedin"><span class="fa fa-linkedin"></span> Sign in with LinkedIn</a>
                                    <a class="btn btn-social btn-microsoft"><span class="fa fa-windows"></span> Sign in with Microsoft</a>
                                    <a class="btn btn-social btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki</a>
                                    <a class="btn btn-social btn-openid"><span class="fa fa-openid"></span> Sign in with OpenID</a>
                                    <a class="btn btn-social btn-pinterest"><span class="fa fa-pinterest"></span> Sign in with Pinterest</a>
                                    <a class="btn btn-social btn-reddit"><span class="fa fa-reddit"></span> Sign in with Reddit</a>
                                    <a class="btn btn-social btn-soundcloud"><span class="fa fa-soundcloud"></span> Sign in with SoundCloud</a>
                                    <a class="btn btn-social btn-tumblr"><span class="fa fa-tumblr"></span> Sign in with Tumblr</a>
                                    <a class="btn btn-social btn-twitter"><span class="fa fa-twitter"></span> Sign in with Twitter</a>
                                    <a class="btn btn-social btn-vimeo"><span class="fa fa-vimeo-square"></span> Sign in with Vimeo</a>
                                    <a class="btn btn-social btn-vk"><span class="fa fa-vk"></span> Sign in with VK</a>
                                    <a class="btn btn-social btn-yahoo"><span class="fa fa-yahoo"></span> Sign in with Yahoo!</a>
                                </div>
                                
                                <div class="button-list">
                                    <a class="btn btn-social-icon btn-adn"><span class="fa fa-adn"></span></a>
                                    <a class="btn btn-social-icon btn-bitbucket"><span class="fa fa-bitbucket"></span></a>
                                    <a class="btn btn-social-icon btn-dropbox"><span class="fa fa-dropbox"></span></a>
                                    <a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook"></span></a>
                                    <a class="btn btn-social-icon btn-flickr"><span class="fa fa-flickr"></span></a>
                                    <a class="btn btn-social-icon btn-foursquare"><span class="fa fa-foursquare"></span></a>
                                    <a class="btn btn-social-icon btn-github"><span class="fa fa-github"></span></a>
                                    <a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                    <a class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a>
                                    <a class="btn btn-social-icon btn-linkedin"><span class="fa fa-linkedin"></span></a>
                                    <a class="btn btn-social-icon btn-microsoft"><span class="fa fa-windows"></span></a>
                                    <a class="btn btn-social-icon btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
                                    <a class="btn btn-social-icon btn-openid"><span class="fa fa-openid"></span></a>
                                    <a class="btn btn-social-icon btn-pinterest"><span class="fa fa-pinterest"></span></a>
                                    <a class="btn btn-social-icon btn-reddit"><span class="fa fa-reddit"></span></a>
                                    <a class="btn btn-social-icon btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
                                    <a class="btn btn-social-icon btn-tumblr"><span class="fa fa-tumblr"></span></a>
                                    <a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a>
                                    <a class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo-square"></span></a>
                                    <a class="btn btn-social-icon btn-vk"><span class="fa fa-vk"></span></a>
                                    <a class="btn btn-social-icon btn-yahoo"><span class="fa fa-yahoo"></span></a>
                                </div>
                                
                                <h4>Different Sizes</h4>
                                <div class="button-list">
                                    <a class="btn btn-social btn-lg btn-google"><span class="fa fa-google"></span>Sign in with Google</a>
                                    <a class="btn btn-social btn-google"><span class="fa fa-google"></span>Sign in with Google</a>
                                    <a class="btn btn-social btn-sm btn-google"><span class="fa fa-google"></span>Sign in with Google</a>
                                    <a class="btn btn-social btn-xs btn-google"><span class="fa fa-google"></span>Sign in with Google</a>
                                </div>
                                
                                <div class="button-list">
                                    <a class="btn btn-social-icon btn-lg btn-google"><span class="fa fa-google"></span></a>
                                    <a class="btn btn-social-icon btn-google"><span class="fa fa-google"></span></a>
                                    <a class="btn btn-social-icon btn-sm btn-google"><span class="fa fa-google"></span></a>
                                    <a class="btn btn-social-icon btn-xs btn-google"><span class="fa fa-google"></span></a>
                                </div>                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Split button dropdowns</h3>
                            </div>
                            <div class="panel-body">

                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Action</button>
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">Action</button>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning">Action</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <!-- Split button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-inverse">Action</button>
                                    <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dropup variation</h3>
                            </div>
                            <div class="panel-body">

                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-default">Dropup</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-success">Dropup</button>
                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-primary">Dropup</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <div class="btn-group dropup">
                                    <button type="button" class="btn btn-warning">Dropup</button>
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
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
    <script type="text/javascript" src="assets/plugins/ladda/ladda.min.js"></script>
    
    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>