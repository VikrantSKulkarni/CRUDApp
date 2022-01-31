<?php 
include("database.php");
include("base.php");

if(isset($_POST['submit'])){
	$tname = $_POST["txtname"];
	$tage= $_POST["txtage"];
	$tmobile = $_POST["txtmobile"];
	$tsub= $_POST["txtsub"];

$sql = "INSERT INTO classteachers (Name, Age ,Mobile,Subject)
	VALUES ('$tname', '$tage','$tmobile','$tsub')";
    if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Data inserted successfully');</script>";
	header("Location:index.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

//	$conn->close();
}
?>
    <title>Add Teachers </title>
<body><br>
<br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Add Teacher Page :</h1>
            <form class="form-group" action="" method="post">
            <label for="name" class="form-label">Teacher Name </label>
    		<input type="text"  name="txtname" class="form-control" placeholder=" Enter Teacher Name " required>
    		<label for="name" class="form-label">Teacher Age </label>
    		<input type="number" name="txtage" class="form-control" placeholder=" Enter Teacher Age " required>
    		<label for="name" class="form-label">Teacher Mobile </label>
    		<input type="number"  name="txtmobile" class="form-control" placeholder=" Enter Teacher Mobile " required>
    		<label for="name" class="form-label">Teacher's Subject </label>
    		<input type="text"  name="txtsub" class="form-control" placeholder=" Enter Teacher's  Subject "required>
    		<input class="btn btn-primary mt-3" type="submit"  name="submit" value="Add">				
            </form>
        </div>
    </div>
</body>
</html>