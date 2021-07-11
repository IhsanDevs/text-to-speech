<?php
$json_decoded = json_decode(file_get_contents("https://texttovoices.herokuapp.com/lang/"));
?>

<!DOCTYPE html>
<html lang="en" style="width: 100%;height: auto;font-family: Inconsolata, monospace;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Text To Speech | MP3 Generator</title>
    <meta name="theme-color" content="rgb(105,103,103)">
    <meta property="og:description" content="Convert your text to audio with MP3 format. Free, simple, unlimited and no account registration required.">
    <meta property="og:title" content="Text To Speech | MP3 Generator">
    <meta name="twitter:image" content="https://texttovoices.herokuapp.com/assets/img/icon/favicon-96x96.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="Convert your text to audio with MP3 format. Free, simple, unlimited and no account registration required.">
    <meta name="twitter:description" content="Convert your text to audio with MP3 format. Free, simple, unlimited and no account registration required.">
    <meta property="og:image" content="https://texttovoices.herokuapp.com/assets/img/icon/android-icon-96x96.png">
    <meta name="twitter:title" content="Text To Speech | MP3 Generator">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png?h=e74d5a35a97dee9cf30732ccb1e0a59e">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png?h=baa590113fb94506046325b20ac817c3">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/icon/apple-icon-180x180.png?h=aa3d1fd0401ea5e4f450736e4fa1ed45">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/icon/android-icon-192x192.png?h=28aaa7b1ba24a57fbc5a84e1f1ad4923">
    <link rel="icon" type="image/png" sizes="310x310" href="assets/img/icon/ms-icon-310x310.png?h=1260553c476a4c1b99603d53d7e19789">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json?h=eaeacf68d8e6e9d93ccc90959af5af97">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer.css?h=e605160c8ea300d16e8fca95950fdbdd">
    <link rel="stylesheet" href="assets/css/Header.css?h=be3f61a0ed692c2266df40b4d9fbbf79">
    <link rel="stylesheet" href="assets/css/styles.css?h=e032c2be7701446498052561f78d5764">
</head>

<body style="width: 100%;height: auto;font-family: Inconsolata, monospace;">
    <div class="container d-inline" style="width: 100%;height: auto;margin: auto;padding: 0;">
        <div class="row">
            <div class="col-md-12" style="padding: 0;">
                <header style="width: 100%;height: auto;">
                    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark" style="width: 100%;height: auto;">
                        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                            <div class="collapse navbar-collapse" id="navcol-1">
                                <ul class="navbar-nav flex-grow-1 justify-content-between">
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-file-audio-o apple-logo"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="lang">List Languange</a></li>
                                    <li class="nav-item"><a class="nav-link" href="api">API</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://t.me/IhsanDevs" target="_blank">Contact Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://t.me/rest_api" target="_blank">Telegram Channel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://github.com/IhsanDevs" target="_blank">My Github</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://instagram.com/ihsan_devs">My Instagram</a></li>
                                    <li class="nav-item"><a class="nav-link" id="about" href="javascript:void()">About</a></li>
                                    <li class="nav-item"></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>
    </div>
    <div class="container d-inline" style="padding: 0;margin: 0;width: 100%;height: auto;">
        <div class="row" style="width: 100%;margin: 0;">
            <div class="col-md-12" style="width: 100%;padding: 0;">
                <main class="d-inline-flex flex-column justify-content-center align-items-center main" style="width: 100%;height: 950px;margin: auto;display: table-caption;"><audio class="d-inline-flex" id="audio-text" title="Text To Speech" controls="" style="margin-top: 5%;">
                        <source src="https://texttovoices.herokuapp.com/api/?text=Halo.%20Saya%20andika.%20Saat%20ini%2C%20kamu%20sedang%20menggunakan%20suara%20saya.%20Ini%20adalah%20contoh%20suara%2C%20dalam%20bahasa%20Indonesia.&amp;gender=male&amp;lang_code=id" type="audio/mpeg" id="audio">
                    </audio><select id="item" style="margin-top: 5%;border-radius: 3px;background: linear-gradient(145deg, #283848, #2f4256);box-shadow: 2px 2px 2px #253544, -2px -2px 2px #33475c;color: white;outline: none;border: none;">
                    <?php
                    for ($i=0; $i < count($json_decoded); $i++) :
                    ?>
                        <option value="&gender=<?= $json_decoded[$i]->gender; ?>&lang_code=<?= $json_decoded[$i]->lang_code; ?>"><?= $json_decoded[$i]->name; ?></option>
                    <?php
                    endfor;
                    ?>
                    </select><textarea class="form-control-lg" id="text_to_voice" style="margin-top: 5%;resize: none;height: 30%;border: 0;border-style: none;border-color: transparent;outline: none;color: rgb(255,255,255);font-size: 14px;font-family: Inconsolata, monospace;width: 210px;border-radius: 8px;background: linear-gradient(145deg, #283848, #2f4256);box-shadow: 5px 5px 5px #253544, -5px -5px 5px #33475c;" name="text" placeholder="Enter your text..." autocomplete="off" spellcheck="true" wrap="soft" maxlength="1000" minlength="1"></textarea><button class="btn text-light audio-play-button" id="convert-text" type="button" style="margin-top: 7%;width: 116.5px;font-family: Inconsolata, monospace;font-size: 17px;margin-bottom: 10%;">Convert</button></main>
            </div>
        </div>
    </div>
    <footer id="footerpad" style="width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto" style="width: 100%;height: auto;padding: 15px;">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="https://facebook.com/IhsanDeveloper" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/IhsanDevs" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/ihsan_devs" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://github.com/IhsanDevs" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                    <p class="copyright text-muted text-center">Made with &#9825; by Ihsan Devs</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/main.js?h=f6152118f87c9ce7a67e3c350ae27229"></script>
</body>

</html>