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
    <title>ویرایش خدمات</title>
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
                 <div class="card-body"  style="min-height:auto !important;">
                     
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
                                      <h6>بروزرسانی خدمات</h6>
                                  </div>
                                  <div class="card-body">
                            <form action="" method="post">
                                 <div class="form-group">
                                     <label for="">عنوان خدمات</label>
                                     <input type="text" class="form-control form-control-sm" name="proficiencyTitle" value="<?php echo $_GET['profttl']?>">
                                 </div>
                                 <div class="form-group">
                                 <label for=""> خدمات</label>
                                 <input type="text" class="form-control form-control-sm" name="Cost" value="<?php echo $_GET['cost']?>">
                                </div>
                                <div class="form-group">
                                   <button type="submit"   name="submit" class="btn btn-primary">بروزرسانی</button>
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
                                $proficiencyTitle=$_POST['proficiencyTitle'];
                                $Cost=$_POST['Cost'];
                                $id=$_GET["id"];
                                $sql = "UPDATE proficiency SET proficiencyTitle='$proficiencyTitle', Cost='$Cost' WHERE proficiency_id='$id'";

                                if (mysqli_query($conn, $sql)) {
                                     header("Location:proficiencyList.php");
                                } else {
                                      echo "خطا در مرحله بروزرسانی: " . mysqli_error($conn);
                                }
                            
                                mysqli_close($conn);
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
