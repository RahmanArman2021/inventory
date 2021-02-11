<?php
$conn = mysqli_connect("localhost","root","","inventory");
if (!$conn) {
  echo "connection not connected";
}
  include("include/header.php");
  if (!empty($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT item_id,item_name,item_price,item_date,firstname from item, employee where item.emp_id=employee.emp_id AND CONCAT(item_name,item_price,item_date,firstname) LIKE'%$search%'";

    mysqli_set_charset($conn,"utf8");
    $result= mysqli_query($conn,$sql);

  }else{

    $sql = "SELECT item_id , item_name,item_price,item_date, firstname from item, employee WHERE item.emp_id = employee.emp_id";
    mysqli_set_charset($conn,"utf8");
    $result = mysqli_query($conn,$sql);

  }

 ?>

    </br>
      <div class="row">
          <div class="col-md-4" id="menu">
            <ul class="nav nav-pills">
              <li role="presentation"  class="active"><a href="newItem.php">جنس جدید</a></li>
              <li role="presentation"  ><a href="newEmployee.php">کارمند جدید</a></li>
              <li role="presentation"  ><a href="list_emp.php">لیست کارمندان</a></li>

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
            <h2 class="header2">لیست اجناس</h2>
          </div>
        </div>
        <div class="row">
        <br/>
            <div class="col-md-12" id="content">
              <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>نام جنس</th>
                        <th>قیمت</th>
                        <th>تاریخ</th>
                        <th>کارمندان</th>
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
                                echo "<td><a href='edit_item.php?id=".$row[0]."'>اصلاح</a></td>";




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
