<?php 
	include('connect.php');
	if(isset($_GET['domain']))
	{
		$type = $_GET['domain'];

		if($type!='All Project'){
			$sql = "select * from project where pdomain  = '$type' ";	
		}
		else{
			$sql = "select * from project";
		}
	
		$result = $conn->query($sql);
		// 
		echo "<table class='table table-centered table-hovered'>";
		echo "<tr>";
		echo "<th>ID </th>";
		echo "<th>Project Name </th>";
		echo "<th>Batch </th>";
		echo "<th>Domain </th>";
		echo "<th>Guide </th>";
		echo "<th>Member 1 </th>";
		echo "<th>Member 2 </th>";
		echo "<th>Member 3 </th>";
		echo "<th>Member 4 </th>";

		echo "</tr>";

		while($rows = $result->fetch_row() ){
			echo "<tr>";
			echo "<td>$rows[1]</td>";
			echo "<td>$rows[2]</td>";
			echo "<td>$rows[3]</td>";
			echo "<td>$rows[4]</td>";
			echo "<td>$rows[7]</td>";
			echo "<td>$rows[8]</td>";
			echo "<td>$rows[9]</td>";
			echo "<td>$rows[10]</td>";
			echo "<td>$rows[11]</td>";
			echo "</tr>";
		}
	echo "</table>";	
	}
	else if (isset($_GET['pname'])){
		$sql = "select * from project where pname = '$_GET[pname]'" ;
		
		$result = $conn->query($sql);

		while($rows = $result->fetch_row() )
		{
			$rows += $rows[];
		}
		
	}
	else
	{
		echo "Error";
	}
?>