<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رزرو وقت</title>
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
                 <div class="card-header hero" >
                 <h1>آرایشگاه ذات زیبا</h1>
                 </div>
                 <div class="card-body" style='min-height:380px'>
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

                          <div class="col-md-3">
                          <p> لطفا تصویر فیش پرداختی را حداکثر  تا 2 ساعت آینده با واتساپ ارسال کنید </p>
                            <p>قبل از رزرو دقت لازم جهت انتخاب تاریخ را مبذول فرمایید. حذف رزو صرفا از طریق ادمین با تماس واتس آپ(شماره واتس آپ) در صورت امکان انجام میشود.</p>

                          </div>
                        
                          <div class="col-md-3" style="min-height:350px !important;">

                          <div class="card ">
                                  <div class="card-header">
                                      <h6>رزرو وقت</h6>
                                  </div>
                                  <div class="card-body">
                                  <form action="" method="post">
                                    
                                 <div class="form-group">
                                     <label for="">نام و نام خانوادگی</label>
                                     <input type="text" class="form-control form-control-sm" name="CustomerFullName">
                                 </div>
                                 <div class="form-group">
                                 <label for="">شماره تماس </label>
                                     <input type="text" class="form-control form-control-sm"  name="CustomerMobile">
                                 </div>
                                 <div class="form-group">
                                   <button type="submit"   name="submit" class="btn btn-primary">ثبت</button>
                                 </div>
                                
                             </form>
                                  </div>
                              </div>
                              <div>
                                <?php
                                      include 'db.php';

                                          $id=$_GET['x'];
                                          if (isset($_POST['submit'])){
                                          $CustomerFullName=$_POST['CustomerFullName'];
                                          $CustomerMobile=$_POST['CustomerMobile'];


                                      $sql = "UPDATE tbl_rezerveinfo SET rezerved=1,CustomerFullName='$CustomerFullName',CustomerMobile='$CustomerMobile'  WHERE Reserveinfo_id=$id";

                                      if (mysqli_query($conn, $sql)) {
                                          //  header("Location:index.php");
                                          echo "<p class='text-success'>با موفقیت رزرو شد<p><p class='text-muted'>لطفا تصویر فیش پرداختی را حداکثر  تا 2 ساعت آینده با واتساپ ارسال کنید. در غیر اینصورت رزرو شما لغو خواهد شد.</p><div class='text-center'><a href='index.php'>بارگشت به صفحه اصلی</a></div> " ;
                                      } else {
                                            echo "خطا در مرحله رزرو: " . mysqli_error($conn);
                                      }

                                      mysqli_close($conn);
                                  }                           
                                  ?>
                                  </div>

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

