<?php
include("base.php");
include("database.php");
$up_id = $_GET["t_id"];
//echo $up_id;

$sql = "SELECT * from classteachers where Id='$up_id'";
        $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               // echo $row['Name'];
            ?><br><br>
<title>Edit Record</title>
 <div class="row justify-content-center">
    <div class="col-md-6">
       <h1>Update Teacher Page :</h1>
      <form class="form-group" action="" method="post">
       <input type="hidden" name="txtid" value="<?php echo $row['Id'];  ?>" required>    
      <label for="name" class="form-label">Teacher Name </label>
      <input type="text"  value="<?php echo $row['Name'];?>" name="txtname" class="form-control" placeholder=" Enter Teacher Name "  required>
      <label for="name" class="form-label">Teacher Age </label>
      <input type="number"  value="<?php echo $row['Age'];?>"  name="txtage" class="form-control" placeholder=" Enter Teacher Age "  required>
      <label for="name" class="form-label">Teacher Mobile </label>
      <input type=""  name="txtmobile"  value="<?php echo $row['Mobile'];?>" class="form-control" placeholder=" Enter Teacher Mobile "  required>
      <label for="name" class="form-label">Teacher's Subject </label>
      <input type="text"  name="txtsub" class="form-control"  value="<?php echo $row['Subject'];?>" placeholder=" Enter Teacher's  Subject "  required>
      <input class="btn btn-success mt-3" type="submit"  name="submit" value="Update">				
      </form>
   </div>
    </div>
   <?php
            }
        }
   ?>                 
<?php
if(isset($_POST['submit'])){
    $tId=$_POST['txtid'];
	$tname = $_POST["txtname"];
	$tage= $_POST["txtage"];
	$tmobile = $_POST["txtmobile"];
	$tsub= $_POST["txtsub"];

$sql = "UPDATE classteachers SET Name='$tname',Age='$tage',Mobile='$tmobile',Subject='$tsub' WHERE Id='$tId'";

	if ($conn->query($sql) === TRUE) {
	echo "<script>alert('Data Updated successfully');</script>";
	header("Location:index.php");
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

//	$conn->close();
}


?>
