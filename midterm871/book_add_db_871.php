<?php include "config_871.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'title_871.php' ?>
</head>
<body>
<center>
<?php
// Create connection
$conn2 = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn2) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql2 = "SELECT * FROM classification_871";
$result2 = mysqli_query($conn2, $sql2);
if (mysqli_num_rows($result2) > 0) {
}
    
?> 
    <h2>เพิ่มหนังสือ871</h2>

    <form action="book_insert_871.php" method="post" enctype="multipart/form-data">
        <label for="book_id_871" >รหัสหนังสือ871 :</label>
        <input type="text" name="book_id_871" placeholder="b000"required=""><br>
        <br>
        <label for="book_name_871">ชื่อหนัง871 :</label>
        <input type="text" name="book_name_871" placeholder="ชื่อหนังสือ"ชื่อสินค้า=""><br>
        <br>
        <label for="author_871">ผู้แต่ง871 :</label>
        <input type="text" name="author_871" placeholder="ชื่อผู้แต่ง"ชื่อสินค้า=""><br>
        <br>
        <label for="publishing_871">จัดพิมพ์871 :</label>
        <input type="text" name="publishing_871" placeholder="ชื่อที่พิมพ์"ชื่อสินค้า=""><br>
        <br>
        <label for="book_name_871">รูปภาพหนังสือ871 :</label>
        <input type="file" name="images"><br>
        <label for="class_id_871" >ประเภทหนังสือ871 :</label>
        <select name="class_id_871">
        <option value="">please select category</option>
    <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
            <option value="<?php echo $row2["class_id_871"]; ?>"><?php echo $row2["class_id_871"]; ?>:<?php echo $row2["class_name_871"]; ?></option>
            <?php  } ?>
</select>

        <br><br>
        <button type="submit">insert</button>
    </form>

    <hr>
        <h2>ตารางแสดงข้อมูลสินค้า</h2>
        <a href="class_add_db_871.php"><button><span style="color:red;">คลิ๊กเพื่อ </span>เพิ่มประเภทหนังสือ871</button></a> 
        <br><br>
    <!--ตารางแสดงข้อมูล-->
    <form action="search_book_871.php" method="post">
<input type="search" name="keyword">
<input type="submit" value="search">
</form>
<br>
        <table border=1>    
        <!--ส่วนหัวตาราง--> 
            <thead>
                <tr>
                    <th>รหัสหนังสือ871</th>
                    <th>ชื่อหนัง871</th>
                    <th>ผู้แต่ง871</th>
                    <th>จัดพิมพ์871</th>
                    <th>รหัสประเภทหนังสือ871</th>
                    <th>ประเภทหนังสือ871</th>
                    <th>รูปภาพหนังสือ871</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
    <!--เรียกข้อมูลออกมาแสดง-->
    <?php 
    $sql = "SELECT * FROM book_871 INNER JOIN classification_871 on book_871.class_id_871 = classification_871.class_id_871";
    $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            
            <tbody align=center>
                <tr>
                    <td><?php echo $row['book_id_871']; ?></td>
                    <td><?php echo $row["book_name_871"]; ?></td>
                    <td><?php echo $row["author_871"]; ?></td>
                    <td><?php echo $row["publishing_871"]; ?></td>
                    <td><?php echo $row["class_id_871"]; ?></td>
                    <td><?php echo $row["class_name_871"]; ?></td>
                    <td>
                    <?php if($row["images"] <> null) {?>
                    <img src="images/<?php echo $row["images"]; ?>" alt="" width="100" height="100" >
                    <?php } ?>
                    </td>    
                    <td><a href='edit_book_871.php?book_id_871=<?php echo $row["book_id_871"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='del_book_871.php?book_id_871=<?php echo $row["book_id_871"];?>'><button>ลบ</button></a></td>
                </tr>
            </tbody>
    
        <?php } ?>
    <?php } 
    else {
        echo "0 results";
      }
    ?>
</table>
<br><br>
<a href="index_871.php"><button>กลับไปหน้าแรก</button></a>
<?php  mysqli_close($conn); ?>
<br>
<footer>
<p>116230505087-1 นายโยธิน ตั้งชนะชัยพงษ์ สสค.62-B</p></footer>
        
</body>
</html>