<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type == NULL) {
  header("Location: login.php");;
}

require "includes/dbconfig.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NKUSTMESO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    p,
    div {
      font-family: 微軟正黑體;
    }
  </style>
</head>

<body>
  <?php require "includes/menu.php"; ?>

  <br>

  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='card card-primary'>
          <div class='card-header' align=center>
            <h3>系所佈告欄</h3>
          </div>
          <div class='card-body' align=center>
            <table class='table table-striped table-hover'>

              <?php
              $sql = "SELECT * FROM post order by id desc";
              $result = $conn->query($sql);
              ?>

              <thead class='thead-dark'>
                <tr>
                  <th>內容</th>
                  <th>發佈日期</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <img src="./imags/announcement.png" width="35" height="22">
                    <a href="https://ceed.nkust.edu.tw/p/406-1014-37399,r11.php">109學年度第1學期校務系統學生個人課表資訊開放查詢</a>
                  </td>
                  <td>
                    2020-11-07
                  </td>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    echo "<td>" . "<a href=" . $row["link"] . ">" . $row["message"] . "</a>" . "</td>" . "<td>" . $row["postdate"] . "</td>";

                    echo "</tr>";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                ?>
              </tbody>
            </table>
            <p style="text-align:left;"><?php require "footer.php"; ?></p>
          </div>
          <div class='card-footer' align=center>
            <em>Contact: nkustmeso@nkust.edu.tw</em>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <em>Copyright 2016 <a href='http://nkust-meso.com'>http://mkust-meso.com</a>. All rights reserved.</em>

  </div>

</body>

</html>