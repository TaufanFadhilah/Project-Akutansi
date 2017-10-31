<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Advanced Form Controls | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/date-picker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/customselect/customselect.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/emojionearea/emojionearea.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Advanced Forms <small>Advanced form controls like pickers, selectors</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Forms</a></li>
                    <li class="active">Advanced Forms</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Date Picker</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control date-picker" data-autoclose="1" placeholder="Select Date">
                                </div>
                                
                                <div class="form-group">
                                    <label>Date Picker with addon</label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" placeholder="Select Date">
                                        <div class="input-group-addon">
                                            <span class="sli-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>With Date Format</label>
                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy">
                                </div>
                                
                                <div class="form-group">
                                    <label>With Clear Button</label>
                                    <input type="text" class="form-control date-picker" data-clearBtn="1" placeholder="dd/mm/yyyy">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Date Time Picker</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <label>Date Time Picker</label>
                                    <div class='input-group' >
                                        <input type='text' class="form-control dateTime-picker" placeholder="select Date & Time">
                                        <span class="input-group-addon">
                                            <span class="sli-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Date Picker with Tamil Language(‎தமிழ்)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control dateTime-picker" data-locale="ta" placeholder="தேர்வு தேதி மற்றும் நேரம்">
                                        <div class="input-group-addon">
                                            <span class="sli-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>With Date Format</label>
                                    <input type="text" class="form-control dateTime-picker" data-format="DD/MM/YYYY" placeholder="dd/mm/yyyy">
                                </div>
                                
                                <div class="form-group">
                                    <label>With Inline</label>
                                    <div class="form-group">
                                        <div class='input-group date dateTime-picker' data-sideBySide="1">
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="sli-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Custom Select</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal">
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Simple</label>
                                        <div class="col-sm-9">
                                            <select name="somename" class="form-control custom-Select">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Multiple</label>
                                        <div class="col-sm-9">
                                            <select name="somename" class="form-control custom-Select" multiple="multiple">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">With Select All</label>
                                        <div class="col-sm-9">
                                            <select name="somename" class="form-control custom-Select" multiple="multiple" data-selectAll="1">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Custom Select</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form>
                                    
                                    <div class="form-group">
                                        <label>Simple Select 2</label>
                                        <select class="form-control select2Search">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Select2 Without Search</label>
                                        <select class="form-control select2">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Select2 multiple Tags</label>
                                        <select class="form-control select2"  multiple="multiple">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">input-groups</h3>
                            </div>
                            <div class="panel-body">

                                <div class="col-md-3">
                                    <label>Label One</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label>Email Addon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-addon">@example.com</span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label>Label Three</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label>Your vanity URL</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">https://example.com</span>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                    </div>
                                </div>
                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Button addons</h3>
                            </div>
                            <div class="panel-body">

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">Go!</button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search for...">
                                    </div><!-- /input-group -->
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Go!</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> 
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li> 
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li> 
                                                <li><a href="#">Separated link</a></li> 
                                            </ul> 
                                        </div> 
                                        <input type="text" class="form-control" aria-label="Text dropdown">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" aria-label="Text dropdown">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span> 
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li> 
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li role="separator" class="divider"></li> 
                                                <li><a href="#">Separated link</a></li> 
                                            </ul> 
                                        </div> 
                                    </div>
                                </div>

                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Masking</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">ISBN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="Date">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">TIN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="TIN">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">SSN</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" data-mask="999-99-9999" placeholder="SSN">
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">File input</h3>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="hidden" value="" name="..."><input type="file" name=""></span>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>

                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Emoji Picker</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Emoji Picker</label>
                                    <input type="text" class="form-control txt-emoji" data-position="top" value=":smiley_cat:"/>
                                </div>
                                
                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Character Counter</h3>
                            </div>
                            <div class="panel-body">
                                <textarea class="form-control txtCharCounter" maxlength="25" rows="4" warningLen="5" data-warningColor="#E03B30"></textarea>
                                <p class="charCounter"></p>
                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bootstrap Checkboxes & Radios</h3>
                            </div>
                            <div class="panel-body clearfix">
                                
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <input id="checkbox1" class="styled" type="checkbox">
                                        <label for="checkbox1">
                                            Default
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" class="styled" type="checkbox" checked>
                                        <label for="checkbox2">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" class="styled" type="checkbox">
                                        <label for="checkbox3">
                                            Success
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox4" class="styled" type="checkbox">
                                        <label for="checkbox4">
                                            Info
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox5" type="checkbox" class="styled" checked>
                                        <label for="checkbox5">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkbox6" type="checkbox" class="styled" checked>
                                        <label for="checkbox6">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <p>Checkboxes without label text</p>
                                    <div class="checkbox">
                                        <input type="checkbox" class="styled" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                        <label></label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" class="styled styled-primary" id="singleCheckbox2" value="option2" checked aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    
                                    <p><code>.checkbox-circle</code> for roundness.</p>
                                    <div class="checkbox checkbox-circle">
                                        <input id="checkbox7" class="styled" type="checkbox">
                                        <label for="checkbox7">
                                            Simply Rounded
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input id="checkbox8" class="styled" type="checkbox" checked>
                                        <label for="checkbox8">
                                            Me too
                                        </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-sm-4">
                                    <p>Radios</p>
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio1" value="option1" checked>
                                        <label for="radio1">
                                            Small
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="radio1" id="radio2" value="option2">
                                        <label for="radio2">
                                            Big
                                        </label>
                                    </div>
                                    
                                    <p>Supports bootstrap brand colors</p>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="radio2" id="radio3" value="option1">
                                        <label for="radio3">
                                            One
                                        </label>
                                    </div>
                                    <div class="radio radio-info">
                                        <input type="radio" name="radio2" id="radio4" value="option2" >
                                        <label for="radio4">
                                            Two
                                        </label>
                                    </div>
                                    <div class="radio radio-warning">
                                        <input type="radio" name="radio2" id="radio5" value="option2" >
                                        <label for="radio5">
                                            Three
                                        </label>
                                    </div>
                                    <div class="radio radio-danger">
                                        <input type="radio" name="radio2" id="radio6" value="option2" checked>
                                        <label for="radio6">
                                            Four
                                        </label>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-6">
                                    <p>Inline checkboxes</p>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
                                        <label for="inlineCheckbox1"> Inline One </label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox2" value="option1" checked>
                                        <label for="inlineCheckbox2"> Inline Two </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" class="styled" id="inlineCheckbox3" value="option1">
                                        <label for="inlineCheckbox3"> Inline Three </label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <p>Inline Radio</p>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                        <label for="inlineRadio1"> Inline One </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                        <label for="inlineRadio2"> Inline Two </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio3" value="option2" name="radioInline">
                                        <label for="inlineRadio3"> Inline Three </label>
                                    </div>
                                </div>
                                
                                    
                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Timepicker</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <input type="text" class="form-control time-picker">
                                        <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control time-picker" data-autoclose="1" placeholder="Select Date">
                                </div>
                                
                            </div>  <!-- END: Panel Body -->
                        </div>  <!-- END: Panel -->
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Color picker</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <div class="input-group colorpicker-component color-picker">
                                        <input type="text" value="#00AABB" class="form-control" />
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Date Picker</label>
                                    <input type="text" class="form-control color-picker" data-autoclose="1" placeholder="Select Color">
                                </div>
                                
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

    <script type="text/javascript" src="assets/plugins/date-picker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/dateTime-picker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/customselect/jquery.customselect.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/characterCounter.min.js"></script>
    <script type="text/javascript" src="assets/plugins/emojionearea/emojionearea.min.js"></script>
    <script type="text/javascript" src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>