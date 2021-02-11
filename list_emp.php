<?php
$conn = mysqli_connect("localhost","root","","inventory");
if (!$conn) {
  echo "connection not connected";
}
  include("include/header.php");
  if (!empty($_POST['search'])) {
    $search = $_POST['search'];
    $sql ="SELECT *FROM employee where CONCAT(emp_id,firstname,lastname,fathername,emp_job) LIKE '%$search%'";

    mysqli_set_charset($conn,"utf8");
    $result= mysqli_query($conn,$sql);

  }else{

    $sql = "SELECT *FROM employee";
    mysqli_set_charset($conn,"utf8");
    $result = mysqli_query($conn,$sql);

  }

 ?>

    </br>
      <div class="row">
          <div class="col-md-4" id="menu">
            <ul class="nav nav-pills">
              <li role="presentation"  class="active"><a href="#">جنس جدید</a></li>
              <li role="presentation"  ><a href="newEmployee.php">کارمند جدید</a></li>
              <li role="presentation"  ><a href="index.php">لیست اجناس</a></li>

            </ul>
          </div>

          <div class="col-md-6" id="fsearch">
            <form class="form-inline" action="" method="post">
              <div class="form-group">
                <input type="text" class = "form-control" name="search" placeholder="جستجو">
                <button type="submit" class="btn btn-success">جستجو</button>

              </div>
            </form>
          </div>
          <div class="col-md-2">
            <h2 class="header2">لیست کارمندان</h2>
          </div>
        </div>
        <div class="row">
        <br/>
            <div class="col-md-12" id="content">
              <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>نام کارمند</th>
                        <th>تخلص</th>
                        <th>نام پدر</th>
                        <th>وظیفه</th>
                        <th>عملیات</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php

                          if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_row($result)) {
                              echo "<tr>";
                                echo "<td>".$row[1]."</td>";
                                echo "<td>".$row[2]."</td>";
                                echo "<td>".$row[3]."</td>";
                                echo "<td>".$row[4]."</td>";
                                echo "<td><a href='edit_emp.php?id=".$row[0]."'>اصلاح</a></td>";




                              echo "</tr>";
                            }
                          }


                       ?>

                    </tbody>
              </table>

            </div>
          </div>
      </div>

    </div>
  </div>

  </body>
</html>
