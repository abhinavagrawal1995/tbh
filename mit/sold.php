<!DOCTYPE HTML>

<html>
	<head><link rel="image_src" href="http://thebookhub.in/logo.png" />
		<meta property="og:image" content="http://thebookhub.in/logo.png" />
    	<link rel="Shortcut Icon" href="http://thebookhub.in/images/16x.png" type="image/png" />
		<title>The Book Hub</title>        
		<meta property="fb:admins" content="abi.agrawal1995"/>
		<meta property="fb:profile_id" content="1446026043"/>
		<meta property=”fb:page_id” content=”581603871953493” /> 
		<link rel=”author” href=”https://plus.google.com/+AbhinavAgrawal1995“/>
		<meta property="og:title" content="The Book Hub"  />
		<meta property="fb:app_id" content="248996855307000" /> 
		<meta property="og:type" content="website" />
		<meta property="og:url"    content="http://thebookhub.in" /> 
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="Abhinav Agrawal">
		
		<meta name="keywords" content="the book hub, book hub, bookhub, thebookhub, books, ebooks, fanfictions, fanfics, download ebooks, genie, free" />
		<meta name="wot-verification" content="61a63a613f709c6f7445"/>
		<!--[if lte IE 8]><script src="http://thebookhub.in/css/ie/html5shiv.js"></script><![endif]-->
		<script src="http://thebookhub.in/js/jquery.min.js"></script>
		<script src="http://thebookhub.in/js/jquery.dropotron.min.js"></script>
		<script src="http://thebookhub.in/js/skel.min.js"></script>
		<script src="http://thebookhub.in/js/skel-layers.min.js"></script>
		<script src="http://thebookhub.in/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="http://thebookhub.in/css/skel.css" />
			<link rel="stylesheet" href="http://thebookhub.in/css/style.css" />
			<link rel="stylesheet" href="http://thebookhub.in/css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="http://thebookhub.in/css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="http://thebookhub.in/css/ie/v9.css" /><![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52121429-1', 'thebookhub.in');  
  ga('send', 'pageview');

</script>
	</head>
	
	
	<body class="no-sidebar loading">
	<?php
		if (isset($_REQUEST['submitted'])) 
		{
			$name = $_POST["name"];
			$dept = $_POST["dept"];
			$sub = $_POST["sub"];
			$price = $_POST["price"];
			$mobile =$_POST["mobile"];
			$sem = $_POST["sem"];
			$email = $_POST["email"]; 
			$subject= $_POST["title"];
			$to = "thebookhubindia@gmail.com";
			$headers = "From: TheBookHub (Sell Books)"; 
			
			$message = "Message from   " . $name . "\r\nEmail: 	" . $email . "\r\nphone: 	" . $mobile . "\r\ndepartment: 	" . $dept . "\r\nsubject: 	" . $sub . "\r\nPrice: 	" . $price . "\r\nsemester: 	" . $sem . "\r\nSQL: 	" . "insert into a3986955_books.buy values('$name','$subject','$dept','$sub','$price','$sem','$email','$mobile');" ;
			mail($to,$subject,$message,$headers);
		}
	?>
	
		<!-- Header -->
			<header id="header"><?php include('header.php'); ?></header>			<!-- Main -->
			<article id="main">

			  <header class="special container">
					<span class="icon fa-mobile"></span>
					<h2>Sit tight and wait. You will get a response soon!<strong></strong></h2>
					
				</header>
					
				<!-- One -->
					<section class="wrapper style4 container">
					
						<!-- Content -->
							<div class="content">
								<section>
								  <p>To see what others are selling, <a href="http://mit.thebookhub.in/borrow.php">click here.</a></p>
									<p>Looking for ebooks? <a href="http://mit.thebookhub.in/course.php" target="_new">Take a look at our online collection.</a></p>
									
							  </section>
							</div>
							<div class="fb-like" data-href="https://www.facebook.com/thebookhub" data-width="300" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					</section>

			                       
				   
			
                
                <center><a href="http://mit.thebookhub.in/sell.php"> <input type="submit" class="button special" value="Go Back"></a></center>
					
			<!-- One --></article>

		<!-- Footer -->
			<footer id="footer">
			
					
				<span class="copyright">&copy; TheBookHub. All rights reserved.<br>Designed by <a href="http://abhinavagrawal.in" style="border-bottom: none;">Abhinav Agrawal.</a></span>
			
			</footer>

	</body>
</html>