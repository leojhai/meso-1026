<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type == NULL) {
  header("Location: login.php");;
}
?>

<!DOCTYPE html>

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

    * {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .big {
      width: 318px;
      height: 318px;
      margin: 50px auto;
    }

    .big>div {
      width: 100px;
      height: 100px;
      background: #95CACA;
      float: left;
      line-height: 100px;
      text-align: center;
      border: solid;
    }

    .big>div:nth-of-type(5) {
      background: #408080;
      cursor: pointer;
    }

    #act {
      background: #A5A552;
    }
  </style>
  
</head>

<body>
  <?php require "includes/menu.php"; ?>

  <!-- <script>
    $(function(){
      var $li = $('ul.tab-title li');
      $($li. eq(0) .addclass('active').find('a').attr('href')).siblings('.tab-inner').hide();

      $li.click(function(){
        $($(this).find('a').attr('href')).show().siblings ('.tab-inner').hide();
        $(this).addclass('active').siblings ('.active').removeclass('active');
      });
    });
  </script> -->

  <br>
  <div class='container'>
    <div class='card-body' align=center>
      <div class='card card-primary'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">互動式遊戲</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./poker/poker.php">大小比一比<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="game.php">M幣轉一下</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  M幣商店
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">M幣交易</a>
                  <a class="dropdown-item" href="#">M幣兌換</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
            
            <form class="form-inline my-2 my-lg-0" method=POST action='search.php'>
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
        <!-- 遊戲程式區 -->
        <div class="big">
          <div class="small" id="act" tag="0.01">M幣0.01</div>
          <div class="small" tag="0.01">M幣0.01</div>
          <div class="small" tag="0.1">M幣0.1</div>
          <div class="small" tag="0.01">M幣0.01</div>
          <div id="cj">抽獎</div>
          <div class="small" tag="0.1">M幣0.1</div>
          <div class="small" tag="0.01">M幣0.01</div>
          <div class="small" tag="1">M幣1</div>
          <div class="small" tag="0.3">M幣0.3</div>
        </div>
        <script>
          var arrDiv = document.getElementsByClassName("small");
          var oCj = document.getElementById("cj");
          var num = 0;
          var shijian = Math.random() * 5000 + 3200;
          oCj.onclick = function() { //觸發
            oTime = setInterval(dianji, 50); //每 50  毫秒執行一次 dianji(跳格子)
          }

          function dianji() { //跳格子funtion
            num = num + 1;
            if (num > arrDiv.length - 1) {
              num = 0
            }
            for (j = 0; j < arrDiv.length; j++) {
              arrDiv[j].id = "";
            }
            arrDiv[num].id = "act";
            setTimeout(tingzhi, shijian);

            function tingzhi() {
              clearInterval(oTime)
            }
          }
        </script>
        <div class='card-footer' align=center>
          <em>Contact: nkustmeso@nkust.edu.tw</em>
        </div>


      </div>

    </div>
  </div>
</body>

</html>