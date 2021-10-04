<?php
      include 'db.php';

        $id=$_GET['x'];


            $sql = "UPDATE tbl_comment SET status=1  WHERE comment_id=$id";
            if (mysqli_query($conn, $sql)) {
                  header("Location:mng_comment.php");
                }
                 else {
                    echo "خطا در مرحله رزرو: " . mysqli_error($conn);
                       }
            mysqli_close($conn);
                                  
?>