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
    <li class="nav-item">
      <a class="nav-link" href="about_me.php">درباره ما</a>
    </li>
    <li class="nav-item active">
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
                                  <div class="card-body"  >
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
                          <div class="col-md-10 text-center" style="min-height:350px !important;">
                          <h4>تماس با ما</h4>
                          <hr>
                          <div>
                              <p>آدرس: اصفهان- سه راه حکیم نظامی- ابتدای خیابان حکیم نظامی- نرسیده به خیابان قزلباش، آرایشگاه ذات زیبا </p>
                              <p>تلفن: 03155555555</p>
                              <p>تلگرام: zateziba</p>
                              <p>اینستاگرام: zateziba</p>
                          </div>
                          <div  class="w-50" >
                          <form action="" method="post">
                                 <div class="form-group">
                                 <label for="">نام و نام خانوادگی </label>
                                     <input type="text" class="form-control form-control-sm"  name="flname">
                                 </div>
                                 <div class="form-group">
                                 <label for=""> ایمیل </label>
                                     <input type="text" class="form-control form-control-sm"  name="email">
                                 </div>
                                 <div class="form-group">
                                     <label for="">عنوان </label>
                                     <input type="text" class="form-control form-control-sm" name="CommentTitle">
                                 </div>
                                 <div class="form-group">
                                     <label for="">انتقاد/پیشنهاد </label>
                                     <textarea  id='CommentDescription'  name="CommentDescription"></textarea>
                                 </div>
                                 <div class="form-group">
                                   <button type="submit"   name="submit" class="btn btn-primary">ثبت</button>
                                 </div>
                             </form>
                             <div>
                              <?php
                                      include 'db.php';
                                      if (isset($_POST['submit'])){
                                          
                                          if(!empty($_POST['flname']) && !empty($_POST['email']) && !empty($_POST['CommentTitle']) && !empty($_POST['CommentDescription'])){

                                              $flname=$_POST['flname'];
                                              $email=$_POST['email'];
                                              $CommentTitle=$_POST['CommentTitle'];
                                              $CommentDescription=$_POST['CommentDescription'];

                                              $query="insert into tbl_comment (comment_id,flname,email,CommentTitle,CommentDescription,status) values('','$flname','$email','$CommentTitle','$CommentDescription',0)" ;
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
<script src="jquery-3.3.1.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/config.js"></script>
    <script src="ckeditor/adapters/jquery.js"></script>
    <script>
        $(function () {
            $('#CommentDescription').ckeditor();
        });


    </script>
</html>


