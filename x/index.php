<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo - Simple Image Slider</title>
	<!--<link href='http://fonts.googleapis.com/css?family=Smythe' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
    
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.simpleSlide_min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
	        simpleSlide({
				'animtype' : 'fade',
				'animduration' : 450, 
				'animspeed' : 4000, 
				'automatic' : 'true',
			    'set_speed': 300,
			    'swipe': 'true',
			    'status_width': 20,
    			'status_color_outside': '#DDD',
    			'status_color_inside': '#2184B1'
			});
    	});
    </script>
</head>

<body style="background-color:#DCF0F7">
<div id="wrapper">
	<div id="slider">
		<div class="simpleSlide-window" rel="0">
		    <div class="simpleSlide-tray" rel="0">
		        <div class="simpleSlide-slide" rel="0">
		           <a href='http://google.com/' target='_parent'><img src="img/image1.jpg" alt="" style="width:460px;height:258px;"/> </a>
				   <?php //include 'news1.php'; ?>
		        </div>
		        <div class="simpleSlide-slide" rel="0">
		           <!--<img src="img/image2.jpg" alt="" style="width:460px;height:258px;"/>-->
				   <?php include 'news2.php'; ?>
		        </div>
		        <div class="simpleSlide-slide" rel="0">
		           <!--<img src="img/image3.jpg" alt="" style="width:460px;height:258px;"/>-->
				   <?php include 'news3.php'; ?>
		        </div>
		        <div class="simpleSlide-slide" rel="0">
		           <!--<img src="img/image4.jpg" alt="" style="width:460px;height:258px;"/>-->
				   <?php include 'news4.php'; ?>
		        </div>
		    </div>
		</div>
		
		<div id="simpleSlide-nav">
			<div class="left-button pointer" rel="0"><img src="img/left.png" alt="" /></div>
			<div class="right-button pointer" rel="0"><img src="img/right.png" alt="" /></div>
		</div>
		
		<div id="status-tray">
			<div class="simpleSlideStatus-tray" rel="0">
			    <div class="simpleSlideStatus-window" rel="0"></div>
			</div>
		</div>
		
		<!-- //////////////////////////////////////////////////
		//////////////////  Use only one.  ////////////////////
		///////////////////////////////////////////////////////
		<div id="simpleSlide-jump-to">
			<div class="jump-to pointer" rel="0" alt="1"></div>
			<div class="jump-to pointer" rel="0" alt="2"></div>
			<div class="jump-to pointer" rel="0" alt="3"></div>
			<div class="jump-to pointer" rel="0" alt="4"></div>
		</div>
		/////////////////////////////////////////////////// -->
		
	</div><!-- end #slider -->
</div><!-- end #wrapper -->
</body>
</html>
