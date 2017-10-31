<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Wizard | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/bs-overide/bootstrap.wizard.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Form Wizard</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">forms</a></li>
                    <li class="active">Wizard</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                
                                <div class="bs-wizard" id="rootwizard">
                                    
                                    <div class="navbar">
                                        <div class="navbar-inner">
                                            <div class="container">
                                                <ul class="step-indicator triangle gsi-style-1 gsi-transition">
                                                    <li><a href="#tab1" data-toggle="tab">Account setup</a></li>
                                                    <li><a href="#tab2" data-toggle="tab">Profile setup</a></li>
                                                    <li><a href="#tab3" data-toggle="tab">Billing setup</a></li>
                                                    <li><a href="#tab4" data-toggle="tab">Agreement</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-content">
                                        
                                        <div class="tab-pane" id="tab1">
                                            <h3>Provide your account details</h3>
                                            <form class="form-horizontal">
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Username</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  placeholder="Enter username">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control"  placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-12">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        
                                        <div class="tab-pane" id="tab2">
                                            <h3>Provide your Profile details</h3>
                                            <form class="form-horizontal">
                                                
                                                <div class="form-group col-sm-12">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Username</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  placeholder="Enter username">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control"  placeholder="Enter Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="Enter Password">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        
                                        <div class="tab-pane" id="tab3">
                                            <h3>Provide your billing and credit card details</h3>
                                            <form class="form-horizontal">
                                                
                                                <div class="form-group col-sm-12">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Card Holder Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  placeholder="Card Holder Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Card Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control"  placeholder="Card Number">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">CVV</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="CVV">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group col-sm-6">
                                                    <label class="col-sm-3 control-label">Expiration(MM/YYYY)</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"  placeholder="Expiration(MM/YYYY)">
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        
                                        <div class="tab-pane" id="tab4">
                                            <h3>Agreement</h3>
                                            <form class="form-horizontal">
                                                
                                                <div class="form-group col-sm-12">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                </div>
                                                
                                                <div class="form-group col-sm-12">
                                                    <div class="checkbox checkbox-success">
                                                        <input id="checkbox3" class="styled" type="checkbox">
                                                        <label for="checkbox3">I read agreement and i have not any objection</label>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        
                                        <ul class="pager wizard">
                                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                                            <li class="previous"><a href="#">Previous</a></li>
                                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
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
    <script type="text/javascript" src="assets/plugins/lib/bootstrap.wizard.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script>
        $(document).ready(function() {
            $('#rootwizard').bootstrapWizard();
        });
    </script>
</body>
</html>