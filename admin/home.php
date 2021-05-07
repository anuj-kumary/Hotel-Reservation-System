<!DOCTYPE HTML>
<html>
<head>
	<title>Admin | Dashboard</title>
	<style>

		.container{
			margin-top: 10rem;
		}

	</style>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light2", "dark1", "dark2"
	animationEnabled: true, // change to true		
	title:{
		text: "Monthly Sales Chart"
	},
	data: [
	{
		// Change type to "bar",column "area", "spline", "pie",etc.
		//type: "area",
		//type: "pie",
		type: "column",
		//type: "spline",
		//type: "bar",
		dataPoints: [
			{ label: "November",  y: 10  },
			{ label: "December", y: 15  },
			{ label: "January", y: 25  },
			{ label: "February",  y: 30  },
			{ label: "March",  y: 28  }
		]
	}
	]
});
chart.render();

}
</script>
</head>
<body>
	<?php include_once('header.php');?>



<div class="container">
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>