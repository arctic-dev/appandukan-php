
<!doctype html>
<html> <!-- manifest="/egg404.manifest" -->
   <head>
      <title>Timer</title>
      
      

      <link rel="alternate" type="application/json+oembed" href="http://e.ggtimer.com/oembed?format=json&url=http%3A%2F%2Fe.ggtimer.com%2F30" title="Timer - E.ggTimer" />
      <link rel="alternate" type="application/xml+oembed" href="http://e.ggtimer.com/oembed?format=xml&url=http%3A%2F%2Fe.ggtimer.com%2F30" title="Timer - E.ggTimer" />
      <link rel="search" href="/pages/opensearch.xml" type="application/opensearchdescription+xml" title="EggTimer" />
      <link rel="stylesheet" href=<?php echo url('/assets/timer/style1.css')?> type="text/css" media="screen" title="Normal"/>
	 
   </head>
   <body>
   	<div id="wrapper">
         <div id="progress"></div>
         <div id="static"></div>
      </div>
	
      <div id="textWrapper">
		<p style="width: 500px;
    margin-left: 500px;
    margin-top: 200px;">Your Transaction is in Progress., Please do not Refresh page</p>
        <h4 id="progressText"> </h4>
      </div>
      
     
      <script src=<?php echo url('/assets/timer/jquery.min.js')?> type="text/javascript"></script>
      <script src=<?php echo url('/assets/timer/Time.min.js')?> type="text/javascript"></script>
      <script src=<?php echo url('/assets/timer/Egg3.min.js')?> type="text/javascript"></script>
      <script type="text/javascript">
         Egg.defaultText = "";
         Egg.title = "";
         Egg.label = "";
         Egg.startTime = 1443524740000;
         Egg.endTime = 1443524830000;
         Egg.parseError = "none";
         Egg.volume = 1;
         Egg.canAlert = true;
      </script>



      
   </body>
</html>