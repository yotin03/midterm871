<?php include "config_871.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<?php
 $class_id_871 = $_POST["class_id_871"];
 $class_name_871 = $_POST["class_name_871"];
 $oldclass_id_871 = $_GET["oldclass_id_871"];

  $sql = "UPDATE classification_871 SET 
          class_id_871='$class_id_871',
          class_name_871='$class_name_871'
          WHERE class_id_871='$oldclass_id_871'
";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: class_add_db_871.php");
?>