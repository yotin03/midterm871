<?php include "config_871.php"; ?>
<?php 
$book_id_871 = $_GET['book_id_871'];
$sql = "DELETE FROM book_871 WHERE book_id_871 ='$book_id_871'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: book_add_db_871.php");
?>