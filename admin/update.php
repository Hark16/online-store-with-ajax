<title>
update data
</title>

<form method='POST'>

<h3>updated Link</h3>
<input type='text' name='link' placeholder='Updated Link' />

<h3>updated Rating</h3>
<input type='text' name='rating' placeholder='Updated Rating' />
<hr/>

<h3>updated Image URL1</h3>
<input type='text' name='image1' placeholder='Updated Image URL1' />

<h3>updated Image URL2</h3>
<input type='text' name='image2' placeholder='Updated Image URL2' />
<h3>updated Image URL3</h3>
<input type='text' name='image3' placeholder='Updated Image URL3' />
<h3>updated Image URL4</h3>
<input type='text' name='image4' placeholder='Updated Image URL4' />

<hr/>
<input type='submit' name='submit' value='submit'/>

</form>

<?php

if(isset($_POST['submit'])){

$link= $_POST['link'];
$rating= $_POST['rating'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
$image4 = $_POST['image4'];


if(isset($_GET['front'])){
$idnum=$_GET['idnum'];
$wln = $_GET['wln'];

   header("Location: update_data.php?front=front&idnum=".$idnum."&wln=".$wln."&link=".$link."&rating=".$rating."&image1=".$image1."&image2=".$image2."&image3=".$image3."&image4=".$image4);

}
else{
$idnum=$_GET['idnum'];
$scname= $_GET['scname'];
$cname= $_GET['cname'];

   header("Location: update_data.php?idnum=".$idnum."&cname=".$cname."&scname=".$scname."&link=".$link."&rating=".$rating."&image1=".$image1."&image2=".$image2."&image3=".$image3."&image4=".$image4);


}}

?>

