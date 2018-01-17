<?php

require_once 'assets/lib/12days.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php echo getTitle(); ?> Lyrics</title>

	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

	<?php

	echo getLyrics();

	?>

	<button id="remove" onclick="hideLatest()">Remove</button>

	<!-- <button id="add">Add</button> -->

	<script type="text/javascript">
		var days = document.querySelectorAll('[id^="day"]');

		function hideLatest() {
			var a = "day"+days;
			document.getElementById(a).style.display = "none";

		};

		// $("#remove").keypress(function(event)){
		// 	$("#days".$dayNum).hide();
		// 	$dayNum = $dayNum - 1;
		// };

	</script>

	<!-- <script type="text/javascript" src="assets/lib/jquery-3.2.1x.slim.min.js"></script> -->

</body>
</html>