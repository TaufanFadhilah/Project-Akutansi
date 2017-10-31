<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Validation | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/validationEngine/validationEngine.jquery.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Form Validation</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Forms</a></li>
                    <li class="active">Validation</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Validation Engine</h3>
                            </div>
                            <div class="panel-body">

                                <form action="#" role="form" id="formvalidationtooltip">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control validate[required]" name="firstname" id="firstname" placeholder="First Name" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control validate[required]" name="firstname" id="firstname" placeholder="First Name" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>E Mail ID</label>
                                            <input type="text" class="form-control validate[required,custom[email]]" name="email" id="email" placeholder="E-Mail" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Only Letters And Digits</label>
                                            <input type="text" class="form-control validate[required,custom[onlyLetterNumber]]" name="spacel" id="spacel" placeholder="Only Numbers And Digits" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type = "password" name = "txtPassword" id = "txtPassword" class = "form-control validate[required,minSize[6],maxSize[50]]" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type = "password" name = "txtCPassword" id = "txtCPassword" class = "form-control validate[required,equals[txtPassword]]" data-prompt-position="topLeft">
                                        </div>

                                        <div class="form-group">
                                            <label>Only Letters And Digits</label>
                                            <select name="sport" id="sport" class="form-control validate[required]" data-prompt-position="topLeft">
                                                <option value="">Choose a sport</option>
                                                <option value="option1">Tennis</option>
                                                <option value="option2">Football</option>
                                                <option value="option3">Golf</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-actions fluid">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">In-Line Form Validation</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-validate" action="#" role="form">
                                    <div class="form-body">

                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastname">last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="First Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="passwordc">Confirm Password</label>
                                            <input type="password" class="form-control" name="passwordc" id="passwordc" placeholder="Confirm Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">Url</label>
                                            <input type="url" class="form-control" name="url" id="url" placeholder="url">
                                        </div>

                                        <div class="form-group">
                                            <label for="numbers">Numbers Only</label>
                                            <input type="text" class="form-control" name="numbers" id="numbers" placeholder="Numbers">
                                        </div>

                                    </div>

                                    <div class="form-actions fluid">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
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
    
    <script src="assets/plugins/validationEngine/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/plugins/validation/jquery.validate.min.js"></script>
    
    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/page-validation.js"></script>
    <script>
        jQuery(document).ready(function () {
            FormValidationInline.init();
            FormValidationTooltip.init();
        });
    </script>
</body>
</html>