<?php
 include 'db.php';
             $id=$_GET['id'];        
             $sql = "delete from proficiency  WHERE proficiency_id='$id'";

             if (mysqli_query($conn, $sql)) {
                    header("Location:proficiencyList.php");
                        } 
            else {
                  echo "خطا در مرحله حذف: " . mysqli_error($conn);
                 }
                            
                mysqli_close($conn);
                        

 ?>