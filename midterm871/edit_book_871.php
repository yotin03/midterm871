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
$book_id_871 = $_GET["book_id_871"];

$sql = "SELECT * FROM book_871 WHERE book_id_871='$book_id_871'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  $row = mysqli_fetch_assoc($result);
  
}
$sql2 = "SELECT * FROM classification_871";
$result2 = mysqli_query($conn, $sql2); 

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    //$row = mysqli_fetch_assoc($result);
    
  }
?>

<center>

    <h2>แก้ไขสินค้า</h2>
    <!--ฟอร์มรับข้อมูล และส่งข้อมูลไปที่ product_insert.php โดยใช้ เมดธอด post-->
    <form action="save_book_871.php?oldbook_id_871=<?php echo $row["book_id_871"];?>" method="post" enctype="multipart/form-data">
    <label for="book_id_871" >รหัสหนังสือ871 :</label>
        <input type="text" name="book_id_871" value="<?php echo $row["book_id_871"];?>"><br>
        <br>
        <label for="book_name_871">ชื่อหนัง871 :</label>
        <input type="text" name="book_name_871" value="<?php echo $row["book_name_871"];?>"><br>
        <br>
        <label for="author_871">ผู้แต่ง871 :</label>
        <input type="text" name="author_871" value="<?php echo $row["author_871"];?>"><br>
        <br>
        <label for="publishing_871">จัดพิมพ์871 :</label>
        <input type="text" name="publishing_871"value="<?php echo $row["publishing_871"];?>"><br>
        <br>
        <input type="file" name="images"><br><br>
        <center><img src="images/<?php echo $row["images"]; ?>" alt="" width="100" height="100" ></center>
        <label for="class_id_871" >ประเภทหนังสือ871 :</label>
        <select name="class_id_871">
        <option value="">please select class</option>
    <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
        <option value="<?php echo $row2["class_id_871"]; ?>"<?php if($row['class_id_871']==$row2['class_id_871']) { echo "selected";}?>><?php echo $row2["class_id_871"]; ?>:<?php echo $row2["class_name_871"]; ?></option>
            <?php  } ?>
</select>

        <br><br>
        <button type="submit">Edit</button>
        <a href="book_add_db_871.php"><button>ย้อนกลับ</button></a>
    </form>

    
<br>
<br><br>
<a href="index_871.php"><button>กลับไปหน้าแรก</button></a>
<footer>
<p>116230505087-1 นายโยธิน ตั้งชนะชัยพงษ์ สสค.62-B</p></footer>
        
</body>
</html>