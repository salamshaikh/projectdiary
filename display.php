<?php 
	include('connect.php');
	if(isset($_GET['domain']))
	{
	$type = $_GET['domain'];

	switch($type){
		case 'Machine Learning':
			$sql = "select * from project where pdomain = '$type'";
			echo $sql;
			break;
		case 'Cloud Computing':
			$sql = "select * from project where pdomain = '$type'";
			echo $sql;
			break;
		case 'Image Processing':
			$sql = "select * from project where pdomain = '$type'";
			echo $sql;
			break;
		case 'DATA MINING':
			$sql = "select * from project where pdomain = '$type'";
			echo $sql;
			break;
		case 'Networking':
			$sql = "select * from project where pdomain = '$type'";
			echo $sql;
			break;

		default:
			$sql = "select * from project";
			break;
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

	if(isset($_GET['pname'])){
		$pname = $_GET['pname'];
		
		$sql = "select * from project where pname = '$pname' ";
		$result = $conn->query($sql);
		while($rows = $result->fetch_assoc())
		{
			echo $rows["member1"];
			echo $rows["member2"];
			echo $rows["member3"];
			echo $rows["member4"];
		}
	}
?>