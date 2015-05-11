<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>IcemcQC Test Site</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> - jsFiddle demo</title>
  
  <script type='text/javascript' src='jquery-1.10.1.js'></script>
  
   
  <style type='text/css'>
    img {
    width:700px;
    margin:auto;
   }
  </style>
  


<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
var pictureList = [
    "plots/primaryplots/altitude_int.jpg",
    "plots/primaryplots/currentint.jpg",
    "plots/primaryplots/nuflavorint.jpg",
    "plots/primaryplots/nuexit.jpg"];



$('#anita').change(function () {
//    var val1 = parseInt($('#anita').val());
//    console.log(val1);
//    console.log(pictureList[val1]);
//    $('img').attr("src",pictureList[val1]);
    var val1 = parseInt($('#anita').val());
    var val2 = parseInt($('#energy').val());
    var val3 = parseInt($('#revision').val());
    var val4 = $('#plot').val();
    //imageName = "anita" + val1.toString() + "_energy" + val2.toString() + ".jpg"
	imageName = "plots/primaryplots/altitude_int.jpg";
    console.log(val1);
    console.log(imageName);
    $('img').attr("img",imageName);
});


$('#energy').change(function () {
    var val1 = parseInt($('#anita').val());
    var val2 = parseInt($('#energy').val());
    var val3 = parseInt($('#revision').val());
    var val4 = $('#plot').val();
    //imageName = "anita" + val1.toString() +"_energy" + val2.toString() + ".pdf"
	imageName = "plots/primaryplots/nuflavorint.jpg";
    console.log(val2);
    console.log(imageName);
    $('img').attr("src",imageName);
});


$('#revision').change(function () {
    var val1 = parseInt($('#anita').val());
    var val2 = parseInt($('#energy').val());
    var val3 = parseInt($('#revision').val());
    var val4 = $('#plot').val();
    //imageName ="revision" + val3.toString() + "_anita" + val1.toString() +"_energy" + val2.toString() + val4 + ".pdf"
	imageName="plots/primaryplots/currentint.jpg";
    console.log(val2);
    console.log(imageName);
    $('img').attr("src",imageName);
});



$('#plot').change(function () {
    var val1 = parseInt($('#anita').val());
    var val2 = parseInt($('#energy').val());
    var val3 = parseInt($('#revision').val());
    var val4 = $('#plot').val();
    //imageName ="revision" + val3.toString() + "_anita" + val1.toString() +"_energy" + val2.toString() + "_" + val4 + ".pdf"
	imageName="plots/primaryplots/nuexit.jpg";
    console.log(val2);
    console.log(imageName);
    $('img').attr("src",imageName);
});


});//]]>  

</script>



</head>
<body>
	<div id="wrapper">

<?php include('includes/header.php'); ?>

<?php include('includes/nav.php'); ?>

<div id="content">

<h3>Compare</h3>

<p>
This is a placeholder for the comparison page.
</p>

<p>
Hopefully this page will eventually allow the user to select 
specific IcemcQC plots from releases or trunks and compare 
them side-by-side.  I dont know how to do this yet.
</p>

<p>
Attempts at a drop-down should follow.  Not all of the releases, 
trunks, and plots listed actually exist yet!
</p>

<p>
Please select the parameters for the first set of plots.
</p>

Select Anita Flight:<select id="anita">
	<option>- - - - - - </option>
	<option value="1">Anita 1 </option>
	<option value="2">Anita 2 </option>
	<option value="3">Anita 3 </option>
</select>

Select Energy: <select id="energy">
	<option>- - - - - - </option>
	<option value="18">10^18 </option>
	<option value="19">10^19 </option>
	<option value="20">10^20 </option>
	<option value="21">10^21 </option>
</select>

Select Revision Number: <select id="revision">
	<option>- - - - - - </option>
	<option value="500">500 </option>
	<option value="501">501 </option>
	<option value="502">502 </option>
	<option value="503">503 </option>
	</select>

Select Variable: <select id="plot">
        <option>- - - - - - </option>
	<option value="all">All variables! </option>
	<option value="altitude_int">altitude_int </option>
	<option value="chord_kgm2_bestcase">chord_kgm2_bestcase </option>
    	<option value="currentint">current_int </option>
</select>			   

<p>
Please select the parameters for the second set of plots.
</p>


<img src="plots/primaryplots/posnu.jpg" />
<!--<object id="imageName" data="plots/primaryplots/posnu.pdf" type="application/pdf" width="900" height="300">
 
  <p>It appears you don't have a PDF plugin for this browser.
  No biggie... you can <a href="posnu.pdf">click here to
  download the PDF file.</a></p>
  
</object>-->




<?php

//$ver1 = $_POST['chooseVersion1'];
//    switch($ver1)
//	$comp1="rel_1_0"
//   {
//      case "rel_1_0": $comp1 = "rel_1_0"; break;
//      case "rel_1_1": $comp1 = "rel_1_1"; break;
//      case "trunk493": $comp1 = "trunk493"; break;
//      case "trunk494": $comp1 = "trunk494"; break;
//      case "trunk495": $comp1 = "trunk495"; break;
//      case "trunk496": $comp1 = "trunk496"; break;
//      default: echo("Error!"); exit(); break;
//    }
//	
//$ver2 = $_POST['chooseVersion2'];
//    switch($ver2)
//	$comp2="rel_1_0"
//    {
//      case "rel_1_0": $comp2 = "rel_1_0"; break;
//      case "rel_1_1": $comp2 = "rel_1_1"; break;
//      case "trunk493": $comp2 = "trunk493"; break;
//      case "trunk494": $comp2 = "trunk494"; break;
//      case "trunk495": $comp2 = "trunk495"; break;
//      case "trunk496": $comp2 = "trunk496"; break;
//      default: echo("Error!"); exit(); break;
//    }
//
	//echo "You have selected to compare $comp1 to $comp2";
	//exit();
?>
	
</div> <!-- end #content -->

<?php include('includes/footer.php'); ?>

		</div> <!-- End #wrapper -->

	</body>

</html>
