<?php include "config_871.php"; ?>
<?php 
$class_id_871 = $_GET['class_id_871'];
$sql = "DELETE FROM classification_871 WHERE class_id_871 ='$class_id_871'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: class_add_db_871.php");
?>