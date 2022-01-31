<?php
include("database.php");
$del_id = $_GET["t_id"];
echo $del_id;

$sql = "DELETE FROM classteachers WHERE id='$del_id'";

if ($conn->query($sql) === TRUE) {
    header("Location:index.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>