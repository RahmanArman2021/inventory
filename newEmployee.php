<?php
  include("include/header.php");
  if (isset($_POST["subbtn"])) {
    $firstname = $_POST["name"];
    $lastname = $_POST["lastname"];
    $fathername = $_POST["fathername"];
    $job = $_POST["job"];
    $conn = mysqli_connect("localhost","root","","inventory");
    $sql ="INSERT INTO employee (firstname,lastname,fathername,emp_job) VALUES('$firstname','$lastname','$fathername','$job')";
    if(mysqli_query($conn,$sql)){
      echo "یک سطر موفقانه درج گردید";
    }else {
      echo "سطر جدید درج نگردید مشکل رخ داده است";
    }
    

  }

 ?>
  <body>
  <div class="container-fluid">
    <div class="row1">
      <div class="row">

<br>
    <div class="col-md-4">
      <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="list_emp.php">برگشت</a>
        </li>

      </ul>

    </div>
  </div>
    <div class="col-md-8 col-md-offset-2" dir="rtl">
      <h2>اضافه کردن کارمندان جدید</h2>
    <br/>

        <form class="form-horizontal" method="post">
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id ="name" placeholder="نام را وارد کنید" >

              </div>
              <label for="name" class="col-sm-2 control-label">نام کارمند</label>
          </div>

          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="lastname" class="form-control" id ="lastname" placeholder="تخلص را وارد کنید">

              </div>
              <label for="lastname" class="col-sm-2 control-label">تخلص کارمند</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="fathername" class="form-control" id ="fathername" placeholder="نام پدر را وارد کنید" >

              </div>
              <label for="fathername" class="col-sm-2 control-label">نام پدر کارمند</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="job" class="form-control" id ="name" placeholder="وظیفه را وارد کنید" >

              </div>
              <label for="job" class="col-sm-2 control-label">وظیفه</label>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <button type="submit" name="subbtn" class="btn btn-success btn-block">اضافه کردن</button>

            </div>
            <div class="col-md-10">

            </div>


          </div>


        </form>

    </div>
  </div>

  </body>
</html>
