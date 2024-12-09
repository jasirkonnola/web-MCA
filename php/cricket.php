<html>
<head><title>Name of India Circket Players</title>
<style>
	table {
		width: 50%;
		border-collapse: collapse;
		margin: 20px auto;
	}
	table, th ,td {
		border: 1px solid black;
	}
	th , td{
		padding:8px 12px;
		text-align: center;
	}
	th{
		background-color: #f2f2f2;
	}
</style>
</head>
<body>
	<h2 style="text-align: center;">List of Cricket players</h2>
	<?php
	$players = [
	"Virat Kohli",
	"Dilbar",
	"KL Rahul"
	];
	echo "<table>";
	echo "<tr><th> Playr Names</th></tr>";
	
	foreach($players as $player){
		echo "<tr><td>".$player . "</td></tr>";
		
	}
	
	echo "</table>";
	?>
</body>
</html>