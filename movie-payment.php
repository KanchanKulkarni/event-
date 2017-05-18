<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html>
<head>
<title>My Show a Entertainment Category Flat Bootstarp responsive Website Template | Movie Payment :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/menu.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<!-- header-section-starts -->
		
			<div class="header-top-strip">
			<div class="container">
				
				<div class="header-top-right">

	</div><!-- /.modal -->
	

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
				<!-- Large modal -->

		<div class="container">
		  <div class="main-content">
			<div class="header">
				<div class="logo">
					<a href="index.php"><h1>Events</h1></a>
				</div>
				
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation">
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>	
                    <!-- Mega Menu -->
					
			
                
				
    
<!-- AddThis Smart Layers END -->
			 
			
			
	<!--start-carrer-->
	<!----- Comman-js-files ----->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$("#tab4").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>

				</div>
			</div>
			<div class="col-md-4">
			<div class="payment-right">
				
				<?php

             $eid=$_POST['eid'];
             $seat=$_POST['seat'];
             $p=$_POST['prize'];
			 $total=$seat*$p;
			  

              ?>
				
				<?php
				     $conn = new mysqli('localhost','root','root','eventmanagement');


                     if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                         }

                       $event_id=$_GET["id"];
				       
                           $sql1 = "SELECT * FROM event WHERE eventid='$eid' ";
                            $result = $conn->query($sql1);
                            while($array=mysqli_fetch_row($result)) 
                              {$var=$array[0];
                              ?>
				
				<h3>Ticket Summary</h3>
				<h6><span>Event-Name:</span><?php echo $array[1]; ?></h6>
				<p><span>Organizor:</span><?php echo $array[2]; ?> </p>
				<p><span>Description:</span> <?php echo $array[3]; ?></p>
				<p><span>Venue:</span> <?php echo $array[4]; ?></p>
				<p><span>Start date:</span> <?php echo $array[5]; ?></p>
				<p><span>End date:</span> <?php echo $array[6]; ?></p>
				<p><span>Ticket Prize:</span> <?php echo $array[8]; ?></p>
				<p><span>Qty:</span><?php echo $seat; ?></p>
				<h4><span>Total :</span>RS<?php echo $total; ?></h4>
				
			</div>
				<?php } 
         $conn->close();
          ?>
				
				<form action="details.php" method="post"  enctype="multipart/form-data">
				<input type="text" name="eid" id="eid" value="<?php echo $eid; ?>" hidden>	
				<input type="text" name="seat" id="seat" value="<?php echo $seat; ?>" hidden>	
				<input type="text" name="prize" id="prize" value="<?php echo $p; ?>" hidden>
				<input type="text" name="total" id="total" value="<?php echo $total; ?>" hidden>
			
			<input type="submit" value="CONFORM">
				</form>
			<div class="clearfix"></div>

			
		<div class="footer">
			<div class="col-md-3 footer-left">
				
				
				
			
			
				
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
			
			<div class="clearfix"></div>
		</div>
			<div class="copy-rights text-center">
				<p>© 2015 My Show. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
	</div>
 <script src="js/responsive-tabs.js"></script>
    <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>

