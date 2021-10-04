<?php
session_start();
if($_SESSION['u']!=12)
header("Location:index.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعریف رزرو</title>
    <link rel="stylesheet" href="bootstrap.css" > 
    <link rel="stylesheet" href="Style.css" >
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">صفحه اصلی</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Services.html">خدمات ما</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about_me.php">درباره ما</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact_us.php">تماس با ما</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="comment.php">نظرات</a>
    </li>
  </ul>
</nav>
  <div class="container-fluid">
             <div class="card">
             <div class="card-header hero">
                 <h1 class='text-center'>آرایشگاه ذات زیبا</h1>
                 </div>
                 <div class="card-body">
                     <div class="row">
                          <div class="col-md-2">
                             <div class="p-2 border-bottom"><a href="Rezerve.php">تعریف زمان رزرو</a></div>
                             <div class="p-2 border-bottom"><a href="RezerveList.php">لیست رزروها</a></div>
                             <div class="p-2 border-bottom"><a href="Hairdresser.php"> تعریف آرایشگر</a></div>
                             <div class="p-2 border-bottom"><a href="HairdresserList.php"> لیست آرایشگرها</a></div>
                             <div class="p-2 border-bottom"><a href="proficiency.php"> تعریف خدمات</a></div>
                             <div class="p-2 border-bottom"><a href="proficiencyList.php"> لیست خدمات ها</a></div>
                             <div class="p-2 border-bottom"><a href="mng_comment.php"> لیست نظرات</a></div>
                             <div class="p-2 border-bottom"><a href="logout.php"> خروج  </a></div>

                         </div>
                          <div class="col-md-10 text-center" style="min-height:350px !important;">
                              <div class="card w-25">
                                  <div class="card-header">
                                      <h6>تعریف رزرو آرایشگاه</h6>
                                  </div>
                                  <div class="card-body">
                                  <form action="" method="post">
                                  <div class="form-group">
                                 <label for="">آرایشگر </label>
                                  <select class="form-control form-control-sm" name="Hairdresser">
                                         <?php
                                         include 'db.php';
                                         $sql = "SELECT * FROM hairdresser";
                                         $result = mysqli_query($conn, $sql);
     
                                         if (mysqli_num_rows($result) > 0) {
                                         // output data of each row
                                         while($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='". $row["Hairdresser_id"]. "'>". $row["HairdresserFullName"]. "</option>";    
                                            
                                         }
                                         } else {
                                         echo "هیج آرایشگری ثبت نشده است";
                                         }
                                         ?>
                                     </select>
                                        </div>
                                 <div class="form-group">
                                 <label for="">تاریخ </label>
                                     <input type="text" class="form-control form-control-sm"  name="RezerveDate">
                                 </div>
                                 <div class="form-group">
                                 <label for=""> زمان</label>
                                     <input type="text" class="form-control form-control-sm" name="RezerveTime">
                                 </div>
                                 <div class="form-group">
                                   <button type="submit"   name="submit" class="btn btn-primary">ثبت</button>
                                 </div>
                                
                             </form>
                                  </div>
                              </div>

                          </div>
                     </div>
                     <div>
                     <?php
                            include 'db.php';
                            if (isset($_POST['submit'])){
                                
                                if(!empty($_POST['RezerveDate']) && !empty($_POST['RezerveTime']) && !empty($_POST['Hairdresser'])){

                                    $RezerveDate=$_POST['RezerveDate'];
                                    $RezerveTime=$_POST['RezerveTime'];
                                    $Hairdresser=$_POST['Hairdresser'];
                                   

                                    $query="insert into tbl_rezerveinfo (Reserveinfo_id,ReserveDate,ReserveTime,Hairdresser_id,rezerved) values('','$RezerveDate','$RezerveTime','$Hairdresser',0)" ;
                                    $run = mysqli_query($conn,$query) or die (mysqli_error($conn));

                                    if($run){
                                        echo "با موفقیت ثبت شد";
                                    }
                                    else{
                                        echo "ثبت نشد";
                                    }

                                }
                                else{
                                    echo  "تمام فیلدها باید پر شود";
                                }
                            }

                         


                       ?>
                     </div>
                </div>

                <div class="card-footer text-center">
                <span>آدرس: اصفهان-سه راه حکیم نظامی-ابتدای خیابان حکیم نظامی-نرسیده ه خیابان قزلباش-آرایشگاه ذات زیبا</span>
                </div>

             </div>
          </div>
  </div>
</body>
</html>