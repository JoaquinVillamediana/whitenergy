<?php
 
 $dataPoints = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome-free-5.13.1-web/css/all.css">
    <link rel="stylesheet" href="css/general.css">
    <title>WhiteEnergy Panel</title>
  </head>
  <body>
    <?php include_once('layouts/nav.php')?>
    <div class="main-content">
      <div class="container pt-2">
      <h1 class="text-center mb-2">Mi consumo</h1>
      <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>



  <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Company Revenue by Year"
	},
	axisY: {
		title: "Revenue in USD",
		valueFormatString: "#0,,.",
		suffix: "mn",
		prefix: "$"
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</html>