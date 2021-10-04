<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتیجه جستجو</title>
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
                              <div class="card">
                                  <div class="card-header p-2">
                                      <h5>ورود به سیستم</h4>
                                  </div>
                                  <div class="card-body">
                                  <form action="check.php" method="POST">
                               <div class="form-group">
                                   <label for="">نام کاربری</label>
                                    <input type="text" class="form-control form-control-sm" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="">کلمه عبور</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit"  name="login" value="login" class="btn btn-sm btn-primary btn-block"> ورود</button>
                                </div>
                                <div>
                                <?php
                                   if (isset($_SESSION['msg'])){
                                    echo '<span style="color:red; font-size:12px">'.$_SESSION['msg'].' </span>'; 
                                    }
                                    $_SESSION['msg']='';
                                ?>
                                </div>
                            </form>
                                  </div>
                              </div>
                            
                          </div>
                        
                          <div class="col-md-10" style="min-height:350px !important;">
                             <div>
                                 <div style="display:inline-block">
                                    <form action="search.php" method="POST">
                                        <label for="">جستجو</label>
                                        <input type="text" name="search" placeholder="نام آرایشگر/خدمات">
                                        <button type="submit" name="submit">جستجو</button>
                                    </form>
                                </div>

                                <div style="display:inline-block; float:left;">
                               <a href="index.php">صفحه اصلی</a>
                               </div>
                             </div>
                             <table class="table table-striped">
                                
                                <thead>
                                <tr>
                                     <th>ردیف</th>
                                     <th>تاریخ</th>
                                     <th>زمان</th>
                                     <th>آرایشگر</th>
                                     <th>خدمات</th>
                                     <th>دستمزد</th>
                                     <th>وضعیت </th>
                                     <th> </th>
                                    </tr>

                                </thead>
                                <tbody>
<?php
        include 'db.php';
         if (isset($_POST['submit'])){
         $srch = $_POST['search'];
         $sql = "SELECT * FROM tbl_rezerveinfo,hairdresser,proficiency WHERE tbl_rezerveinfo.Hairdresser_id=hairdresser.Hairdresser_id and hairdresser.proficiency_id=proficiency.proficiency_id and (HairdresserFullName LIKE '%{$srch}%' OR proficiencyTitle LIKE '%{$srch}%')";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if($row["rezerved"]==0){
                    $chk="آزاد";
                    $rzrv="رزرو";
                }
                
                else{
                    $chk="رزرو شده";
                    $rzrv="";

                } 
                
                echo "<tr><td>" . $row["Reserveinfo_id"]. "</td>
                <td>" . $row["ReserveDate"]. "</td>
                <td>" . $row["ReserveTime"]. "</td>
                <td>" . $row["HairdresserFullName"]. "</td>
                <td>" . $row["proficiencyTitle"]. "</td>
                <td>" . $row["Cost"]. "</td>
                <td>$chk</td>
                <td><a href='rezervetion.php?x=" . $row["Reserveinfo_id"]. "'>$rzrv</a></td></tr>";
            }
            } else {
            echo "هیج رزروی ثبت نشده است";
            }

            mysqli_close($conn);
        }
    ?>

</tbody>

</table>
</div>
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