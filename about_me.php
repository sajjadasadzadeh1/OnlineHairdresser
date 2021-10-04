<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آرایشگاه آنلاین</title>
    <link rel="stylesheet" href="bootstrap.css" > 
    <link rel="stylesheet" href="Style.css" > 
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="index.php">صفحه اصلی</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Services.html">خدمات ما</a>
    </li>
    <li class="nav-item active">
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
                                  <div class="card-body"  style="min-height:320px !important;">
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
                          <h4>درباره ما</h4>
                          <hr>
                          <div>
                              <p>آرایشگاه ذات زیبا با کادری مجرب و اخلاق مدار و با تجربه ای بالغ بر پانزده سال خوش نامی در خدمت شما زیبارویان می باشد.</p>
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


