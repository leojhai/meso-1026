<!doctype html>
<html lang="zh-TW">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- 引用自已定義的CSS -->
    <link rel="stylesheet" href="./css/template.css">
    <link rel="stylesheet" href="./css/poker.css">
    <title>撲克牌</title>
</head>

<body>

    <div class="container">

        <!-- 標題 -->
        <div class="row">
            <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">撲克牌比大小</h1>
                </div>
            </div>
        </div>

        <!-- 表單 -->
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button id="main" type="button" class="btn btn-primary">發牌</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- 產生 撲克牌 的區塊-->
        <div class="row" id="data">
        </div>

        <div class="row">
            <div class="col">
                <footer>

                </footer>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script> <!-- 引用自己寫的 js -->
    <script src="./js/math.js"></script>
    <script src="./js/poker.js"></script>
</body>

</html>