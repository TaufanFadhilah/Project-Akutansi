<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSS Toggle | Big Ben Admin</title>
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
                <h1>CSS Toggle <small>CSS Radio & Checkbox</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Forms</a></li>
                    <li class="active">CSS Toggle</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <div class="col-sm-6">
                                    <h6 class="card-subtitle text-muted">Toggle with Checkboxes</h6><br>

                                    <div class="mk-trc">
                                        <input id="checkbox1" type="checkbox" name="checkbox1">
                                        <label for="checkbox1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-text="true">
                                        <input id="checkbox2" type="checkbox" name="checkbox2">
                                        <label for="checkbox2"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-radius="true">
                                        <input id="checkbox3" type="checkbox" name="checkbox3">
                                        <label for="checkbox3"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-text="true" data-radius="true">
                                        <input id="checkbox4" type="checkbox" name="checkbox4">
                                        <label for="checkbox4"><i></i></label>
                                    </div>

                                    <div class="mk-trc">
                                        <input id="checkbox5" type="checkbox" name="checkbox5" disabled>
                                        <label for="checkbox5"><i></i></label>
                                    </div>


                                    <h6 class="card-subtitle text-muted">Toggle with Radio buttons</h6><br>

                                    <div class="mk-trc">
                                        <input id="checkbox6" type="radio" name="checkbox6">
                                        <label for="checkbox6"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-text="true">
                                        <input id="checkbox7" type="radio" name="checkbox6">
                                        <label for="checkbox7"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-radius="true">
                                        <input id="checkbox8" type="radio" name="checkbox6">
                                        <label for="checkbox8"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-text="true" data-radius="true">
                                        <input id="checkbox9" type="radio" name="checkbox6">
                                        <label for="checkbox9"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-text="true">
                                        <input id="checkbox10" type="radio" name="checkbox6" disabled>
                                        <label for="checkbox10"><i></i></label>
                                    </div>

                                </div>  <!--End  Col 6-->

                                <div class="col-sm-6">
                                    <h6 class="card-subtitle text-muted">Toggle with Radio buttons</h6><br>

                                    <div>
                                        <div class="mk-trc">
                                            <input id="checkbox11" type="checkbox" name="checkbox7">
                                            <label for="checkbox11"><i></i> Default with  label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-text="true">
                                            <input id="checkbox12" type="checkbox" name="checkbox7">
                                            <label for="checkbox12"><i></i> Default style with indicator text and label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-radius="true">
                                            <input id="checkbox13" type="checkbox" name="checkbox7">
                                            <label for="checkbox13"><i></i> Radius style with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-text="true" data-radius="true">
                                            <input id="checkbox14" type="checkbox" name="checkbox7">
                                            <label for="checkbox14"><i></i> Radius style with text and label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc">
                                            <input id="checkbox15" type="checkbox" name="checkbox7" disabled>
                                            <label for="checkbox15"><i></i> Radius style with text and label</label>
                                        </div>
                                    </div>

                                </div>  <!--End  Col 6-->

                                <div class="clearfix" style="margin-bottom: 30px;"></div>

                                <div class="col-sm-6">
                                    <h5>Radio Styles</h5>
                                    <h6 class="card-subtitle text-muted">Basic Radio Styles</h6><br>

                                    <div class="mk-trc" data-style="radio">
                                        <input id="radio1" type="radio" name="radio1">
                                        <label for="radio1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="radio" data-text="true">
                                        <input id="radio2" type="radio" name="radio1">
                                        <label for="radio2"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="radio" data-radius="true">
                                        <input id="radio5" type="radio" name="radio1">
                                        <label for="radio5"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="radio" data-text="true" data-radius="true">
                                        <input id="radio6" type="radio" name="radio1">
                                        <label for="radio6"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="radio">
                                        <input id="radio7" type="radio" name="radio1" disabled>
                                        <label for="radio7"><i></i></label>
                                    </div>

                                    <br>
                                    <h6 class="card-subtitle text-muted">Basic Radio with Label</h6><br>

                                    <div>
                                        <div class="mk-trc" data-style="radio">
                                            <input id="radio8" type="radio" name="radio">
                                            <label for="radio8"><i></i> Default with  label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="radio">
                                            <input id="radio9" type="radio" name="radio">
                                            <label for="radio9"><i></i> Default with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="radio" data-radius="true">
                                            <input id="radio10" type="radio" name="radio">
                                            <label for="radio10"><i></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="radio" data-radius="true">
                                            <input id="radio11" type="radio" name="radio">
                                            <label for="radio11"><i></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="radio">
                                            <input id="radio12" type="radio" name="radio" disabled>
                                            <label for="radio12"><i></i> Default disable with label</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <h5>Check style</h5>
                                    <h6 class="card-subtitle text-muted">Basic Checkbox</h6><br>

                                    <div class="mk-trc" data-style="check">
                                        <input id="checkbox1.1" type="checkbox" name="radio1">
                                        <label for="checkbox1.1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-text="true">
                                        <input id="checkbox2.1" type="checkbox" name="radio1">
                                        <label for="checkbox2.1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-radius="true">
                                        <input id="checkbox3.1" type="checkbox" name="radio1">
                                        <label for="checkbox3.1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-text="true" data-radius="true">
                                        <input id="checkbox4.1" type="checkbox" name="radio1">
                                        <label for="checkbox4.1"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check">
                                        <input id="checkbox5.1" type="checkbox" name="radio1" disabled>
                                        <label for="checkbox5.1"><i></i></label>
                                    </div>

                                    <br>
                                    <h6 class="card-subtitle text-muted">Check with labels</h6><br>

                                    <div>
                                        <div class="mk-trc" data-style="check">
                                            <input id="checkbox11.1" type="checkbox" name="checkbox7">
                                            <label for="checkbox11.1"><i></i> Default with  label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-text="true">
                                            <input id="checkbox12.1" type="checkbox" name="checkbox7">
                                            <label for="checkbox12.1"><i></i> Default with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-radius="true">
                                            <input id="checkbox13.1" type="checkbox" name="checkbox7">
                                            <label for="checkbox13.1"><i></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-text="true" data-radius="true">
                                            <input id="checkbox14.1" type="checkbox" name="checkbox7">
                                            <label for="checkbox14.1"><i></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check">
                                            <input id="checkbox15.1" type="checkbox" name="checkbox7" disabled>
                                            <label for="checkbox15.1"><i></i> Radius disable with label</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix" style="margin-bottom: 30px;"></div>

                                <div class="col-sm-6">

                                    <h5>Check style with font-awesome</h5>
                                    <h6 class="card-subtitle text-muted">Basic</h6><br>

                                    <div class="mk-trc" data-style="check">
                                        <input id="checkbox1.11" type="checkbox" name="radio1">
                                        <label for="checkbox1.11"><i data-before-check="&#xf00d;" data-after-check="&#xf00c;"></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-text="true">
                                        <input id="checkbox2.11" type="checkbox" name="radio1">
                                        <label for="checkbox2.11"><i data-before-check="&#xf165" data-after-check="&#xf164;"></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-radius="true">
                                        <input id="checkbox3.11" type="checkbox" name="radio1">
                                        <label for="checkbox3.11"><i data-before-check="&#xf023;" data-after-check="&#xf13e;"></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check" data-text="true" data-radius="true">
                                        <input id="checkbox4.11" type="checkbox" name="radio1">
                                        <label for="checkbox4.11"><i data-before-check="&#xf026;" data-after-check="&#xf028;"></i></label>
                                    </div>

                                    <div class="mk-trc" data-style="check">
                                        <input id="checkbox5.11" type="checkbox" name="radio1">
                                        <label for="checkbox5.11"><i data-before-check="&#xf183;" data-after-check="&#xf182;"></i></label>
                                    </div>

                                    <br><br>
                                    <h6 class="card-subtitle text-muted">Check with label and font-awesome</h6><br>

                                    <div>
                                        <div class="mk-trc" data-style="check">
                                            <input id="checkbox11.11" type="checkbox" name="checkbox7">
                                            <label for="checkbox11.11"><i data-before-check="&#xf00d;" data-after-check="&#xf00c;"></i> Default with  label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-text="true">
                                            <input id="checkbox12.11" type="checkbox" name="checkbox7">
                                            <label for="checkbox12.11"><i data-before-check="&#xf088;" data-after-check="&#xf087;"></i> Default with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-radius="true">
                                            <input id="checkbox13.11" type="checkbox" name="checkbox7">
                                            <label for="checkbox13.11"><i data-before-check="&#xf023;" data-after-check="&#xf13e;"></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check" data-text="true" data-radius="true">
                                            <input id="checkbox14.11" type="checkbox" name="checkbox7">
                                            <label for="checkbox14.11"><i data-before-check="&#xf026;" data-after-check="&#xf028;"></i> Radius with label</label>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mk-trc" data-style="check">
                                            <input id="checkbox15.11" type="checkbox" name="checkbox7">
                                            <label for="checkbox15.11"><i data-before-check="&#xf183;" data-after-check="&#xf182;"></i> Default with label</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <h5>Color Options</h5>

                                    <div>
                                        <div class="mk-trc" data-color="red" data-text="true">
                                            <input id="c1" type="checkbox">
                                            <label for="c1"><i></i>Label Text</label>
                                        </div>
                                    </div>

                                    <div class="mk-trc" data-color="pink">
                                        <input id="c2" type="checkbox">
                                        <label for="c2"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="black">
                                        <input id="c3" type="checkbox">
                                        <label for="c3"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="purple">
                                        <input id="c4" type="checkbox">
                                        <label for="c4"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="deep-purple">
                                        <input id="c5" type="checkbox">
                                        <label for="c5"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="indigo">
                                        <input id="c6" type="checkbox">
                                        <label for="c6"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="blue">
                                        <input id="c7" type="checkbox">
                                        <label for="c7"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="light-blue">
                                        <input id="c8" type="checkbox">
                                        <label for="c8"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="cyan">
                                        <input id="c9" type="checkbox">
                                        <label for="c9"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="teal">
                                        <input id="c10" type="checkbox">
                                        <label for="c10"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="green">
                                        <input id="c11" type="checkbox">
                                        <label for="c11"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="light-green">
                                        <input id="c12" type="checkbox">
                                        <label for="c12"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="lime">
                                        <input id="c13" type="checkbox">
                                        <label for="c13"><i></i></label>
                                    </div>

                                    <div class="mk-trc" data-color="yellow">
                                        <input id="c14" type="checkbox">
                                        <label for="c14"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="amber">
                                        <input id="c15" type="checkbox">
                                        <label for="c15"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="orange">
                                        <input id="c16" type="checkbox">
                                        <label for="c16"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="deep-orange">
                                        <input id="c17" type="checkbox">
                                        <label for="c17"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="brown">
                                        <input id="c18" type="checkbox">
                                        <label for="c18"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="grey">
                                        <input id="c19" type="checkbox">
                                        <label for="c19"><i></i></label>
                                    </div>
                                    <div class="mk-trc" data-color="blue-grey">
                                        <input id="c20" type="checkbox">
                                        <label for="c20"><i></i></label>
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