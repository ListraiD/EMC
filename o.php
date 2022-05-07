<?php
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM company WHERE id='{$_SESSION['id']}'");
$stroka = $query->fetch_assoc();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo&family=Manrope:wght@700&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo&family=Manrope:wght@500&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />


    <title>личный кабинет</title>
    <style>
        .vh {
            height: 100vh;
        }

        .bg-color1 {
            background: #10B981;
        }

        .bg-color3 {
            background: #7DD3FC;

        }

        h1 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 600;
            font-size: 28px;
            line-height: 37px;

            color: #FFFFFF;

        }

        h2 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 53px;

            /* черный */

            color: #1B1B1B;

        }

        h3 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 48px;

            /* черный */

            color: #1B1B1B;

        }

        a {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 33px;

            color: #FFFFFF;

        }

        .txt-black {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 33px;

            /* черный */

            color: #1B1B1B;
        }

        .btn-con:hover {
            background: rgba(255, 255, 255, 0.2);

        }

        .text-blue {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 33px;
            text-decoration-line: underline;

            /* Blue */

            color: #72C3DD;
        }

        .ready {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #70C9A3;
            border-radius: 15px;
        }

        input {

            /* Neutral/300 */
            box-sizing: border-box;
            /* Input/Default */

            box-shadow: 0px 2px 6px rgba(19, 18, 66, 0.07);
            height: 80px !important;
            font-weight: 400 !important;
            font-size: 18px !important;
            line-height: 20px !important;
            color: #6F6C90 !important;
            background: #FFFFFF;
            border: 1px solid #EFF0F7;
            /* Input/Default */
            border-radius: 15px !important;
        }
    </style>
</head>

<body>
    <div class="col">
        <div class="row pr-0 pl-0">
            <div class="col-3 vh bg-color1 pt-5 pb-5 pr-4 pl-4">
                <div class="row ">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center">
                                    <img src="<?php echo $stroka['img']?>" alt="">
                                </p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">

                                <h1 class="text-center">
                                    <?php echo $stroka['name']?>

                                </h1>
                                <p class="text-center">
                                    <a href="<?php echo $stroka['mail']?>">
                                        <?php echo $stroka['mail']?>

                                    </a>
                                </p>

                            </div>
                        </div>
                        <form action="lkk.php">
                            <div class="row mt-5 uk-animation-toggle btn-con">
                                <div class="col-12 uk-animation-fade uk-transform-origin-top-center">
                                    <div class="row">
                                        <div class="col-10 mx-auto ">
                                            <div class="row ">
                                                <p class="text-center">
                                                    <img src="img/User.svg" alt="">
                                                </p>
                                                <a hreaf="lkk.php" class="">
                                                    Профиль
                                                    <button class="col-12"
                                                        style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <form action="public2.php">
                            <div class="row mt-5 uk-animation-toggle btn-con">
                                <div class="col-12 uk-animation-fade uk-transform-origin-top-center">
                                    <div class="row">
                                        <div class="col-10 mx-auto ">
                                            <div class="row ">
                                                <p class="text-center">
                                                    <img src="img/Box.svg" alt="">
                                                </p>

                                                <a class="" hreaf="">
                                                    Ваши новости
                                                    <button class="col-12"
                                                        style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <form action="public.php">
                            <div class="row mt-5 uk-animation-toggle btn-con">
                                <div class="col-12 uk-animation-fade uk-transform-origin-top-center">
                                    <div class="row">
                                        <div class="col-10 mx-auto ">
                                            <div class="row ">
                                                <p class="text-center">
                                                    <img src="img/Copy.svg" alt="">
                                                </p>

                                                <a hreaf="lkk.php" class="">
                                                    Ваши объявления
                                                    <button class="col-12"
                                                        style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <form action="statk.php">
                            <div class="row mt-5 uk-animation-toggle btn-con">
                                <div class="col-12 uk-animation-fade uk-transform-origin-top-center">
                                    <div class="row">
                                        <div class="col-10 mx-auto ">
                                            <div class="row ">
                                                <p class="text-center">
                                                    <img src="img/Copy.svg" alt="">
                                                </p>

                                                <a hreaf="lkk.php" class="">
                                                    Ваши cтатьи
                                                    <button class="col-12"
                                                        style="position: absolute; left:0px;top:0px; height: 100px; opacity: 0;"></button>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <div class="col vh pt-5 pb-5">
                <div class="row">
                    <div class="col-10 mx-auto mt-5">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Пожалуйста заполните объявление</h2>
                                <form action="o2.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-12 mt-3">
                                        <input type="" name="title" class="form-control" placeholder="Ваш заголовок">
                                    </div>
                                    
                                    <div class="col-12 mt-3">
                                        <textarea name="text" class="form-control"
                                            placeholder="Текст вашего объявления"></textarea>
                                    </div>
                                    
                                    <div class="col-3 mt-3">
                                        <button class="ready form-control">
                                            Готово!
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-right mt-0" style=>
                <img class="" src="img/footer.svg" alt="" style="height: 100vh;">
            </p>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>