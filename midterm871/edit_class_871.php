<?php include "config_871.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'title_871.php' ?>
</head>
<body>
    <?php 
    $class_id_871 = $_GET['class_id_871'];

    $sql = "SELECT * FROM classification_871 WHERE class_id_871 ='$class_id_871'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        
      }   
      ?>
      <center>
    <h2>แก้ไขประเภทหนังสือ871</h2>
        <form action="save_class_871.php?oldclass_id_871=<?php echo $row["class_id_871"];?>" method="post">
        <label for="class_id_871" >รหัสประเภทหนังสือ871 :</label>
        <input type="text" name="class_id_871" value="<?php echo $row["class_id_871"];?>"><br>
        <br>
        <label for="class_name_871">ชื่อประเภทหนังสือ871 :</label>
        <input type="text" name="class_name_871" value="<?php echo $row["class_name_871"];?>"><br>
        <br>
        <button type="submit">Edit</button>
        <a href="class_add_db_871.php"><button>ย้อนกลับ</button></a>
    </form>
<?php
mysqli_close($conn);
?>
<br><br>
<a href="index_871.php"><button>กลับไปหน้าแรก</button></a>
<footer>
<p>116230505087-1 นายโยธิน ตั้งชนะชัยพงษ์ สสค.62-B</p></footer>
</body>
</html>
