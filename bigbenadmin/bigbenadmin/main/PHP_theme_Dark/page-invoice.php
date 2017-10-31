<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice | Big Ben Admin</title>
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

<body class="invoice">
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Invoice</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Pages</a></li>
                    <li class="active">Invoice</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3>Company Information</h3>
                                        <img class="img-invoice-logo" src="assets/images/envato-logo.svg">
                                        <address>
                                            <strong>Envato Pty Ltd.</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890 
                                        </address>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h3>Client Information</h3>
                                        <address>
                                            <strong>John Doe</strong><br>
                                            1111 N. Sample<br>
                                            Mt. Prospect, IL 60000<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890 
                                        </address>
                                    </div>

                                    <div class="col-md-12">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item</th>
                                                    <th class="hidden-xs">Description</th>
                                                    <th class="hidden-xs">Quantity</th>
                                                    <th class="hidden-xs">Unit Cost</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Hardware</td>
                                                    <td class="hidden-xs">Lorem ipsum dolor sit amet</td>
                                                    <td class="hidden-xs">3</td>
                                                    <td class="hidden-xs">$239</td>
                                                    <td>$717</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Software</td>
                                                    <td class="hidden-xs">Consetetur sadipscing elitr</td>
                                                    <td class="hidden-xs">8</td>
                                                    <td class="hidden-xs">$119</td>
                                                    <td>$952</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Licences</td>
                                                    <td class="hidden-xs">Sed diam nonumy eirmod tempor</td>
                                                    <td class="hidden-xs">100</td>
                                                    <td class="hidden-xs">$79</td>
                                                    <td>$7900</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Drinks</td>
                                                    <td class="hidden-xs">Invidunt ut labore et dolore magna</td>
                                                    <td class="hidden-xs">500</td>
                                                    <td class="hidden-xs">$3</td>
                                                    <td>$1500</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="row padding-top-10px">
                                    <div class="col-md-6">
                                        <div class="well">
                                            <p>
                                                <strong>Notes: </strong> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-right">
                                        <ul class="list-unstyled amount padding-bottom-5px">
                                            <li>
                                                <strong>Subtotal:</strong>
                                                $11,069
                                            </li>

                                            <li>
                                                <strong>Delivery:</strong>
                                                $5
                                            </li>

                                            <li>
                                                <strong>VAT (10%):</strong>
                                                $1107.40
                                            </li>

                                            <li class="total">
                                                <strong>Total:</strong>
                                                $12,181.40
                                            </li>
                                        </ul>

                                        <div class="buttons">
                                            <a class="btn btn-lg btn-primary" href="javascript:void(0);" onclick="javascript:window.print();">
                                                <i class="fa fa-print"></i> Print
                                            </a>

                                            <a class="btn btn-lg btn-success" href="javascript:void(0);">
                                                Proceed to Payment <i class="fa fa-angle-right"></i>
                                            </a>
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