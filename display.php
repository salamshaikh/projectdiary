<?php 
	include('connect.php');

	$sql = "select * from project";
	$result = $conn->query($sql);
	// 
	echo "<table class='table table-centered table-hovered'>";
	echo "<tr>";
	echo "<th>ID </th>";
	echo "<th>Project Name </th>";
	echo "<th>Project Batch </th>";
	echo "<th>Domain </th>";
	echo "<th>Guide </th>";
	echo "</tr>";

	while($rows = $result->fetch_row() ){
		echo "<tr>";
		echo "<td>$rows[0]</td>";
		echo "<td>$rows[1]</td>";
		echo "<td>$rows[2]</td>";
		echo "<td>$rows[3]</td>";
		echo "<td>$rows[6]</td>";
		echo "</tr>";

	}
	echo "</table>";

?>