<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Avant</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Avant">
<meta name="author" content="The Red Team">
<!--link href="{{url()}}/assets/less/styles.less" rel="stylesheet/less" media="all"-->
 <link rel="stylesheet" href="{{url()}}/assets/css/styles.css?=121"> 
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
<?php if (isset($_COOKIE["theme"])) 
	{
	    echo "<link href='url()/assets/demo/variations/". $_COOKIE["theme"] ."' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>";
	} else { ?>
<link href='{{url()}}/assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>
<?php } ?>
<?php if (isset($_COOKIE["headerstyle"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["headerstyle"] ."' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>";
    } else { ?>
<link href='{{url()}}/assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>
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
	
	$header_url=url('/assets/'.$address);
	echo "<link rel='stylesheet' type='text/css' href='$header_url' /> \n";
}
$pageName =Route::getCurrentRoute()->getPath();

if ($pageName == "maps-vector.php") {
    linktag('plugins/jqvmap/jqvmap.css'); // <!-- jQuery vector maps -->
 } elseif ($pageName == "icons-glyphicons.php") {   
    linktag('fonts/glyphicons/css/glyphicons.min.css'); // <!-- glyphicons -->
} elseif ($pageName == "form-components.php") {   
    linktag('plugins/form-select2/select2.css'); //<!-- Select2 -->
    linktag('plugins/form-multiselect/css/multi-select.css'); //<!-- Multiselect -->
    linktag('plugins/jqueryui-timepicker/jquery.ui.timepicker.css'); //<!-- jq UI Timepicker -->
    linktag('plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('plugins/form-fseditor/fseditor.css'); //<!-- FullScreen Editor -->
    linktag('plugins/form-tokenfield/bootstrap-tokenfield.css'); //<!-- Tokenfield -->
    linktag('js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "ui-paginations.php") {
    linktag('plugins/datepaginator/bootstrap-datepaginator.css');
} elseif ($pageName == "charts-svg.php") {
    linktag('plugins/charts-morrisjs/morris.css'); //> <!-- Charts -->
} elseif ($pageName == "form-fileupload.php") {
	linktag('plugins/jquery-fileupload/css/jquery.fileupload-ui.css'); // <!--File Upload-->
} elseif ($pageName == "form-dropzone.php") {
    linktag('plugins/dropzone/css/dropzone.css'); //<!-- Dropzone-->
} elseif ($pageName == "ui-tour.php") {
    linktag('plugins/bootstro.js/bootstro.min.css'); //<!-- Bootstro.js-->
} elseif ($pageName == "ui-sliders.php") {
    linktag('plugins/progress-skylo/skylo.css'); // <!-- Sky Loader Progress Bar -->
    linktag('js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "form-imagecrop.php") {
    linktag('plugins/jcrop/css/jquery.Jcrop.min.css'); // <!-- jCrop -->
} elseif ($pageName == "admin/admin_settings") {
    linktag('plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
    linktag('plugins/form-markdown/css/bootstrap-markdown.min.css');
} elseif ($pageName == "calendar.php") {
    linktag('plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
} elseif ($pageName == "ui-nestable.php") {
    linktag('plugins/form-nestable/jquery.nestable.css'); //<!-- Nestable Lists-->
} elseif ($pageName == "tables-data.php") {
    linktag('plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "tables-editable.php") {
    linktag('plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "form-xeditable.php") {
    linktag('plugins/form-xeditable/bootstrap3-editable/css/bootstrap-editable.css'); // <!-- X-Editable -->
} elseif ($pageName == "ui-alerts.php") {
    linktag('plugins/pines-notify/jquery.pnotify.default.css');
}
    linktag('plugins/codeprettifier/prettify.css'); // <!-- Google Code Prettifier -->
    linktag('plugins/form-toggle/toggles.css'); //<!-- Toggles -->
?>
<script type="text/javascript" src="{{url()}}/assets/js/less.js"></script>
	<script src="<?php echo url('');?>/assets/js/angular.min.js"></script>
</head>

<body class="<?php if (isset($_COOKIE["admin_leftbar_collapse"])) echo ($_COOKIE['admin_leftbar_collapse'] . " "); // check collapse state with php
                 if (isset($_COOKIE["admin_rightbar_show"])) echo $_COOKIE['admin_rightbar_show'];
                 if (isset($_COOKIE["fixed-header"])) echo ' static-header';
                ?>">


<div id="headerbar">
  <div class="container">
    <div class="row">
      
    </div>
  </div>
</div>
<header class="navbar navbar-inverse <?php if (isset($_COOKIE["fixed-header"])) {echo 'navbar-static-top';} else {echo 'navbar-fixed-top';} ?>" role="banner"> <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a> 
  <div class="navbar-header pull-left"> <a class="navbar-brand" href="#">Appan Dukan</a> </div>
  <ul class="nav navbar-nav pull-right toolbar">
    <li class="dropdown"> <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?php echo Session::get('user_name');?><i class="fa fa-caret-down"></i></span></a>
      <ul class="dropdown-menu userinfo arrow">
        
        <li class="userlinks">
          <ul class="dropdown-menu">
            
            
            <li><a href="<?php echo url('')."/login/logout"?>" class="text-right">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </li>
    
    
      
    </li>
  </ul>
</header>
  <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                

                <li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="javascript:;"><i class="fa fa-user"></i> <span>Registration</span> </a>
        <ul class="acc-menu">
          <li><a href="<?php echo url('Franchise/register');?>"><span>Register New Retailer</span></a></li>
           </ul>
      </li>
      
    </ul>
    </nav>

  <!-- BEGIN RIGHTBAR -->
  
  <!-- END RIGHTBAR -->
  
  <div id="">
    <div id='wrap'> @yield('content') </div>
  </div>
  
  <!--footer start-->
  <footer role="contentinfo">
    <div class="clearfix">
      <ul class="list-unstyled list-inline pull-left">
        <li>AVANT &copy; 2014</li>
      </ul>
      <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
    </div>
  </footer>
</div>

<!-- page-container --> 

<!--
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-1.10.2.min.js"%3E%3C/script%3E'))</script>
<script type="text/javascript">!window.jQuery.ui && document.write(unescape('%3Cscript src="assets/js/jqueryui-1.10.3.min.js'))</script>
-->

<?php
function scripttag($address) 
{
	$address_url=url('/assets/'.$address);
	echo "<script type='text/javascript' src='$address_url'></script> \n";
}

    //The following plugins are used for the functionality of the theme
    scripttag('js/jquery-1.10.2.min.js');
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
} elseif ($pageName == "admin/admin_settings") {
    scripttag("plugins/fullcalendar/fullcalendar.min.js");
    scripttag("plugins/form-daterangepicker/daterangepicker.min.js");
    scripttag("plugins/form-daterangepicker/moment.min.js");
    scripttag("plugins/charts-flot/jquery.flot.min.js");
    scripttag("plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("plugins/charts-flot/jquery.flot.orderBars.min.js");
    scripttag("plugins/pulsate/jQuery.pulsate.min.js");
    scripttag("demo/demo-index.js");
} elseif ($pageName == "tables-data.php") {
    scripttag("plugins/datatables/jquery.dataTables.min.js");
    scripttag("plugins/datatables/dataTables.bootstrap.js");
    scripttag("demo/demo-datatables.js");
} elseif ($pageName == "charts-flot.php") {
    scripttag("plugins/charts-flot/jquery.flot.min.js");
    scripttag("plugins/charts-flot/jquery.flot.stack.min.js");
    scripttag("plugins/charts-flot/jquery.flot.pie.min.js");
    scripttag("plugins/charts-flot/jquery.flot.resize.min.js");
    scripttag("demo/demo-flotgraph.js");
} elseif ($pageName == 'admin') {
    scripttag("plugins/form-validation/jquery.validate.min.js");
	 scripttag("plugins/form-parsley/parsley.min.js");
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
} elseif ($pageName == "tables-data.php") {
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
            alert(v);
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

     url: '<?php echo url();?>/franchise/dashboard/mailcheck/'+email,
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

     url: '<?php echo url();?>/franchise/dashboard/mobilecheck/'+mobile,
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

     url: '<?php echo url();?>/franchise/dashboard/usercheck/'+user,
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
    $('#retailer').change(function()
    {
    var franchise =$('#retailer').val();
     
if(franchise=="")
{
alert('please selet a retailer')
}
else{
var adminname=$('#retailer option:selected').text();
alert(adminname);
$('#parentId').val(adminname);
 $.ajax({

     url: '<?php echo url();?>/franchise/dashboard/retailerprod/'+adminname,
     async: false,
     type : 'GET',

     data : { },

     success : function(data)

     {
        alert(data);
       
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
    var adminname=$('#userIdPk option:selected').text();
alert(adminname);
$('#userId').val(adminname);
   
   });
});
});
</script>

</html>