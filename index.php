<html>
<head>
	<title>Get Minimum or Max from Array</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Get Min & Max from the Array</h1><hr />
			<p>
			<?php
				$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02);

				function get_min_max($sample) {
					$max = $sample[0];
					$min = $sample[0];

					foreach ($sample as $i) {

						if ($min > $i) {
							$min = $i;
						}
						if ($max < $i) {
							$max = $i;
						}
					}
					echo "This is the minimum number of the array " . $min . "<br /><br />";
					echo "This is the maximum number of the array " . $max;
				}
				get_min_max($sample);
			?>
			</p>
		</header>
	</div>
</body>
</html>