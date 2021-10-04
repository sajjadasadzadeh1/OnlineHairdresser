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
    <title>لیست رزروها</title>
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
                 <div class="card-body" >
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
                          <div class="col-md-10" style='min-height:350px'>
                               <table class="table table-striped" >
                                
                                <thead>
                                <tr>
                                     <th>ردیف</th>
                                     <th>تاریخ</th>
                                     <th>زمان</th>
                                     <th>آرایشگر</th>
                                     <th>خدمات</th>
                                     <th>دستمزد</th>
                                     <th>نام ونام خانوادگی مشتری</th>
                                     <th>شماره تماس مشتری</th>
                                     <th>وضعیت </th>
                                     <th> عملیات</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    include 'db.php';

                                    $sql = "SELECT * FROM tbl_rezerveinfo,hairdresser,proficiency where tbl_rezerveinfo.Hairdresser_id=hairdresser.Hairdresser_id and hairdresser.proficiency_id=proficiency.proficiency_id";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if($row["rezerved"]==0){
                                            $chk="آزاد";
                                        }
                                        
                                        else{
                                            $chk="رزرو شده";

                                        } 
                                        

                                        echo "<tr><td>$i</td>
                                        <td>" . $row["ReserveDate"]. "</td>
                                        <td>" . $row["ReserveTime"]. "</td>
                                        <td>" . $row["HairdresserFullName"]. "</td>
                                        <td>" . $row["proficiencyTitle"]. "</td>
                                        <td>" . $row["Cost"]. "</td>
                                        <td>" . $row["CustomerFullName"]. "</td>
                                        <td>" . $row["CustomerMobile"]. "</td>
                                        <td>$chk</td>
                                        <td>
                                        <a href='update.php?id=" . $row["Reserveinfo_id"]. "&& date=" . $row["ReserveDate"]. "&& time=" . $row["ReserveTime"]. "&& hair=" . $row["Hairdresser_id"]. "&& rezerve=" . $row["rezerved"]. "'>ویرایش</a>
                                        <a href='delete.php?id=" . $row["Reserveinfo_id"]. "'>حذف</a>
                                        </td>
                                        </tr>";
                                        $i++;
                                    }
                                    } else {
                                    echo "هیج رزروی ثبت نشده است";
                                    }

                                    mysqli_close($conn);
                                    
                                    ?>
                                 </tbody>

                                </table>
                                </div>
                           <div>
                     
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