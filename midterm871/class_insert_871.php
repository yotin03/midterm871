<?php include "config_871.php"; ?>
<?php 
 $class_id_871 = $_POST["class_id_871"];
 $class_name_871 = $_POST["class_name_871"];

 $sql = "INSERT INTO classification_871 (class_id_871, class_name_871)
VALUES ('$class_id_871', '$class_name_871')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: class_add_db_871.php");
?>