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
    <li class="nav-item ">
      <a class="nav-link" href="contact_us.php">تماس با ما</a>
    </li>
    <li class="nav-item active">
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
                          <div class="col-md-10" style="min-height:350px !important;">
                          <h4>نظرات</h4>
                         
                          <table class="table table-striped">
                                
                                <thead>
                                <tr>
                                     <th>ردیف</th>
                                     <th>نام و نام خانوادگی</th>
                                     <th>ایمیل</th>
                                     <th>عنوان</th>
                                     <th>متن</th>
                                </tr>

                                </thead>
                                <tbody>
                                    <?php
                                   include 'db.php';

                                    $sql = "SELECT * FROM tbl_comment where status=1";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)) {
 
                                        echo "<tr><td>$i</td>
                                        <td>" . $row["flname"]. "</td>
                                        <td>" . $row["email"]. "</td>
                                        <td>" . $row["CommentTitle"]. "</td>
                                        <td>" . $row["CommentDescription"]. "</td></tr>";
                                        $i++;
                                    }
                                    } else {
                                    echo "هیج نظری ثبت نشده است";
                                    }

                                    mysqli_close($conn);
                                    
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


