<?php include("base.php"); ?>
<title>Teacher CRUD </title>
<body><br><br>
<div class="row justify-content-center">
	<div class="col-md-10">
        
<a class="btn btn-primary" href="add.php">Add Teachers </a>
		<h3>All Teacher In Schools :- </h3>
		<table class="table">
  			<thead>
    			<tr>
      				<th scope="col"> Name </th>
		      		<th scope="col"> Age </th>
		      		<th scope="col"> Mobile </th>
		      		<th scope="col"> Subject</th>
                    <th scope="col"> Edit </th>
		      		<th scope="col"> Delete </th>
		      
    			</tr>
  			</thead>
  			<tbody>
        	<tr>
<?php
include("database.php");
$sql = "SELECT * from classteachers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
     				<td><?php echo $row['Name']; ?></td>
      				<td><?php echo $row['Age']; ?></td>
      				<td><?php echo $row['Mobile']; ?></td>
      				<td><?php echo $row['Subject']; ?></td>
      				<td><a href="edit.php?t_id=<?php echo $row['Id'];?>">Update</a></td>
      				<td><a href="delete.php?t_id=<?php echo $row['Id'];?>">delete</a></td>
      				
    			</tr>
                <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
 
    		</tbody>
    	</table>
		</div>
	</div>

