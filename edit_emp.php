<?php
  include("include/header.php");
  $conn = mysqli_connect("localhost","root","","inventory");
  mysqli_set_charset($conn,"utf8");
  if (isset($_POST["subbtn"])) {
    $id = $_GET["id"];
    $firstname = $_POST["name"];
    $lastname = $_POST["lastname"];
    $fathername=$_POST["fathername"];
    $job = $_POST["job"];
    $sqll = "UPDATE employee SET firstname='$firstname', lastname='$lastname',fathername='$fathername',emp_job='$job' WHERE emp_id=$id";
    $result = mysqli_query($conn,$sqll);
    
          if ($result) {
            echo "موفقانه اطلاعات راجع به کارمند ویرایش شد";
          }else {
            echo "اطلاعات ویرایش نشد مشکل رخ داده است";
          }


  }else{
    $id = $_GET["id"];
    $sql = "SELECT *FROM employee WHERE emp_id='$id'";
    $result = mysqli_query($conn,$sql);
    $row= mysqli_fetch_row($result);

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
      <h2>ویرایش کارمندان</h2>
    <br/>

        <form class="form-horizontal" method="post">
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" value = "<?php if (!empty($row[1])) {
                  echo $row[1];
                } ?>" name="name" class="form-control" id ="name" placeholder="نام را وارد کنید" >

              </div>
              <label for="name" class="col-sm-2 control-label">نام کارمند</label>
          </div>

          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" value = "<?php if (!empty($row[2])) {
                  echo $row[2];
                } ?>" name="lastname" class="form-control" id ="lastname" placeholder="تخلص را وارد کنید">

              </div>
              <label for="lastname" class="col-sm-2 control-label">تخلص کارمند</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" value = "<?php if (!empty($row[3])) {
                  echo $row[3];
                } ?>" name="fathername" class="form-control" id ="fathername" placeholder="نام پدر را وارد کنید" >

              </div>
              <label for="fathername" class="col-sm-2 control-label">نام پدر کارمند</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" value = "<?php if (!empty($row[4])) {
                  echo $row[4];
                } ?>" name="job" class="form-control" id ="name" placeholder="وظیفه را وارد کنید" >

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
