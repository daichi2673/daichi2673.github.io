<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daichi's Portfolio</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./script.js"></script>
</head>
        <!-- レスポンシブナビ -->
        <header>
            <div class="logo">Daichi's Portfolio</div>
            <a class="nav-button" href="#">
                <span class="bar-top"></span>
                <span class="bar-middle"></span>
                <span class="bar-bottom"></span>
            </a>
            <nav class="nav-wrap">
                <ul class="sp-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="work.html">Work</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <div class="sidebar">
                <h1>Daichi's Portfolio</h1>
                <nav>
                    <ul>
                        <li class="nav-list"><a class="home-nav" href="index.html">Home</a></li>
                        <li class="nav-list"><a class="profile-nav" href="profile.html">Profile</a></li>
                        <li class="nav-list"><a class="work-nav" href="work.html">Work</a></li>
                        <li class="off-nav">Contact</li>
                    </ul>
                </nav>
            </div>

            <!-- ページの内容 -->
            <div class="about">
                <ul>
                    <li class="nav-cover home-cover"><img src="./images/home_cover.jpeg"></li>
                    <li class="nav-cover profile-cover"><img src="./images/Profile_cover.jpeg"></li>
                    <li class="nav-cover work-cover"><img src="./images/Work_cover.jpeg"></li>
                </ul>
                <div class="inner send-massage">
                    <h2>お問い合わせありがとうございます。</h2>
                    <a href="./contact.html"><img src="./images/thanks.jpg"></a>
                    <p>内容を確認のうえ、回答させて頂きます。</p>
                </div>
            </div>
        </div>
    </body>
</html>
