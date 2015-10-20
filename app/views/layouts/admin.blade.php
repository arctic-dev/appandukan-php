<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Appan Dukan Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

   <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
     <link rel="stylesheet" href="<?php echo url('assets/admin/') ?>/css/styles.css?=121"> 
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

    <?php if (isset($_COOKIE["theme"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["theme"] ."' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>";
    } else { ?> 
        <link href='<?php echo url('assets/admin/') ?>/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <?php } ?>

    <?php if (isset($_COOKIE["headerstyle"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["headerstyle"] ."' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>";
    } else { ?>
        <link href='<?php echo url('assets/admin/') ?>/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    <?php } ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->

<?php
function linktag($address) 
{
    $header_url=url('/assets/admin/'.$address);
    echo "<link rel='stylesheet' type='text/css' href='$header_url' /> \n";
}
$pageName =Route::getCurrentRoute()->getPath(); //echo $pageName;
if ($pageName == "maps-vector.php") {
    scripttag('plugins/jqvmap/jqvmap.css'); // <!-- jQuery vector maps -->
 } elseif ($pageName == "icons-glyphicons.php") {   
    scripttag('fonts/glyphicons/css/glyphicons.min.css'); // <!-- glyphicons -->
} elseif ($pageName == "form-components.php") {   
    scripttag('plugins/form-select2/select2.css'); //<!-- Select2 -->
    scripttag('plugins/form-multiselect/css/multi-select.css'); //<!-- Multiselect -->
    scripttag('plugins/jqueryui-timepicker/jquery.ui.timepicker.css'); //<!-- jq UI Timepicker -->
    scripttag('plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    scripttag('plugins/form-fseditor/fseditor.css'); //<!-- FullScreen Editor -->
    scripttag('plugins/form-tokenfield/bootstrap-tokenfield.css'); //<!-- Tokenfield -->
    scripttag('js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "ui-paginations.php") {
    scripttag('plugins/datepaginator/bootstrap-datepaginator.css');
} elseif ($pageName == "charts-svg.php") {
    scripttag('plugins/charts-morrisjs/morris.css'); //> <!-- Charts -->
} elseif ($pageName == "form-fileupload.php") {
    scripttag('plugins/jquery-fileupload/css/jquery.fileupload-ui.css'); // <!--File Upload-->
} elseif ($pageName == "form-dropzone.php") {
    scripttag('plugins/dropzone/css/dropzone.css'); //<!-- Dropzone-->
} elseif ($pageName == "ui-tour.php") {
    scripttag('plugins/bootstro.js/bootstro.min.css'); //<!-- Bootstro.js-->
} elseif ($pageName == "ui-sliders.php") {
    scripttag('plugins/progress-skylo/skylo.css'); // <!-- Sky Loader Progress Bar -->
    scripttag('js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "form-imagecrop.php") {
    scripttag('plugins/jcrop/css/jquery.Jcrop.min.css'); // <!-- jCrop -->
} elseif ($pageName == "admin/dashboard"||$pageName == "admin/admin/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "admin/franchise/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}" ||$pageName == "admin/retailer/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "admin/subretailer/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}") {
    scripttag('plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    scripttag('plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
    scripttag('plugins/form-markdown/css/bootstrap-markdown.min.css');
} elseif ($pageName == "calendar.php") {
    scripttag('plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
} elseif ($pageName == "ui-nestable.php") {
    scripttag('plugins/form-nestable/jquery.nestable.css'); //<!-- Nestable Lists-->
} elseif ($pageName == "admin/franchise" ||$pageName == "admin/retailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/subretailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}"||  $pageName == "admin/creditdebit" ||$pageName == "admin/recharge/prepaid/{one?}/{two?}/{three?}/{four?}/{five?}" || $pageName == "admin/recharge/postpaid/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/recharge/dth/{one?}/{two?}/{three?}/{four?}/{five?}" 
    || $pageName == "admin/recharge/pan/{one?}/{two?}/{three?}/{four?}/{five?}" || $pageName == "manager_users.php") {
    scripttag('plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "tables-editable.php") {
    scripttag('plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "form-xeditable.php") {
    scripttag('plugins/form-xeditable/bootstrap3-editable/css/bootstrap-editable.css'); // <!-- X-Editable -->
} elseif ($pageName == "ui-alerts.php") {
    scripttag('plugins/pines-notify/jquery.pnotify.default.css');
}
    scripttag('plugins/codeprettifier/prettify.css'); // <!-- Google Code Prettifier -->
    scripttag('plugins/form-toggle/toggles.css'); //<!-- Toggles -->
?>

<script type="text/javascript" src="<?php echo url('assets/admin/') ?>/js/less.js"></script>
<script type="text/javascript" src="<?php echo url('assets/admin/') ?>/js/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src='http://localhost/laravel-appendukan/laravel-appendukan/assets/admin/plugins/tree/jquery-checktree.js'></script> 
<script>
$('#tree').checktree();
</script>
</head>

<body class="<?php if (isset($_COOKIE["admin_leftbar_collapse"])) echo ($_COOKIE['admin_leftbar_collapse'] . " "); // check collapse state with php
                 if (isset($_COOKIE["admin_rightbar_show"])) echo $_COOKIE['admin_rightbar_show'];
                 if (isset($_COOKIE["fixed-header"])) echo ' static-header';
                ?>">


    <div id="headerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Create Post
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messages
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-midnightblue">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-orange">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Plugins
                        </div>
                    </a>
                </div>
                            
            </div>
        </div>
    </div>

    <header class="navbar navbar-inverse <?php if (isset($_COOKIE["fixed-header"])) {echo 'navbar-static-top';} else {echo 'navbar-fixed-top';} ?>" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
       

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="<?php echo url('admin/dashboard');?>"></a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs">{{Session::get('user_name')}}<i class="fa fa-caret-down"></i></span></a>
                <ul class="dropdown-menu userinfo arrow">
                    <li class="username">
                        <a href="#">
                            
                            <div class="pull-right"><small>Logged in as <span>{{Session::get('user_name')}}</span></small></div>
                        </a>
                    </li>
                    <li class="userlinks">
                        <ul class="dropdown-menu">
                            <li><a href="{{url('admin/profile')}}">Edit Profile <i class="pull-right fa fa-pencil"></i></a></li>
                            
                            <li class="divider"></li>
                            <li><a href="{{url('login/logout')}}" class="text-right">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
               <ul class="dropdown-menu messages arrow">
                    <li class="dd-header">
                        <span>You have 1 new message(s)</span>
                        <span><a href="#">Mark all Read</a></span>
                    </li>
                    <div class="scrollthis">
                        <li><a href="#" class="active">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">9 hrs</span>
                            <img src="assets/demo/avatar/corbett.png" alt="avatar" />
                            <div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">2 days</span>
                            <img src="assets/demo/avatar/tennant.png" alt="avatar" />
                            <div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Messages</a></li>
                </ul>
            </li>
            <li class="dropdown">
               <ul class="dropdown-menu notifications arrow">
                    <li class="dd-header">
                        <span>You have 3 new notification(s)</span>
                        <span><a href="#">Mark all Seen</a></span>
                    </li>
                    <div class="scrollthis">
                        <li>
                            <a href="#" class="notification-user active">
                                <span class="time">4 mins</span>
                                <i class="fa fa-user"></i>
                                <span class="msg">New user Registered. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-danger active">
                                <span class="time">20 mins</span>
                                <i class="fa fa-bolt"></i>
                                <span class="msg">CPU at 92% on server#3! </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success active">
                                <span class="time">1 hr</span>
                                <i class="fa fa-check"></i> 
                                <span class="msg">Server#1 is live. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-warning">
                                <span class="time">2 hrs</span>
                                <i class="fa fa-exclamation-triangle"></i> 
                                <span class="msg">Database overloaded. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-order">
                                <span class="time">10 hrs</span>
                                <i class="fa fa-shopping-cart"></i> 
                                <span class="msg">New order received. </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-failure">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-times-circle"></i>
                                <span class="msg">Application error!</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-fix">
                                <span class="time">12 hrs</span>
                                <i class="fa fa-wrench"></i>
                                <span class="msg">Installation Succeeded.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="notification-success">
                                <span class="time">18 hrs</span>
                                <i class="fa fa-check"></i>
                                <span class="msg">Account Created. </span>
                            </a>
                        </li>
                    </div>
                    <li class="dd-footer"><a href="#">View All Notifications</a></li>
                </ul>
            </li>
          
        </ul>
    </header>

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                
                <li style="margin-top:30px;"><a href="<?php echo url('admin/dashboard');?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
               
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Services</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/service');?>"><span>Prepaid Mobile</span></a></li>
                        <li><a href="<?php echo url('admin/service/postpaid');?>"><span>Postpaid Mobile</span></a></li> 
                        <li><a href="<?php echo url('admin/service/dth');?>"><span>DTH service</span></a></li>                                         
                    </ul>
                </li>
                
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Franchise</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/franchise/add');?>"><span>Create Franchise</span></a></li>
                        <li><a href="<?php echo url('admin/franchise');?>"><span>Manage Franchise</span></a></li> 
                        <li><a href="<?php echo url('admin/franchise/dashboard');?>"><span>Franchise Overview</span></a></li>                                         
                    </ul>
                </li>
                
                 <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Retailer</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/retailer/add');?>"><span>Create Retailer</span></a></li>
                        <li><a href="<?php echo url('admin/retailer/');?>"><span>Manage Retailer</span></a></li>
                        <li><a href="<?php echo url('admin/retailer/dashboard');?>"><span>Franchise Overview</span></a></li>                                                              
                    </ul>
                </li>
                
                 <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Sub Retailer</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/subretailer/add');?>"><span>Create Sub Retailer</span></a></li>
                        <li><a href="<?php echo url('admin/subretailer/');?>"><span>Manage Sub Retailer</span></a></li>  
                        <li><a href="<?php echo url('admin/subretailer/dashboard');?>"><span>Sub Retailer Overview</span></a></li>                                                                                 
                    </ul>
                </li>
                
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Credit / Debit</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/creditdebit/add');?>"><span>Add Credit / Debit</span></a></li>
                        <li><a href="<?php echo url('admin/creditdebit/');?>"><span>Manage Credit / Debit</span></a></li>  
                        <li><a href="<?php echo url('admin/creditdebit/dashboard');?>"><span>Credit / Debit Overview</span></a></li>                                                                                 
                    </ul>
                </li>
                 <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Mobile Recharge</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/recharge/prepaid');?>"><span>Prepaid History</span></a></li>
                        <li><a href="<?php echo url('admin/recharge/postpaid');?>"><span>Postpaid History</span></a></li>  
                         </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>DTH Recharge</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/recharge/dth');?>"><span>DTH History</span></a></li>
                         </ul>
                </li>                
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Pan Forms</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/recharge/pan');?>"><span>PAN History</span></a></li>
                        <li><a href="<?php echo url('admin/recharge/coupon');?>"><span>PAN Coupons</span></a></li>
                         </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Itr Forms</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/itr');?>"><span>Itr Upv</span></a></li>
                        <li><a href="<?php echo url('admin/itr/itr');?>"><span>Itr History</span></a></li>
                         </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-th"></i> <span>Icash card</span> </a>
                    <ul class="acc-menu">
                        <li><a href="<?php echo url('admin/icash');?>"><span>Card History</span></a></li>
                        <li><a href="<?php echo url('admin/icash/topup');?>"><span>Topup History</span></a></li>
                        <li><a href="<?php echo url('admin/icash/transfer');?>"><span>Transfer History</span></a></li>
                         </ul>
                </li>
                
              
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->
       
  <input type="hidden" name="clientIP" id="clientIP" value="">


     @yield('content') 
     
     
     
         <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>APPAN DUKAN &copy; 2015</li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<?php
function scripttag($address) 
{
    $address_url=url('/assets/admin/'.$address);
    echo "<script type='text/javascript' src='$address_url'></script> \n";
}    //The following plugins are used for the functionality of the theme
    scripttag('js/jqueryui-1.10.3.min.js');
    scripttag('js/bootstrap.min.js');
    scripttag('js/enquire.js');
    scripttag('js/jquery.cookie.js');
    scripttag('js/jquery.nicescroll.min.js');

    //Following plugins can be removed based on usage
    //Used in multiple places
    scripttag('plugins/codeprettifier/prettify.js');     //Google Code Prettifier
    scripttag('plugins/easypiechart/jquery.easypiechart.min.js');
    scripttag("plugins/sparklines/jquery.sparklines.min.js");
    scripttag("plugins/form-toggle/toggle.min.js");      // Toggle buttons \n ";


$pageName =Route::getCurrentRoute()->getPath();
if ($pageName == "maps-vector.php") {
    // echo "//Jquery VMap Plugins \n";
    scripttag("plugins/jqvmap/jquery.vmap.min.js");
    scripttag("plugins/jqvmap/maps/jquery.vmap.world.js");
    scripttag("plugins/jqvmap/maps/jquery.vmap.europe.js");
    scripttag("plugins/jqvmap/maps/jquery.vmap.usa.js");
    scripttag("plugins/jqvmap/data/jquery.vmap.sampledata.js");
    scripttag("demo/demos-jqvmap.js");
} elseif ($pageName == "ui-modals.php") {
    scripttag("plugins/bootbox/bootbox.min.js");
    scripttag("demo/demo-modals.js");
} elseif ($pageName == "ui-paginations.php") {
    scripttag("plugins/form-daterangepicker/moment.min.js");
    scripttag("plugins/form-datepicker/js/bootstrap-datepicker.js");
    scripttag("plugins/datepaginator/bootstrap-datepaginator.js");
    scripttag("demo/demo-paginations.js");
} elseif ($pageName == "form-dropzone.php") {
    scripttag("plugins/dropzone/dropzone.min.js");
} elseif ($pageName == "gallery.php") {
    scripttag("plugins/mixitup/jquery.mixitup.min.js");
    scripttag("demo/demo-gallery-simple.js");
} elseif ($pageName == "form-components.php") {
    // echo "//Form Components \n ";
    scripttag("plugins/form-multiselect/js/jquery.multi-select.min.js");  // Multiselect Plugin \n ";
    scripttag("plugins/quicksearch/jquery.quicksearch.min.js");           // Quicksearch to go with Multisearch Plugin \n ";
    scripttag("plugins/form-typeahead/typeahead.min.js");                 // Typeahead for Autocomplete \n ";
    scripttag("plugins/form-select2/select2.min.js");                     // Advanced Select Boxes\n ";
    scripttag("plugins/form-autosize/jquery.autosize-min.js");            // Autogrow Text Area\n ";
    scripttag("plugins/form-colorpicker/js/bootstrap-colorpicker.min.js");// Color Picker \n ";
    scripttag("plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js"); // Time Picker. Requires jQuery UI \n ";
    scripttag("plugins/form-daterangepicker/daterangepicker.min.js");     // Date Range Picker \n ";
    scripttag("plugins/form-datepicker/js/bootstrap-datepicker.js");      // Date Picker
    scripttag("plugins/form-daterangepicker/moment.min.js");              // Moment.js for Date Range Picker \n ";
    scripttag("plugins/form-fseditor/jquery.fseditor-min.js");            // Fullscreen Editor \n ";
    scripttag("plugins/form-jasnyupload/fileinput.min.js");               // File Input \n ";
    scripttag("plugins/form-tokenfield/bootstrap-tokenfield.min.js");     // Tokenfield \n ";
    scripttag("demo/demo-formcomponents.js");
} elseif ($pageName == "form-ckeditor.php") {
    scripttag("plugins/form-ckeditor/ckeditor.js");                       // WYSIWYG CKEditor \n ";
} elseif ($pageName == "form-xeditable.php") {
    scripttag("plugins/form-daterangepicker/moment.min.js");
    scripttag("plugins/form-xeditable/bootstrap3-editable/js/bootstrap-editable.min.js");
    scripttag("demo/demo-xeditable.js");
} elseif ($pageName == "admin/dashboard"||$pageName == "admin/franchise/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}" ||$pageName == "admin/retailer/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "admin/subretailer/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "admin/creditdebit/dashboard/{one?}/{two?}/{three?}/{four?}/{five?}") {
    scripttag("plugins/fullcalendar/fullcalendar.min.js");
    scripttag("plugins/form-daterangepicker/daterangepicker.min.js");
    scripttag("plugins/form-daterangepicker/moment.min.js");
    scripttag("plugins/charts-flot/jquery.flot.min.js");
    scripttag("plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("plugins/charts-flot/jquery.flot.orderBars.min.js");
    scripttag("plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("demo/demo-index.js");
} elseif ($pageName == "admin/franchise" ||$pageName == "admin/retailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}" ||$pageName == "admin/subretailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}"  || $pageName == "admin/creditdebit" || $pageName == "admin/recharge/prepaid/{one?}/{two?}/{three?}/{four?}/{five?}" || $pageName == "admin/recharge/postpaid/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/recharge/dth/{one?}/{two?}/{three?}/{four?}/{five?}" 
    || $pageName == "admin/recharge/pan/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "manager_users.php") {
    scripttag("plugins/datatables/jquery.dataTables.min.js");
    scripttag("plugins/datatables/dataTables.bootstrap.js");
    scripttag("demo/demo-datatables.js");
} elseif ($pageName == "charts-flot.php") {
    scripttag("plugins/charts-flot/jquery.flot.min.js");
    scripttag("plugins/charts-flot/jquery.flot.stack.min.js");
    scripttag("plugins/charts-flot/jquery.flot.pie.min.js");
    scripttag("plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("demo/demo-flotgraph.js");
} elseif ($pageName == "admin/franchise/add/{one?}/{two?}/{three?}/{four?}/{five?}" ||$pageName == "admin/retailer/add/{one?}/{two?}/{three?}/{four?}/{five?}" ||$pageName == "admin/subretailer/add/{one?}/{two?}/{three?}/{four?}/{five?}") {
    scripttag("plugins/form-validation/jquery.validate.min.js");
    scripttag("plugins/form-stepy/jquery.stepy.js");

    scripttag("demo/demo-formwizard.js");
} elseif ($pageName == "tables-editable.php") {
    scripttag("plugins/datatables/jquery.dataTables.min.js");
    // echo "// Editable Table";
    scripttag("plugins/datatables/TableTools.js");
    scripttag("plugins/jquery-editable/jquery.editable.min.js");
    scripttag("plugins/datatables/dataTables.editor.js");
    scripttag("plugins/datatables/dataTables.editor.bootstrap.js");
    scripttag("plugins/datatables/dataTables.bootstrap.js");
    scripttag("demo/demo-tableeditable.js");
} elseif ($pageName == "maps-google.php") {
    // echo "//Map";
    scripttag("http://maps.google.com/maps/api/js?sensor=true");
    scripttag("plugins/gmaps/gmaps.js");
    scripttag("demo/demo-gmaps.js");
} elseif ($pageName == "calendar.php") {
    // echo "// Calendar";
    scripttag("plugins/fullcalendar/fullcalendar.min.js");
    scripttag("demo/demo-calendar.js");
} elseif ($pageName == "ui-sliders.php") {
    // echo "//  jQuery Dials/Knobs and Sky Loader";
    scripttag("plugins/knob/jquery.knob.min.js");
    scripttag("plugins/progress-skylo/skylo.js");
    scripttag("demo/demo-slider.js");
} elseif ($pageName == "form-validation.php") {
    // echo "//  Form Validation";
    scripttag("plugins/form-parsley/parsley.min.js");
    scripttag("demo/demo-formvalidation.js");
} elseif ($pageName == "form-masks.php") {
    scripttag("plugins/form-inputmask/jquery.inputmask.bundle.min.js");
    scripttag("demo/demo-mask.js");
} elseif ($pageName == "admin/franchise" ||$pageName == "admin/retailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}"||$pageName == "admin/subretailer/manageview/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/creditdebit" || $pageName == "admin/recharge/prepaid/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/recharge/prepaid/{one?}/{two?}/{three?}/{four?}/{five?}" || $pageName == "admin/recharge/postpaid/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "admin/recharge/dth/{one?}/{two?}/{three?}/{four?}/{five?}" 
    || $pageName == "admin/recharge/pan/{one?}/{two?}/{three?}/{four?}/{five?}"|| $pageName == "manager_users.php") {
    scripttag("demo/demo-datatables.js");
} elseif ($pageName == "form-fileupload.php") {
    // echo "// File Upload";
    scripttag("plugins/jquery-fileupload/js/vendor/jquery.ui.widget.js");
    scripttag("plugins/jquery-fileupload/js/tmpl.min.js");
    scripttag("plugins/jquery-fileupload/js/load-image.min.js");
    scripttag("plugins/jquery-fileupload/js/canvas-to-blob.min.js");
    scripttag("plugins/jquery-fileupload/js/jquery.blueimp-gallery.min.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-process.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-image.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-audio.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-video.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-validate.js");
    scripttag("plugins/jquery-fileupload/js/jquery.fileupload-ui.js");
    scripttag("plugins/jquery-fileupload/js/main.js");
} elseif($pageName=="ui-tour.php"){
    scripttag("plugins/bootstro.js/bootstro.min.js");
    scripttag("demo/demo-tour.js");
} elseif($pageName=="charts-canvas.php"){
    scripttag("plugins/charts-chartjs/Chart.min.js");
    scripttag("demo/demo-chartjs.js");
} elseif ($pageName == "charts-svg.php") {
   // echo "//Charts Morris";
   scripttag("plugins/charts-morrisjs/raphael.min.js");
   scripttag("plugins/charts-morrisjs/morris.min.js");
   scripttag("demo/demo-morrisjs.js");
} elseif ($pageName == "charts-inline.php") {
    // echo "// Inline Chart";
    scripttag("plugins/sparklines/jquery.sparklines.min.js");
    scripttag("demo/demo-inlinecharts.js");
} elseif($pageName=="form-duallistbox.php"){
    // echo "//Dualbox";
    scripttag("plugins/duallistbox/jquery.bootstrap-duallistbox.js");
    scripttag("demo/demo-dualbox.js");
}elseif($pageName=="form-imagecrop.php"){
    scripttag("plugins/jcrop/js/jquery.Jcrop.min.js");
    scripttag("demo/demo-imagecrop.js");
}elseif($pageName=="ui-nestable.php"){
    // echo "// Ui Nestable";
    scripttag("plugins/form-nestable/jquery.nestable.min.js");
    scripttag("plugins/form-nestable/app.min.js");
    scripttag("demo/demo-nestable.min.js");
}elseif($pageName=="ui-alerts.php"){
    scripttag("plugins/pines-notify/jquery.pnotify.min.js");
    scripttag("plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("demo/demo-alerts.js");
}elseif($pageName=="extras-chatroom.php"){
    scripttag("demo/demo-chatroom.js");
}

    scripttag('js/placeholdr.js');  //IE8 Placeholders
    scripttag('js/application.js');
    scripttag('demo/demo.js');

?>


</body>
<script>
        $.getJSON("http://ip-api.com/json/?callback=?", function(data) {
            var table_body = "";
            $.each(data, function(k, v) {
            if(k=="query")
            {
            //alert(v);
            $('#clientIp').val(v);
            }
               });
        });
        </script>
<script type="text/javascript">
$(document).ready(function()
{
    $('#fieldemail').change(function()
    {
    var email=$('#fieldemail').val();
    //alert(email);
    $.ajax({

     url: '<?php echo url();?>/admin/dashboard/mailcheck/'+email,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
         var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                //if mail exist show error
                $('#fieldemailerror').text(obj.message);
        }
        else
        {
           $('#fieldemailerror').text(''); 
        }
    }
 });
    });
    $('#fieldmobile').change(function()
    {
    var mobile=$('#fieldmobile').val();
    if(isNaN(mobile))
    {
       $('#fieldmobilerror').text('please enter mobile number'); 
    }
    else
    {
        $('#fieldmobilerror').text('');
    $.ajax({

     url: '<?php echo url();?>/admin/dashboard/mobilecheck/'+mobile,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                $('#fieldmobilerror').text(obj.message);
        }
        else
        {
            $('#fieldemail').text('');
        }
     }
 });
}
    });
$('#fielduserid').change(function()
    {
    var user=$('#fielduserid').val();
    //alert(user);
    $.ajax({

     url: '<?php echo url();?>/admin/dashboard/usercheck/'+user,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
        var obj=jQuery.parseJSON(data);
        if(obj.status=="failure")
        {
                 $('#fielduseriderror').text(obj.message);
        }
        else
        {
            $('#fielduseriderror').text('');
        }
     }
 });
    });   
    $('#admin').change(function()
    {
    var admin =$('#admin').val();
    var adminname=$('#admin option:selected').text();
//alert(adminname);
$('#parentId').val(adminname);
    if(admin=="")
    {
        alert('please select a admin');
    } 
    else
    {
    $.ajax({

     url: '<?php echo url();?>/admin/dashboard/franchise/'+admin,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
        $('#franchise').html(data);
        /*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });

 $.ajax({

     url: '<?php echo url();?>/admin/dashboard/adminprod/'+adminname,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
       
        $('#category').html(data);
        /*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });    
    }
    });
    $('#franchise').change(function()
    {
    var franchise =$('#franchise').val();
     var adminname=$('#franchise option:selected').text();
//alert(adminname);
$('#parentId').val(adminname);
   
    if(franchise=="")
    {
        alert('please select a franchise');
    } 
    else
    {
    $.ajax({

     url: '<?php echo url();?>/admin/dashboard/retailer/'+franchise,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
        if(data=="1")
        {
            $('#retailernofound').text('no retailer Found for this franchise');
        }
        else
        {
        $('#retailer').html(data);
         $('#retailernofound').text('');
        }/*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });    
 $.ajax({

     url: '<?php echo url();?>/admin/dashboard/franchiseprod/'+adminname,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
       
        $('#category').html(data);
        /*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });
    }
    }); 
     $('#retailer').change(function()
    {
    var franchise =$('#retailer').val();
     
if(franchise=="")
{
alert('please selet a retailer')
}
else{
var adminname=$('#retailer option:selected').text();
//alert(adminname);
$('#parentId').val(adminname);
 $.ajax({

     url: '<?php echo url();?>/admin/dashboard/retailerprod/'+adminname,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        //alert(data);
       
        $('#category').html(data);
        /*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });
 }  
   });
     $('#userIdPk').change(function()
    {
	if($('#userIdPk').val()=="")
	{
	$('#userIdPkerror').text('please select a franchise');
	}
	else{
    $('#userIdPkerror').text('');
	var adminname=$('#userIdPk option:selected').text();
//alert(adminname);
$('#userId').val(adminname);
   }
   });
});
function updatecommission(value,id,type)
{
	alert(type);
	$.ajax({

     url: '<?php echo url();?>/admin/service/commission',
     async: false,
     type : 'POST',

     data : { "id":id,"value":value,"type":type},

     success : function(data)

     {
    
		 var obj=jQuery.parseJSON(data);
         alert(obj.status);
        if(obj.status=="Success")
		{
			alert("updated successfully");
		}
		else
		{
			alert('service is down');
			}
       
        /*var obj=jQuery.parseJSON( data )
        if(obj.status=="failure")
        {
                alert(obj.message);
        }*/
     }
 });
	}
</script>
</html>

  
 