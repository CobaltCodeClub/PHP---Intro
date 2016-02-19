<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>PHP Array Examples</title>
	</head>
	<?php	$months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	?>
	<body>
		<h1>PHP Array Examples</h1>
		<hr/>
		<h2>Simple Arrays</h2>
		<p>
			In this example, we have an array of months and we use it to generate an ordered list.
		</p>
		<ol>
			<?php
				for ($i=0;$i<sizeof($months);$i++)
					print "<li>".$months[$i]."</li>\n";
			?>
		</ol>

		<p>
			The same example can be done using a different loop construct:
		</p>
		<ol>
			<?php
				foreach ($months as $m)
					print "<li>".$m."</li>\n";
			?>
		</ol>
		<hr/>
		<h2>Arary with Associate Keys</h2>
		<?php
			$days=array("Jan"=>31,"Feb"=>28,"Mar"=>31,"Apr"=>30,
						"May"=>31,"Jun"=>30,"Jul"=>31,"Aug"=>31,
						"Sep"=>30,"Oct"=>31,"Nov"=>30,"Dec"=>31);
			foreach ($months as $m)
				echo "In the month of $m, there are $days[$m] days.<br/>\n";
		?>
		<hr/>
		<h2>Nested Array Example</h2>
		<p>
			In this example, we use an array of heterogeneous element types to store a car.
			Then we nested these arrays into another array to represent multiple cars.
		</p>
		<?php
			$cars=array();			//an array of car
			$cars["K326GLK"]=array("VW","Golf",1.4,1000);
			$cars["Y982HSA"]=array("Puegeot","206",1.6,3000);
			$cars["SV56OSA"]=array("Ford","Fiesta",1.2,5600);
			$cars["SW06TXN"]=array("Audi","TT",2.5,27000);
			$cars["SU53NMX"]=array("Nissan","Micra",1.0,2500);
		?>
		<table style="border-style:solid;border-width:1px;border_color:black;font-family:'Helvetica';text-align:center">
			<tr style="background-color:orange">
				<th>Registration</th>
				<th>Made</th>
				<th>Model</th>
				<th>Engine Size</th>
				<th>Price (GBP)</th>
			</tr>
		<?php
			$row=0;
			foreach ($cars as $reg => $car)
				{
				if ($row%2==0)
					$colour="white";
				else $colour="yellow";
				$row++;
				print "<tr style=\"background-color:$colour\">\n";
				print "<td>".$reg."</td>";
				print "<td>".$car[0]."</td>";
				print "<td>".$car[1]."</td>";
				print "<td>".$car[2]."</td>";
				print "<td>".$car[3]."</td>\n";
				print "</tr>\n";
				}
		?>
		</table>
	</body>
</html>
