<?php include "config_871.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<?php
 $book_id_871 = $_POST["book_id_871"];
 $book_name_871 = $_POST["book_name_871"];
 $author_871 = $_POST["author_871"];
 $publishing_871 = $_POST ["publishing_871"];
 $class_id_871 = $_POST ["class_id_871"];
 $oldbook_id_871 = $_GET["oldbook_id_871"];

  $sql = "UPDATE book_871 SET 
          book_id_871='$book_id_871',
          book_name_871='$book_name_871',
          author_871='$author_871',
          publishing_871='$publishing_871',
          class_id_871='$class_id_871'";

if($_FILES['images']['size'] <> 0)
{
  $images  = $_FILES['images']['name'];
  $target = "images/".basename($images);
  move_uploaded_file($_FILES['images']['tmp_name'],$target);
  $sql = $sql.",`images`='$images'";
 
}
else
{
  $images  = "";
}

$sql = $sql." WHERE book_id_871='$oldbook_id_871'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: book_add_db_871.php");
?>
