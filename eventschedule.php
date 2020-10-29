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
            <h3>活動行事曆</h3>
          </div>
          <div class='card-body' align=center>
            <iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FTaipei&amp;src=bmt1c3RtZXNvQGdtYWlsLmNvbQ&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=emgudGFpd2FuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showTabs=1&amp;showTz=1" style="border:solid 1px #777" width="1070" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
          <div class='card-footer' align=center>
            <em>Contact: nkustmeso@nkust.edu.tw</em>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>
  <em>Copyright 2016 <a href='http://nkust-meso.com'>http://mkust-meso.com</a>. All rights reserved.</em>
</body>

</html>