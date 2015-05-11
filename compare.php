<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

<title>AraSimQC Test Site</title>

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
specific AraSimQC plots from releases or trunks and compare 
them side-by-side.  I don't know how to do this yet.
</p>

<p>
Attempts at a drop-down should follow.  Not all of the releases, 
trunks, and plots listed actually exist yet!
</p>

<p>
Select the first version you would like to compare:
<select name="chooseVersion1">
  <option value="">Select...</option>
  <option value="rel_1_0">Release 1.0</option>
  <option value="rel_1_1">Release 1.1</option>
  <option value="trunk493">Trunk 493</option>
  <option value="trunk493">Trunk 493</option>
  <option value="trunk494">Trunk 494</option>
  <option value="trunk495">Trunk 495</option>
  <option value="trunk496">Trunk 496</option>
</select>
</p>

<p>
Select the second version you would like to compare:
<select name="chooseVersion2">
  <option value="">Select...</option>
  <option value="rel_1_0">Release 1.0</option>
  <option value="rel_1_1">Release 1.1</option>
  <option value="trunk493">Trunk 493</option>
  <option value="trunk494">Trunk 494</option>
  <option value="trunk495">Trunk 495</option>
  <option value="trunk496">Trunk 496</option>
</select>
</p>

<label for='choosePlots[]'>Select the plots you would like to view (hold Ctrl to select multiple):</label><br>
<select multiple="multiple" name="choosePlots[]">
    <option value="allPlots">All plots!</option>
    <option value="01">Plot 01</option>
    <option value="02">Plot 02</option>
    <option value="03">Plot 03</option>
    <option value="04">Plot 04</option>
    <option value="05">Plot 05</option>
    <option value="06">Plot 06</option>
</select>

<br> <br> <br> <br>
This will make the plots go
<select name="Plot">
    <option value="" selected="selected"></option>
  <?php 
    $plotdir = "plots/rel_1_0/trajP500.jpg";//your path
    $dh  = opendir($plotdir);
    while (false !== ($filename = readdir($dh))) {
        $files[] = $filename;
  echo "<option value='" . $filename . "'>".$filename."</option>";  }
    sort($files);
 ?>

</select> 

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