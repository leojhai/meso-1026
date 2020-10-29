<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type == NULL) {
  header("Location: login.php");;
}
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
              <thead class='thead-dark'>
                <tr>
                  <th>內容</th>
                  <th>發佈日期</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="https://sites.google.com/mail.fcu.edu.tw/2021coding101/">給非資電同學的程式設計創意比賽來囉~~</a>
                  </td>
                  <td>
                    2020年10月14日 14:17
                  </td>
                </tr>

                <tr>
                  <td>
                    <a href="https://aifinpitchtw.com/competition#/index">2020AI金融科技創新創意競賽，報名啦，還等什麼？！</a>
                  </td>
                  <td>
                    2020年10月14日 14:17
                  </td>
                </tr>

                <tr>
                  <td>
                    <a href="http://cgeonline.nkust.edu.tw">高科每日SEE，歡迎各位同學有空也去逛逛喔</a>
                  </td>
                  <td>
                    2020年10月3日 00:07
                  </td>
                </tr>

                <tr>
                  <td>
                    <a href="/tvshow/1/">選修「商務網站設計」的同學，別忘了要前往預習「WordPress數位課程」</a>
                  </td>
                  <td>
                    2020年10月3日 00:06
                  </td>
                </tr>

                <tr>
                  <td>
                    <a href="/tvlist">新增了許多的教材影片，歡迎同學們前往左上角的「教學影片」選單收看</a>
                  </td>
                  <td>
                    2020年10月2日 23:58
                  </td>
                </tr>
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