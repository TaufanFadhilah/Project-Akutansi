<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tabs & Navs | Big Ben Admin</title>
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
                <h1>Tabs & Navs</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Ui Elements</a></li>
                    <li class="active">Tabs & Navs</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Default Tabs</h3>
                            </div>
                            <div class="panel-body no-padding">
                                <ul class="nav nav-tabs">
                                    <li class=""><a href="#tab_1_1" data-toggle="tab" aria-expanded="false"> Home </a></li>
                                    <li class="active"><a href="#tab_1_2" data-toggle="tab" aria-expanded="true"> Profile</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Dropdown
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#tab_1_3" tabindex="-1" data-toggle="tab"> Option 1 </a></li>
                                            <li><a href="#tab_1_4" tabindex="-1" data-toggle="tab"> Option 2 </a></li>
                                            <li><a href="#tab_1_3" tabindex="-1" data-toggle="tab"> Option 3 </a></li>
                                            <li><a href="#tab_1_4" tabindex="-1" data-toggle="tab"> Option 4 </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab_1_1">
                                        <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                                            retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui.</p>
                                    </div>
                                    <div class="tab-pane fade active in" id="tab_1_2">
                                        <p> Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica
                                            VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                                            stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_1_3">
                                        <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                                            etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_1_4">
                                        <p> Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore
                                            wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh
                                            craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Right Tabs</h3>
                            </div>
                            <div class="panel-body no-padding">

                                <ul class="nav nav-tabs tabs-reversed">
                                    <li><a href="#tab_reversed_1_1" data-toggle="tab"> Home </a></li>
                                    <li class="active"><a href="#tab_reversed_1_2" data-toggle="tab"> Profile </a></li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> Dropdown
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#tab_reversed_1_3" tabindex="-1" data-toggle="tab"> Option 1 </a>
                                            </li>
                                            <li>
                                                <a href="#tab_reversed_1_4" tabindex="-1" data-toggle="tab"> Option 2 </a>
                                            </li>
                                            <li>
                                                <a href="#tab_reversed_1_3" tabindex="-1" data-toggle="tab"> Option 3 </a>
                                            </li>
                                            <li>
                                                <a href="#tab_reversed_1_4" tabindex="-1" data-toggle="tab"> Option 4 </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="tab_reversed_1_1">
                                        <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                                            retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui. </p>
                                    </div>
                                    <div class="tab-pane fade active in" id="tab_reversed_1_2">
                                        <p> Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica
                                            VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                                            stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_reversed_1_3">
                                        <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                                            etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_reversed_1_4">
                                        <p> Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore
                                            wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh
                                            craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bottom Tabs</h3>
                            </div>
                            <div class="panel-body tabs-below no-padding">

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_3_1">
                                        <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher
                                            retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3_2">
                                        <p> Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft
                                            beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica
                                            VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                                            stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3_3">
                                        <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                                            etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3_4">
                                        <p> Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore
                                            wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh
                                            craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan. </p>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_3_1" data-toggle="tab"> Home </a></li>
                                    <li><a href="#tab_3_2" data-toggle="tab"> Profile </a></li>
                                    <li class="dropdown dropup">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> Dropdown
                                            <i class="fa fa-angle-up"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#tab_3_3" tabindex="-1" data-toggle="tab"> Option 1 </a></li>
                                            <li><a href="#tab_3_4" tabindex="-1" data-toggle="tab"> Option 2 </a></li>
                                            <li><a href="#tab_3_3" tabindex="-1" data-toggle="tab"> Option 3 </a></li>
                                            <li><a href="#tab_3_4" tabindex="-1" data-toggle="tab"> Option 4 </a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Left Tabs</h3>
                            </div>
                            <div class="panel-body no-padding">

                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <ul class="nav nav-tabs tabs-left">
                                            <li class="active"><a href="#tab_6_1" data-toggle="tab"> Home </a></li>
                                            <li><a href="#tab_6_2" data-toggle="tab"> Profile </a></li>
                                            <li class="dropdown">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab_6_3" tabindex="-1" data-toggle="tab"> Option 1 </a></li>
                                                    <li><a href="#tab_6_4" tabindex="-1" data-toggle="tab"> Option 2 </a></li>
                                                    <li><a href="#tab_6_3" tabindex="-1" data-toggle="tab"> Option 3 </a></li>
                                                    <li><a href="#tab_6_4" tabindex="-1" data-toggle="tab"> Option 4 </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#tab_6_1" data-toggle="tab"> Settings </a></li>
                                            <li><a href="#tab_6_1" data-toggle="tab"> More </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_6_1">
                                                <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_6_2">
                                                <p> Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table
                                                    craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.
                                                    Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel.
                                                    Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_6_3">
                                                <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                                                    skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                                                    biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_6_4">
                                                <p> Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party
                                                    locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade
                                                    thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Right Tabs</h3>
                            </div>
                            <div class="panel-body no-padding">

                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_7_1">
                                                <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                                    butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                                                    voluptate nisi qui. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_7_2">
                                                <p> Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table
                                                    craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.
                                                    Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel.
                                                    Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_7_3">
                                                <p> Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone
                                                    skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork
                                                    biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. </p>
                                            </div>
                                            <div class="tab-pane fade" id="tab_7_4">
                                                <p> Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party
                                                    locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade
                                                    thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <ul class="nav nav-tabs tabs-right">
                                            <li class="active"><a href="#tab_7_1" data-toggle="tab"> Home </a></li>
                                            <li>
                                                <a href="#tab_7_2" data-toggle="tab"> Profile </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab_7_3" tabindex="-1" data-toggle="tab"> Option 1 </a></li>
                                                    <li><a href="#tab_7_4" tabindex="-1" data-toggle="tab"> Option 2 </a></li>
                                                    <li><a href="#tab_7_3" tabindex="-1" data-toggle="tab"> Option 3 </a></li>
                                                    <li><a href="#tab_7_4" tabindex="-1" data-toggle="tab"> Option 4 </a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#tab_7_1" data-toggle="tab"> Settings </a></li>
                                            <li><a href="#tab_7_1" data-toggle="tab"> More </a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pills</h3>
                            </div>
                            <div class="panel-body">
                                
                                <ul class="nav nav-pills">
                                    <li role="presentation" class="active"><a href="#">Home</a></li>
                                    <li role="presentation"><a href="#">Profile</a></li>
                                    <li role="presentation"><a href="#">Messages</a></li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pills Justified</h3>
                            </div>
                            <div class="panel-body">
                                
                                <ul class="nav nav-pills nav-justified">
                                    <li role="presentation" class="active"><a href="#">Home</a></li>
                                    <li role="presentation"><a href="#">Profile</a></li>
                                    <li role="presentation"><a href="#">Messages</a></li>
                                </ul>
                                
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