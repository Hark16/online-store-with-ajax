<!DOCTYPE html>
<html lang="en-US">
<head>

		<script>
		window.onload=function(){
			document.getElementById('loader').style.display="none";
			document.getElementById('page').style.display="block";
		};
		</script>
		<style>

		#page{display:none;}

		#loader{
			position: absolute;
			margin: auto;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			width: 400px;
			height: 400px;
		}
		#loader img{width:400px;}

		</style>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

Electro_World

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

		<div id="loader">
			<img src="loader.gif"/>
		</div>


<div id="page">
	<div class="container">


		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.php" rel="home">
Electro_World


</a></h1>
			<h2 class="site-description"> 

Live in Electri-City

</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>


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

<div id='page1' style='display:block;'>
<?php


// main NAME table of database 

$wln="admin_categories";
include "databaseConnection.php";

$sql = "SELECT * FROM $wln WHERE live='live'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo"<div> select category </div> ";
echo"<center>";
echo"<select id='cat'>";

while($row = mysqli_fetch_array($result)){


echo"<option value='".$row['name']."'>".$row['display_name'] ."</option>"; 

}

echo"</select>";
echo"</center>";
echo"<button onclick='fun();'>Go>> </button>";


mysqli_free_result($result);

} else{

echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}

echo"<hr/>";

$wln1="front_category";


$sql1 = "SELECT * FROM $wln1";

if($result1 = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result1) > 0){

while($row1 = mysqli_fetch_array($result1)){

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

<?php echo"<a href='".$row1['link']."'> amazon</a>";  ?>
</div>
<div class='col-xs-8'>

<button onclick='fun3("<?php echo$row1['link']; ?>");'>

go to Product
</button>
</div></div></div>

<?php

echo"<hr/>";
}

mysqli_free_result($result1);

} else{

echo "<h1>No records matching your query were found.</h1>";
}
}
else{

echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}

?>
</div>
<div id='page2'>
</div>


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
Electro_World



</h1>
			 <a target="blank" href="https://www.shoesoccerstore.com/app/index.php">&copy; <?php echo date('Y'); ?> E_W by Hk </a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>

<!-- #page -->

<script>

function fun(){
var page1= document.getElementById('page1')
page1.style.display='none';

var cat= document.getElementById('cat').value;

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "sub.php?cat="+cat, true);

  xhttp.send();


}

function fun1(scname, cname){
var page1= document.getElementById('page1')
page1.style.display='none';

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("page2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "items.php?cname="+cname+"&scname="+scname, true);

  xhttp.send();


}


function fun2(idnum){

window.location.assign(idnum);

}

function fun3(idnum){

window.location.assign(idnum);
}

</script>

<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</body>
</html>
