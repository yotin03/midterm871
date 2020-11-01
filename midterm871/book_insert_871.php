<?php include "config_871.php"; ?> <!--เรียกใช้ไฟล์ติดต่อฐานข้อมูล-->

<?php 
    $book_id_871 = $_POST["book_id_871"];
    $book_name_871 = $_POST["book_name_871"];
    $author_871 = $_POST["author_871"];
    $publishing_871 = $_POST["publishing_871"];
    $class_id_871 = $_POST["class_id_871"];
    $images = $_FILES["images"]["name"];
    //เลือกรูปภาพ
    if($_FILES["images"] <> null)
    {
        
        $sql = "INSERT INTO book_871 (book_id_871, book_name_871, author_871, publishing_871, class_id_871, images)
        VALUES ('$book_id_871', '$book_name_871', '$author_871', '$publishing_871', '$class_id_871', '$images')";

    $target = "images/".basename($images);
    move_uploaded_file($_FILES["images"]["tmp_name"],$target);
    }
    else 
    {
    $sql = "INSERT INTO book_871 (book_id_871, book_name_871, author_871, publishing_871, class_id_871)
    VALUES ('$book_id_871', '$book_name_871', '$author_871', '$publishing_871' , '$class_id_871')";
    }
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: book_add_db_871.php");
?>

