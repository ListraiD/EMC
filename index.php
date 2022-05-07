<?php
session_start();
include "connect.php";
// news
$news_query = mysqli_query($con, "SELECT * FROM news ");
$news_stroka = $news_query->fetch_assoc();
$news_for_query = mysqli_query($con, "SELECT * FROM news ");
//news

//stat
$stat_query = mysqli_query($con, "SELECT * FROM stat ");
$stat_stroka = $stat_query->fetch_assoc();
$stat_for_query = mysqli_query($con, "SELECT * FROM stat ");
//stat
//comp
$company_query = mysqli_query($con, "SELECT * FROM company ");
$company_stroka = $stat_query->fetch_assoc();

//comp
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

    <title>Hello, StudLab</title>
    <style>
        .bg-image {
            background-image: url(img/bgindex.svg);


        }

        .bg-image2 {
            background:#FFFFFF;


        }

        .h1-color {
            color: #FFFFFF;
        }

        .p-color {
            color: #FFFFFF;
        }

        .button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #70C9A3;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 20px;
            /* identical to box height, or 100% */

            text-align: center;

            color: #FFFFFF;
        }



        h1 {
            font-weight: 800;
            font-size: 58px;
            line-height: 85px;
        }

        h2 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 43px;
        }

        h3 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 500;
            font-size: 32px;
            line-height: 43px;

            color: #000000;

        }

        h4 {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 21px;

            color: #000000;

        }

        a {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 32px;
            text-decoration-line: underline;

            color: #272727;
        }

        .s {
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
        }

        .slogan {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 49px;
            color: #FFFFFF;
        }

        body {
            font-family: 'Manrope' !important;
        }

        .btn-en {
            background: #31BAAE;
            border-radius: 2px;

        }

        .p-primary {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 27px;

            /* Blue */

            color: #72C3DD;


        }

        .m-text {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 15px;
            /* identical to box height */


            color: #000000;

        }


        .news-text {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 27px;

            color: #000000;

        }

        .news-title {
            font-family: 'Manrope';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 20px;
            /* or 100% */


            /* Black */

            color: #1B1B1B;

        }
    </style>

</head>


<body>
    <div class="col">
        <div class="row example-classname">
            <div class="col bg-image d-flex" style="height:100vh;">
                <div class="row my-auto" style="width:100vw;">
                    <div class="col-7 mx-auto">
                        <div class="row">
                            <img src="img/logotip.svg" class="mx-auto">
                        </div>
                        <div class="row text-align-center">
                            <p class="slogan mx-auto mt-3">
                                Портал экосистемы развития детей и молодежи Якутии

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- scroll -->
        <div class="row">
            <div class="scene"><img src="img/scroll.svg" style="height:65vh;"></div>
        </div>
        <!-- scroll -->
        <div class="row example-classname">
            <div class="col-10 mx-auto pt-2 pb-2">
                <div class="row border-bottom">
                    <div class="col-2 mr-auto">
                        <img class="w-100" src="img/text-logo.svg" alt="">
                    </div>
                    

                    
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <form action="index.php">
                                <button class="btn-en form-control">
                                    Главная
                                </button>
                            </form>
                        <!-- <form class="ml-2" action="index.php">
                                <button class="btn-dis form-control">
                                    Новости
                                </button>
                            </form>
                            <form class="ml-2" action="index.php">
                                <button class="btn-dis form-control">
                                    Статьи
                                </button>
                            </form> -->
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-9 ">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        <h2>
                                            НОВОСТИ
                                        </h2>
                                    </div>
                                    <div class="col-9 ">
                                        <p class="p-primary">
                                            <?php echo $news_stroka['title']?>
                                        </p>
                                    </div>
                                    <div class="col-1 pt-4">
                                        <p class="m-text text-center">
                                            <?php echo $news_stroka['data']?>
                                        </p>
                                    </div>


                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <img src="<?php echo $news_stroka['img']?>" alt="">
                            </div>
                            <div class="col-12 mt-3 border-bottom">
                                <h3>
                                    СТАТЬИ
                                </h3>
                            </div>
                            <div class="col-12 example-classname">
                                <div class="row">
                                    <?php
                                        for($i=0;$i<3;$i++){
                                        $for_stat = $stat_for_query->fetch_assoc();
                                        //comp
                                        $company_query = mysqli_query($con, "SELECT * FROM company WHERE id='{$for_stat['compid']}'");
                                        $company_stroka = $company_query->fetch_assoc();
                                        //comp
                                    ?>

                                    <div class="col-3 mr-5 mt-2 ">
                                        <div class="row  ">
                                            <div class="col-12 pb-4 pt-4 pr-5 pl-5">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <img class="w-100" src="<?php echo $company_stroka['img']?>" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <h4><?php echo $company_stroka['name']?></h4>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <h4>
                                                        <?php echo $for_stat['title']?>
                                                    </h4>
                                                </div>
                                                <div class="row">
                                                    <p class="m-text">
                                                        <?php echo $for_stat['data']?>
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-3">
                        <div class="row pr-5 pl-5">
                            <div class="col-10 mx-auto border-bottom">
                                <p class="news-text">
                                    Новое на сайте
                                </p>
                            </div>
                            <?php
                            for($i=0;$i<mysqli_num_rows($news_for_query);$i++){
                            $for_news = $news_for_query->fetch_assoc();
                            ?>
                            <div class="col-10 mx-auto border-bottom mt-5">
                                <p class="news-title">
                                    <?php echo $for_news['title']?>
                                </p>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- scroll -->
        <div class="row">
            <div class="scene"><img src="img/scroll.svg" style="height:100vh;"></div>
        </div>
        <!-- scroll -->

        <div class="row example-classname">
            <div class="col bg-image2" style="height:100vh;">
                <div class="row " style="width: 100vw;">
                    <div class="col-10 mx-auto" style="margin-top:20vh;">
                        <div class="row ">
                            <div class="mx-auto">
                                <img src="img/card1.svg" alt="">
                            </div>
                            <div class="mx-auto ">
                                <img src="img/card2.svg" alt="">
                            </div>
                            <div class="mx-auto ">
                                <img src="img/card3.svg" alt="">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-3 mx-auto">
                                <form action="go-company.php">
                                    <button class="button form-control">
                                        Начать поиск
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <script src="script/jquery-2.2.1.min.js"></script>
    </script>
    <script src="script/jquery.scrollify.js"></script>
    <script>
        $.scrollify({
            section: ".example-classname",
            scrollbars: false,
            scrollSpeed: 1000,
        })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>