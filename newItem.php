<?php
  include("include/header.php");
  $conn = mysqli_connect("localhost","root","","inventory");
  mysqli_set_charset($conn,"utf8");
  $sql = "SELECT emp_id,firstname from employee";
  $result = mysqli_query($conn,$sql);
  if (isset($_GET["nameitem"])) {
    $nameitem = $_GET["nameitem"];
      $cost = $_GET["cost"];
      $idate =$_GET["idate"];
      $employee = $_GET["employee"];
      $sqlquery ="INSERT INTO item VALUES (NULL,'$nameitem',$cost,$idate,$employee)";

      $res = mysqli_query($conn,$sqlquery);
      if ($res) {
        echo "یک سطر موفقانه اضافه گردید";

      }else {
        echo "مشکل رخ داده است سطر اضافه نگردیده است";

      }

  }
 ?>
  <body>
  <div class="container-fluid">
      <br>
    <div class="col-md-4">

      <ul class="nav nav-pills">

        <li role="presentation" class="active"><a href="index.php">برگشت</a>
      </ul>
    </div>
    <div class="col-md-8 col-md-offset-2" dir="rtl">
      <h2>اضافه کردن اجناس جدید</h2>
    <br/>
    <br>
        <form class="form-horizontal" action="" method="get">
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="nameitem" class="form-control" id ="nameitem" placeholder="نام جنس را وارد کنید" >

              </div>
              <label for="nameitem" class="col-sm-2 control-label">نام جنس</label>
          </div>

          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="cost" class="form-control" id ="cost" placeholder="قیمت جنس را وارد کنید">

              </div>
              <label for="cost" class="col-sm-2 control-label">قیمت جنس</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <input type="text" name="idate" class="form-control" id ="idate" placeholder="تاریخ خرید را وارد کنید" >

              </div>
              <label for="idate" class="col-sm-2 control-label">تاریخ خرید</label>
          </div>
          <div class="form-group">

              <div class="col-sm-10">
                <select name="employee" id="employee" class="form-control">
                    <?php
                    if (isset($result)) {
                      while ($row = mysqli_fetch_row($result)) {
                        echo "<option value='".$row[0]."'>".$row[1]."</option>";
                      }
                    }



                     ?>
                </select>

              </div>
              <label for="employeeName" class="col-sm-2 control-label">کارمند</label>
          </div>
          <div class="form-group">
            <div class="col-md-2">
              <button type="submit" class="btn btn-success btn-block">اضافه کردن</button>

            </div>
            <div class="col-md-10">

            </div>


          </div>


        </form>

    </div>
  </div>

  </body>
</html>
