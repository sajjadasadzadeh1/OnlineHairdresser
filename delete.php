<?php
 include 'db.php';
             $id=$_GET['id'];        
             $sql = "delete from tbl_rezerveinfo  WHERE Reserveinfo_id='$id'";

             if (mysqli_query($conn, $sql)) {
                    header("Location:RezerveList.php");
                        } 
            else {
                  echo "خطا در مرحله حذف: " . mysqli_error($conn);
                 }
                            
                mysqli_close($conn);
                        

 ?>