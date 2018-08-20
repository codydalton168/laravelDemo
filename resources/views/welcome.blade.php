<!DOCTYPE HTML>
<html>
<head>
<title>{{$name}}</title>
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="./js/jquery.min.js"></script>
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic|Roboto+Slab:400,100,700' rel='stylesheet' type='text/css'>

<script>
$(function() {
    var pull 		= $('#pull');
    menu 		= $('nav ul');
    menuHeight	= menu.height();
    $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
    });
    $(window).resize(function(){
          var w = $(window).width();
          if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
          }
    });

    addEventListener("load", function() {
          setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar(){
          window.scrollTo(0,1);
    }

});
    </script>
</head>
<body>
<div id="home" class="header">
    <div class="top-header" id="move-top">
        <div class="container">
            <div class="logo">
                <a href="./"><img src="./images/logo.png" title="Cloud Storage" /></a>
            </div>
            <nav class="top-nav">
                <ul class="top-nav">
                    <li class="active"><a href="./"> 首頁 </a></li>
                    <li><a href="about">關於</a></li>
                    <li><a href="pricing">免費/收費</a></li>
                </ul>
                <a href="#" id="pull"><img src="./images/nav-icon.png" title="menu" /></a>
            </nav>
            <div class="contact-info">
                <p>你需要幫助嗎？連絡我們</p>
                <div class="contact-info-grids">
                    <div class="contact-info-left">
                        <a class="chat" href="#">連絡我們</a>
                    </div>
                    <div class="contact-info-right">
                        <h3>000-00000000</h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="banner">
    <div-- class="container">
        <div class="banner-info text-center">
            <h1>只是一個專業的網路儲存服務</h1>
            <h2>現代快速可靠</h2>
            <img src="./images/icon.png" title="name" />
        </div>
    </div>
</div>
</div>


<div class="services">
    <div class="services-left text-center">
        <img src="./images/icon2.png" title="Webhosting" />
        <h2>雲端硬碟租用</h2>
        <p>自身配置您的需求,價格讓您滿意</p>
        <a class="s-btn" href="#">更多</a>
    </div>
    <div class="services-right text-center">
        <h3>.com</h3>
        <h2>域名綁定</h2>
        <p>雲端硬碟可利用域名綁定,不需要額外設定付費機制</p>
        <a class="s-btn" href="#">More</a>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="features">
    <div class="container">
        <div class="features-head text-center">
            <h3>我們的特點</h3>
            <span>我們的最佳功能</span>
        </div>
        <div class="features-grids text-center">
            <div class="col-md-3">
                <div class="features-grid">
                    <span class="f-icon"> </span>
                    <label> </label>
                    <h3>客服支援</h3>
                    <p> 客服都具備知識領域,解決您的問題</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-grid">
                    <span class="f-icon1"> </span>
                    <label> </label>
                    <h3>雲端技術</h3>
                    <p>技術工程師都有 6 年以上經驗來守護 CDN  DNS  Firewall</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-grid">
                    <span class="f-icon2"> </span>
                    <label> </label>
                    <h3>高科技資料庫</h3>
                    <p> 採用非關聯式資料庫運作,每日都會異地備份</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="features-grid">
                    <span class="f-icon3"> </span>
                    <label> </label>
                    <h3>即時監控</h3>
                    <p>24 X 7 都會即時監控網站安全</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="pricing-plan">
    <div class="container">
        <div class="pricing-plan-grids">
            <div class="pricing-plan-left">
                <h2>你想要免費測試嗎?</h2>
                <span>免費用戶享有 5 GB 空間.</span>
            </div>
            <div class="pricing-plan-right">
                <a class="price-btn" href="pricing">註冊</a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="copy-right text-center">
        <a href="#"><img src="./images/footer-logo.png" title="Cloud Storage" /></a>
        <p>Copyright 2018 Demo by Cloud Storage</p>
    </div>
</div>
<script type="text/javascript">
      $(document).ready(function(){
            $('a[href^="#"]').on('click',function (e) {
                  e.preventDefault();
                  var target = this.hash,
                        $target = $(target);
                  $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                  }, 1000, 'swing', function () {
                        window.location.hash = target;
                  });
            });
      });
</script>
</body>
</html>

