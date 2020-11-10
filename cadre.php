<?php
session_start();
$user_type = $_SESSION["user_type"];
if ($user_type == NULL) {
    header("Location: login.php");;
}

require "includes/dbconfig.php";

?>

<!doctype html>

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
        <div class='card-body' align=center>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">系所成員</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="member.php">教授<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadre.php">系學會幹部</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                各年級
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">級任導師</a>
                                <a class="dropdown-item" href="#">班級幹部</a>
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

            <?php
            echo "<div class='row'>";

            $sql = "SELECT * FROM cadre";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) { //檢查記錄的數量，看看是否有資料
                while ($row = $result->fetch_assoc()) {
                    $description = $row["description"];
                    $name = $row["name"];
                    $photo = $row["photo"];
                    echo "<div class='col-md-4 col-sm-6 col-xs-12'>";
                    echo "<div class='card' style='width: 20rem;height:35rem;'>";
                    echo "<img style='overflow:auto;' src='$photo' width='40' height='320' class='card-img-top'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$name</h5>";
                    echo "<p style='overflow:auto;' class='card-text'>$description</p>";
                    echo "<a href='#' class='btn btn-secondary'>加入購物車</a>";
                    echo "</div></div><hr></div>";
                }
            } else {
                echo "0 results"; // 如果資料表中沒有記錄，要顯示的內容
            }
            echo "</div>";
            ?>
            <p style="text-align:left;"><?php include "footer.php"; ?></p>
        </div>
        <div class='card-footer' align=center>
            <em>Contact: nkustmeso@nkust.edu.tw</em>
        </div>
    </div>

    <hr>
    <em>Copyright 2016 <a href='http://nkust-meso.com'>http://mkust-meso.com</a>. All rights reserved.</em>
</body>

</html>