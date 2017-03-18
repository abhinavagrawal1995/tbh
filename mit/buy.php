<!DOCTYPE HTML>

<html>
	<head><link rel="image_src" href="http://thebookhub.in/logo.png" />
		<meta property="og:image" content="http://thebookhub.in/logo.png" />
    	<link rel="Shortcut Icon" href="http://thebookhub.in/images/16x.png" type="image/png" />
		<title>The Book Hub|Buy</title>        
		<meta property="fb:admins" content="abi.agrawal1995"/>
		<meta property="fb:profile_id" content="1446026043"/>
		<meta property=”fb:page_id” content=”581603871953493” /> 
		<meta property="og:title" content="The Book Hub"  />
		<link rel=”author” href=”https://plus.google.com/+AbhinavAgrawal1995“/>
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

	
		<!-- Header -->
			<header id="header"><?php include('header.php'); ?></header>			<!-- Main -->
			<article id="main">

			  <header class="special container">
					<span class="icon fa-envelope"></span>
			    <h2>The manipal library</h2>
					<p>Here's a list of books other students are willing to sell in Manipal. You can contact them to buy the books.</p>
					<p>In case you are looking for eBooks, <a href="http://thebookhub.in/download.php">Click here.</a></p>
					</header>
					
					<!-- One -->
					<section class="wrapper style4 container">
					
						<!-- Content -->
							<div class="content">
                    <?php

require_once 'dbkaconn.php';

$result = mysqli_query($con,"SELECT * FROM buy");

echo "<table style=\"border:1px solid black;\">
<tr>
<th style=\"border:1px solid black;\">Name</th>
<th style=\"border:1px solid black;\">Title</th>
<th style=\"border:1px solid black;\">Department</th>
<th style=\"border:1px solid black;\">Subject</th>
<th style=\"border:1px solid black;\">Price</th>
<th style=\"border:1px solid black;\">Semester</th>
<th style=\"border:1px solid black;\">Contact</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['name'] . "</td>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['title'] . "</td>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['department'] . "</td>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['subject'] . "</td>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['price'] . "</td>";
  echo "<td style=\"border:1px solid black;\" align=\"center\">" . $row['semester'] . "</td>";
  echo "<td style=\"border:1px solid black;unicode-bidi:bidi-override; direction: rtl;\" align=\"center\">" . strrev($row['contact']) . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>

				</div><br>
                
                <center><a href="http://mit.thebookhub.in/sell.php"> <input type="submit" class="button special" value="Sell a book" name="submitted"></a></center>
					</section>
			<!-- One -->

		<!-- Footer -->
			<footer id="footer">
			
					
				<span class="copyright">&copy; TheBookHub. All rights reserved.<br>Designed by <a href="http://abhinavagrawal.in" style="border-bottom: none;">Abhinav Agrawal.</a></span>
			
			</footer>

	</body>
</html>