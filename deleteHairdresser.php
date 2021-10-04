<?php
 include 'db.php';
             $id=$_GET['id'];        
             $sql = "delete from hairdresser  WHERE Hairdresser_id='$id'";

             if (mysqli_query($conn, $sql)) {
                    header("Location:HairdresserList.php");
                        } 
            else {
                  echo "خطا در مرحله حذف: " . mysqli_error($conn);
                 }
                            
                mysqli_close($conn);
                        

 ?>