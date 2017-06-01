<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <title>Tini Wini Biti</title>

        <link href="assets/img/favicon.png" rel="shortcut icon">

        <link rel="stylesheet" href="assets/css/uikit.min.css" />
        <link rel="stylesheet" href="assets/css/frontend.css" />
        <style>
            .twb-home-section{
                height: calc(100vh - 54px);
            }
            footer {
                height: 50px;
            }
            footer .twb-nav {
                top: 8px;
            }
        </style>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/uikit.min.js"></script>
        <script src="assets/js/uikit-icons.min.js"></script>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <a href="./" title="Tini Wini Biti" class="twb-logo">
            <img src="assets/img/logo.svg" alt="Tini Wini Biti">
        </a>
        <section class="twb-home-section uk-background-cover uk-flex uk-flex-middle" style="background-image:url('assets/img/bg.png')">
            <div class="uk-container uk-container-small uk-text-center">
                <h1 class="uk-margin-small-bottom"><img src="assets/img/tiniwinibiti.png"></h1>
                <h2 class="uk-text-uppercase uk-margin-small-bottom uk-margin-small-top white-text">Ramadhan Coloring</h2>
                <h5 class="white-text uk-margin-small-top">Yuk Moms dapatkan THR dengan total hadiah 2,5 juta dari Tini Wini Biti!<br>Download salah satu template mewarnai Dunia Tini Wini Biti dibawah ini<br>dan ajak Si Kecil untuk mewarnai gambar tersebut!</h5>
                <div class="uk-grid-small uk-grid-match uk-child-width-1-3" uk-grid>
                    <div>
                        <h5 class="white-text uk-margin-remove">Kura-kura</h5>
                        <p><img src="assets/img/kurakura.png" style="margin-left:-45px;"></p>
                        <a href="assets/templates/TWB_coloring_turtle.pdf" target="_blank" title="Download" uk-tooltip><img src="assets/img/download.png"></a>
                    </div>
                    <div>
                        <h5 class="white-text uk-margin-remove">Gajah</h5>
                        <p><img src="assets/img/gajah.png" style="margin-right:-35px;"></p>
                        <a href="assets/templates/TWB_coloring_elephant.pdf" target="_blank" title="Download" uk-tooltip><img src="assets/img/download.png"></a>
                    </div>
                    <div>
                        <h5 class="white-text uk-margin-remove">Ikan</h5>
                        <p><img src="assets/img/ikan.png" style="margin-right:-50px;"></p>
                        <a href="assets/templates/TWB_coloring_fish.pdf" target="_blank" title="Download" uk-tooltip><img src="assets/img/download.png"></a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="twb-footer uk-flex uk-flex-middle">
            <div class="uk-margin-left">
                Copyright &copy; <?php echo date('Y'); ?> <a class="" href="#" target="_blank" title="PT Tini Wini Biti">PT Tini Wini Biti</a> | All Rights Reserved
            </div>
            <div class="uk-visible@m">
                <nav class="twb-nav uk-flex uk-flex-middle">
                    <ul class="twb-socmed uk-visible@s">
                        <li><a href="" class="uk-icon-button" uk-icon="icon: instagram"></a></li>
                        <li><a href="" class="uk-icon-button" uk-icon="icon: facebook"></a></li>
                        <!-- <li><a href="" class="uk-icon-button" uk-icon="icon: twitter"></a></li> -->
                    </ul>
                </nav>
            </div>
        </footer>
    </body>
</html>
