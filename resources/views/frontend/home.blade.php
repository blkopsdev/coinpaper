<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Free Web tutorials on HTML and CSS">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200" rel="stylesheet">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/jquery-ui.css">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/main.css">
  <meta name="google-site-verification" content="Ntwq6xf3DmQB-uhEShIp81qV-BmgFPqj_Ru12cJynyk" />
  <title>CoinPaper</title>
  <style>
    footer{
      float: left;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <div class='overlay'></div>
  <div class="wrap" style="float: left; height: auto; min-height:-moz-calc(100vh - 60px); min-height: -webkit-calc(100vh - 60px)">
    <nav>
      <div class="nav-header">CoinPaper</div>
      <ul class="links">
        <li class="navlink"><a href="{{ url('/') }}">Home</a></li>
        <li class="navlink"><a href="{{ url('/login') }}">Login</a></li>
        <li class="navlink"><a href="{{ url('/register') }}">Register</a></li>
      </ul>
      <button type="button" id="hamburgerToggle" class="btn btn-default" aria-label="">
        <span class="fa fa-bars" aria-hidden="true"></span>
      </button>
    </nav>
    <div class="hero-wrap">
      <h1 class="hero-heading">Coinpaper Exchange</h1>
      <div class="feature-hero">
        <h1 class="title">CoinPaper Is Available By <strong>Private</strong> Invite Only</h1>
        <h3 class="title2">If you want to buy cryptocurrencies please reach out to the person who invited you directly.</h3>
      </div>
    </div>
    <div class="btn-ctn">
      <button id="getstarted" class="main-btn">Contact</button>
    </div>
    <div class="moreinfo">
      <div class="center-txt">
        <h4 class="priceupdateheader">Current Price Of BitCoin</h4>
        <p class="getappnow">Updated Every Minute - <span id="timer"></span></p>
      </div>
      <div class="center-txt links-ctn">
        <h2 id="bitcoinPrice"></h2>
      </div>
    </div>
  </div>
  <footer>
  <div class="txt-center">
      <p class="footertext">&copy;2018 coinpaper.io v0.1.0</p>
  </div>
  </footer>
  <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/jquery.js"></script>
  <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/jquery-ui.js"></script>
  <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/main.js"></script>
</body>
</html>
