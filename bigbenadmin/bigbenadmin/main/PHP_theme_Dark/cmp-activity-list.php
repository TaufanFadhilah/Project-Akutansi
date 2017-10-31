<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity Timeline | Big Ben Admin</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/lib/page-acctivity-timeline.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/lightGallery/css/lightgallery.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>
    
    <div class="wrapper has-footer">
        
        <?php include './includs/header.php';?>
        
        <?php include './includs/sidebar.php';?>
        
        <div class="main-container">    <!-- START: Main Container -->
            
            <div class="page-header">
                <h1>Activity Timeline <small>Complete List of Activities</small></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">Components</a></li>
                    <li class="active">Activity</li>
                </ol>
            </div>
            
            <div class="content-wrap">  <!--START: Content Wrap-->
                
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <!-- BEGIN TIMELINE -->
                                <ul class="flik-timeline flik-timeline-1" data-scroll-effect="slide-down-up-effect">
                                    
                                    <li class="event" data-date="30 June 2016">
                                        <h3>User Created</h3>
                                        <p class="event-content" data-date="30 June 2016">
                                            Admin created new user <a href="#">User Name</a>
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="29 June 2016">
                                        <h3>Lorem ipsum dolor sit amet</h3>
                                        <p class="event-content" data-date="29 June 2016">
                                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="28 June 2016">
                                        <h3>Lorem ipsum dolor sit amet</h3>
                                        <p class="event-content" data-date="28 June 2016">
                                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                                        </p>
                                        
                                        <ul class="list-inline lightgallery" data-mode="lg-slide-skew-rev" loop="1">
                                            <li data-src="demo/photos/img-wall-01.jpg"> 
                                                <a href><img src="demo/photos/img-wall-01.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-02.jpg">
                                                <a href><img src="demo/photos/img-wall-02.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                            <li data-src="demo/photos/img-wall-03.jpg">
                                                <a href><img src="demo/photos/img-wall-03.jpg" alt="" style="width: 100px;"></a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="event" data-date="27 June 2016">
                                        <h3>Nullam efficitur, odio sed varius consectetur</h3>
                                        <p class="event-content" data-date="27 June 2016">
                                            Nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.
                                        </p>
                                        <p>nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.</p>
                                    </li>
                                    
                                    <li class="event" data-date="27 June 2016">
                                        <h3>Financial/legal</h3>
                                        <p class="event-content" data-date="27 June 2016">
                                            Facebook settles both lawsuits, ConnectU vs Facebook, Mark Zuckerberg et al.
                                            and intellectual property theft, Wayne Chang et al. over The Winklevoss Chang Group's Social Butterfly project.
                                            The settlement effectively had Facebook acquiring ConnectU for $20 million in cash and over
                                            $1.2 million in shares, valued at $45 million based on $15 billion company valuation
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="26 June 2016">
                                        <h3>Popular culture</h3>
                                        <p class="event-content" data-date="26 June 2016">
                                            The Social Network, a film about the beginnings of Facebook directed by David Fincher is released.
                                            The film is met with widespread critical acclaim as well as commercial success;
                                            however, Mark Zuckerberg says that the film is a largely inaccurate account of what happened
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="25 June 2016">
                                        <h3>Product (mobile-only)</h3>
                                        <p class="event-content" data-date="25 June 2016">
                                            On January 30, Facebook announces <a href="https://www.facebook.com/paper" title="Facebook Paper">Facebook Paper</a> , a separate iOS app that provides a newspaper-like
                                            or magazine-like experience for reading on the phone,
                                            scheduled for launch on February 3.
                                            Facebook also announces Facebook Creative Labs, an intra-company effort to have
                                            separate teams working on separate mobile apps that specialize in different facets
                                            related to the Facebook experience, rather than trying to make changes to Facebook's
                                            main web version, mobile version, or its iOS and Android apps, and says that <a href="https://www.facebook.com/paper" title="Facebook Paper">Facebook Paper</a>

                                            is the first product of Facebook Creative Labs.
                                            Facebook Paper receives mixed reviews, and some commentators note its similarity with Flipboard
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="25 June 2016">
                                        <h3>Open sourcing</h3>
                                        <p class="event-content" data-date="25 June 2016">
                                            Facebook releases its <a href="https://facebook.github.io/react/">React</a> native framework for building native apps as open source.
                                            This is announced on the second day of the F8 conference.
                                        </p>
                                    </li>
                                    
                                    <li class="event" data-date="24 June 2016">
                                        <h3>Userbase</h3>
                                        <p class="event-content" data-date=24 June 2016">
                                            Facebook announces that it has hit the milestone of <strong>1 billion users</strong> accessing it on a single day
                                        </p>
                                    </li>
                                    
                                </ul> <!-- END TIMELINE -->
                                
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
    <script type="text/javascript" src="assets/plugins/lightGallery/js/lightgallery-all.min.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>