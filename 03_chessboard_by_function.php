<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>PHP Example</title>
	</head>
	<!-- define some PHP functions-->
	<?php
		function chessboard($col,$row,$width,$height,$c1,$c2)
		{
		print "<table style=\"width:".$width."px;height:".$height."px\">\n";
		for ($i=0;$i<$row;$i++)
			{
			print "<tr>\n";
			for ($j=0;$j<$col;$j++)
				{
				if (($i+$j)%2==0)
					$c=$c1;
				else $c=$c2;
				print "<td style=\"background-color:$c\">&nbsp;</td>\n";
				}
			print "</tr>\n";
			}
		print "</table>\n";
		}
	?>
	<body>
		<h1>PHP Example</h1>
		<p>
			The following chessboards are generated from a single user-defined function.
		</p>
		<?
			chessboard(9,9,300,300,"black","yellow");
			chessboard(8,8,200,200,"green","blue");
		?>
	</body>
</html>
