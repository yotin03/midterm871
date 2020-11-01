<?php include "config_871.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "title_871.php";?>
</head>
<body>
<center>
<h2>เพิ่มประเภทหนังสือ871</h2>
    <!--ฟอร์มรับข้อมูล และส่งข้อมูลไปที่ category_insert_871.php โดยใช้ เมดธอด post-->
    <form action="class_insert_871.php" method="post">
        <label for="class_id_871" >รหัสประเภทหนังสือ871 :</label>
        <input type="text" name="class_id_871" placeholder="000"required=""><br>
        <br>
        <label for="class_name_871">ประเภทหนังสือ871 :</label>
        <input type="text" name="class_name_871" placeholder="คณิตศาสตร์"required=""><br>
        <br>
        <button type="submit">insert</button>
    </form><style></style>
    <hr>
        <h2>ตารางแสดงข้อมูลประเภทหนังสือ871</h2>
    <a href="book_add_db_871.php"><button><span style="color:red;">คลิ๊กเพื่อ</span> เพิ่มหนังสือ871</button></a> 
    <a href="class_add_db_871.php"><button>กลับ</button></a> 
    <br><br>
    <!--ตารางแสดงข้อมูล-->
<form action="search_class_871.php" method="post">
<input type="search" name="keyword">
<input type="submit" value="search">
<br><br>
</form>
        <table border=1>    
        <!--ส่วนหัวตาราง--> 
            <thead>
                <tr>
                    <th>รหัสประเภทหนังสือ871</th>
                    <th>ประเภทหนังสือ871</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
    <!--เรียกข้อมูลออกมาแสดง-->
    <?php 
     $keyword=$_POST["keyword"]; 
     $sql = "SELECT * FROM classification_871 WHERE class_id_871 LIKE '%$keyword%'";
     $result = mysqli_query($conn, $sql);
    ?>

    <?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
            
            <tbody>
                <tr>
                    <td><?php echo $row["class_id_871"]; ?></td>
                    <td><?php echo $row["class_name_871"]; ?></td>
                    <td><a href='edit_class_871.php?class_id_871=<?php echo $row["class_id_871"];?>'><button>แก้ไข</button></a></td>
                    <td><a href='del_class_871.php?class_id_871=<?php echo $row["class_id_871"];?>'><button>ลบ</button></a></td>
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
</body>
</html>