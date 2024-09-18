
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

ShoeSoccerStore.Com

</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<!-- Latest compiled and minified CSS -->
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>

<!-- jQuery library -->
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

<!-- Latest compiled JavaScript -->
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>

</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">

<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.php" rel="home">
shoe soccer store

</a></h1>
			<h2 class="site-description"> 
your Shoes your Soccer 

</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="tnc.html">Terms&Conditions </a></li>
				<li><a href="privacy.html">Privacy policy </a></li>

				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		</nav>
		</header>


		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">



<div class='container'>
<div class='row'> 

<div class='col-xs-6'>

<?php

$idnum= $_GET['idnum'];

echo"<a class='btn btn-warning' href='index.php'>back </a><br/><br/>";

?>
</div>
<div class='col-xs-6'>

<h1> your product  </h1>

</div> </div> </div>

<?php


$wln= "front_category";

include "databaseConnection.php";

$sql = "SELECT * FROM $wln WHERE id='$idnum'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row = mysqli_fetch_array($result)){
echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-10'>

";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image1']."' >";

echo"
</div>
<div class='col-xs-2'>
</div></div>
<div class='row'> 
<div class='col-xs-2'>
</div>
<div class='col-xs-10'>

";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image2']."' >";

echo"
</div></div></div>

";


echo"<div class='container'><center> <h1>".$row['name']." </h1> </center></div>";

echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-4'>
";

echo"<p><b><i> ".$row['rating']."/ 5.0 </i></b></p>";
echo"</div>";
echo"<div class='col-xs-8'><h1>";

$link= $row['link'];

if (strpos($link, 'https://') !== false) {
echo"<a href='".$link."'>click to Purchase </a>";
}
elseif (strpos($link, 'http://') !== false) {
echo"<a href='".$link."'>click to Purchase </a>";
}else{
echo"<a href='https://".$link."'>click to Purchase</a>";
}

echo"</h1></div></div></div>";
echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-6'>
";

echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image3']."' >";
echo"</div>";
echo"<div class='col-xs-6'>";
echo "<img alt='image' class='img-responsive img-thumbnail' src='".$row['image4']."' >";
echo"</div></div></div>";

echo"<h1>Full Description </h1>";

echo "<pre>" . $row['description'] . "</pre>";
echo"<h1>Full Features </h1>";

echo "<pre>" . $row['features'] . "</pre>";


echo"<hr/>";
}

echo"</div>";

mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>

				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">
ShoeSoccerStore
</h1>
			 <a target="blank" href="https://www.shoesoccerstore.com/">&copy; SSS by shoesoccerstore.com</a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>

<!-- #page -->


<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>
