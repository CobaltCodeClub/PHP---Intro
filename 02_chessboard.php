<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>PHP Example</title>
	</head>
	<body>
		<h1>PHP Example</h1>
		<p>
		The following chess-board is generated from PHP.
		</p>
		<table style="width:300px;height:300px">
		<?php
			$row=8;
			$col=8;
			$c1="blue";
			$c2="white";
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
		?>
		</table>
	</body>
</html>
