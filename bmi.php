<!doctype html>
<html lang="tw">

<head>
    <title>bmi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        body {
            padding: 0;
            margin: 0;
            background-image: url("img/ok.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }

        .welcome {
            background-image: linear-gradient(90deg, rgba(94, 114, 235, 1) 0%, rgba(255, 145, 144, 1) 56%, rgba(254, 193, 149, 1) 100%);
            color: transparent;
            -webkit-background-clip: text;
            animation: move 1s infinite;
            /* height: 100vh;
            width: 100vw; */
            /* display: flex;
            justify-content: center;
            align-items: top; */
            font-family: 'Pacifico', cursive;
            /* font-size: 20vmin; */
            /* background: #EDDDD4; */
        }
        @keyframes move {
            50%{
                background-image: linear-gradient(262deg, rgba(94, 114, 235, 1) 0%, rgba(255, 145, 144, 1) 56%, rgba(254, 193, 149, 1) 100%); 
            }
        }

        .bmi {
            background-color: #F0F0F0;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 2px 2px 2px 2px rgb(129, 129, 129);
            width: 70%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="d-flex d-flex justify-content-center align-items-center p-3">
        <h1 class="welcome"><b>來量一下你的 BMI 吧</b></h1>
    </div>
    <div
        class="container d-flex justify-content-center align-items-center vh-100 vw-50 col-12 col-sm-3 col-md-3 col-lg-4">
        <form class="bmi" action="show.php" method="post">
            <label for="" class="form-label">您的身高</label>
            <input type="text" class="form-control" name="height" id="height" placeholder="您的身高">
            <label for="" class="form-label">您的體重</label>
            <input type="text" class="form-control" name="weight" id="weight" placeholder="您的體重">

            <div class="button-group  d-flex justify-content-between p-2">
                <button type="submit" class="btn btn-primary">確認</button>
                <button type="reset" class="btn btn-danger">重設</button>
            </div>
        </form>
    </div>
    </div>

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>