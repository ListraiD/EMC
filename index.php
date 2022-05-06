<!doctype html>
<html lang="en">

<head>
    <!-- manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!-- exo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@600&family=Manrope:wght@700&family=Montserrat:wght@800&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, StudLab</title>
    <style>
        .bg-image {
            background-image: url(img/bgindex.svg);


        }

        .bg-image2 {
            background-image: url(img/bgindex2.svg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 90% 100%;


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

        .lol {
            font-style: normal;
            font-weight: 400;
            font-size: 28px;
            line-height: 37px;
            display: flex;
            align-items: center;

            color: #C4C4C4;
        }

        h1 {
            font-weight: 800;
            font-size: 58px;
            line-height: 85px;
        }

        .s {
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
        }

        .slogan {

            color: white;
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 22px !important;
            line-height: 30px !important;
        }

        body {
            font-family: 'Manrope' !important;
        }
    </style>

</head>


<body>
    <div class="col example-classname">
        <div class="row">
            <div class="col bg-image d-flex" style="height:100vh;">
                <div class="row my-auto" style="width:100vw;">
                    <div class="col-4 mx-auto">
                        <div class="row">
                            <img src="img/logotip.svg" class="mx-auto">
                        </div>
                        <div class="row text-align-center">
                            <p class="slogan mx-auto mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="scene"><img src="img/parallax6.png" style="height: 800px;width:100vw"></div>
        </div>

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
                                <form action="go.php">
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





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="jquery.scrollify.js"></script>
    <script>
        $(function () {
            $.scrollify({
                section: ".example-classname",
                scrollbars: false,
                before: function (i, panels) {

                    var ref = panels[i].attr("data-section-name");

                    $(".pagination .active").removeClass("active");

                    $(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
                },
                afterRender: function () {
                    var pagination = "<ul class=\"pagination\">";
                    var activeClass = "";
                    $(".panel").each(function (i) {
                        activeClass = "";
                        if (i === $.scrollify.currentIndex()) {
                            activeClass = "active";
                        }
                        pagination += "<li><a class=\"" + activeClass + "\" href=\"#" + $(
                                this).attr("data-section-name") +
                            "\"><span class=\"hover-text\">" + $(this).attr(
                                "data-section-name").charAt(0).toUpperCase() + $(this).attr(
                                "data-section-name").slice(1) + "</span></a></li>";
                    });

                    pagination += "</ul>";

                    $(".home").append(pagination);
                    /*

                    Tip: The two click events below are the same:

                    $(".pagination a").on("click",function() {
                      $.scrollify.move($(this).attr("href"));
                    });

                    */
                    $(".pagination a").on("click", $.scrollify.move);
                }
            });
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>