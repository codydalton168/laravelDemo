<!DOCTYPE HTML>
<html>
<head>
<title>{{$name}}</title>
<link href="./css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="./js/jquery.min.js"></script>
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript">
addEventListener("load", function() {
setTimeout(hideURLbar, 0);
}, false);
function hideURLbar(){
    window.scrollTo(0,1);
}
</script>
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
                    <li><a href="./"> 首頁 </a></li>
                    <li  class="active"><a href="about">關於</a></li>
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

<div class="about">

    <div class="header-section">
        <div class="container">
            <h1>關於</h1>
        </div>
    </div>

    <div class="about-grids">
        <div class="container">
            <div class="about-left-grids">
                <h2>標題</h2>
                <p></p>

            </div>
            <div class="about-right-grids">
                <img src="./images/01.png" title="name" />
                <div class="latest-news">
                    <h2>Latest-News</h2>
                    <div class="latest-news-grids">
                        <div class="latest-news-grid">
                            <h3><a href="#">標題右邊 1</a></h3>
                            <span>TEST</span>
                            <p> </p>
                        </div>
                        <div class="latest-news-grid">
                            <h3><a href="#">標題右邊 2</a></h3>
                            <span>TEST</span>
                            <p></p>
                        </div>
                    </div>
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
<!---//smoth-scrlling---->
</body>
</html>

