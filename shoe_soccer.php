
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
$cname= $_GET['cname'];

echo"<a class='btn btn-warning' href='store.php?c=".$cname."'>back </a><br/><br/>";

?>
</div>
<div class='col-xs-6'>

<h1> all products  </h1>
<br/>
</div> </div> </div>

<?php


$scname= $_GET['scname'];
$wln= $cname."_".$scname."_category";

include "databaseConnection.php";

$sql = "SELECT * FROM $wln WHERE live='live'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";

while($row1 = mysqli_fetch_array($result)){


echo"<center><h1>".$row1['name']." </h1></center>";

echo"
<div class='container'>
<div class='row'> 
<div class='col-xs-4'>

";

echo "<img src='".$row1['image1']."' />";
echo"</div>";
echo"<div class='col-xs-8'>";

echo"<pre>".$row1['front_note']." </pre>";
echo"</div></div>";

?>
<div class='row'> 
<div class='col-xs-4'>
<?php echo"<p><b>".$row1['rating']."/ 5.0 </b></p>";  ?>

</div>
<div class='col-xs-8'>

<button onclick='fun2("<?php echo$row1['id']; ?>","<?php echo$cname; ?>","<?php echo$scname; ?>");'>

go to Product
</button>
</div></div></div>

<?php

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


<script>

function fun2(idnum, cname, scname){

window.location.assign("product.php?cname="+cname+"&scname="+scname+"&idnum="+idnum);
}

</script>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>
