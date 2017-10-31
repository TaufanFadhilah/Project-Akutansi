<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Basic Forms | Big Ben Admin</title>
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
                <h1>Forms <small>Basic Form examples</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Forms</a></li>
                    <li class="active">Basic Forms</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Basic example</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile">
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" class="styled" type="checkbox" checked>
                                        <label for="checkbox2">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Horizontal form</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Full Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputUserName" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-4 control-label">Confirm Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox1" class="styled" type="checkbox" checked>
                                                <label for="checkbox1">I agree to the terms</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Sign up</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Inline form</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="exampleInputName2">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                                    </div>
                                    <button type="submit" class="btn btn-default">Send invitation</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Checkboxes and radios</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="checkbox disabled">
                                    <label>
                                        <input type="checkbox" value="" disabled>
                                        Option two is disabled
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                        Option three is disabled
                                    </label>
                                </div>
                                
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                </label>
                                
                                <div class="clearfix"></div>
                                
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                </label>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Checkboxes and radios</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <label>Email address</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Email address</label>
                                    <select multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Validation states</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess1">Input with success</label>
                                    <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
                                    <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="control-label" for="inputWarning1">Input with warning</label>
                                    <input type="text" class="form-control" id="inputWarning1">
                                </div>
                                <div class="form-group has-error">
                                    <label class="control-label" for="inputError1">Input with error</label>
                                    <input type="text" class="form-control" id="inputError1">
                                </div>
                                <div class="has-success">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="checkboxSuccess" value="option1">
                                            Checkbox with success
                                        </label>
                                    </div>
                                </div>
                                <div class="has-warning">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="checkboxWarning" value="option1">
                                            Checkbox with warning
                                        </label>
                                    </div>
                                </div>
                                <div class="has-error">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="checkboxError" value="option1">
                                            Checkbox with error
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">With optional icons</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group has-success has-feedback">
                                    <label class="control-label">Input with success</label>
                                    <input type="text" class="form-control">
                                    <span class="fa fa-check form-control-feedback"></span>
                                </div>
                                
                                <div class="form-group has-warning has-feedback">
                                    <label class="control-label">Input with warning</label>
                                    <input type="text" class="form-control" >
                                    <span class="fa fa-warning form-control-feedback" aria-hidden="true"></span>
                                </div>
                                
                                <div class="form-group has-error has-feedback">
                                    <label class="control-label">Input with error</label>
                                    <input type="text" class="form-control" >
                                    <span class="fa fa-ban form-control-feedback" aria-hidden="true"></span>
                                </div>
                                
                                <div class="form-group has-success has-feedback">
                                    <label class="control-label">Input group with success</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                    </div>
                                    <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
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