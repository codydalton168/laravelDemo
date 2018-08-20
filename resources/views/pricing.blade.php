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
                    <ul class="top-nav">
                        <li><a href="./"> 首頁 </a></li>
                        <li><a href="about">關於</a></li>
                        <li  class="active"><a href="pricing">免費/收費</a></li>
                    </ul>
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

<div class="Pricing">
    <!----- header-section ---->
    <div class="header-section">
        <div class="container">
            <h1>免費/收費</h1>
        </div>
    </div>
    <div class="pricing-tables">
        <div class="container">
            <div class="plans-head text-center">
                <h2>我們的託管方案</h2>
                <p></p>
            </div>

            <div class="col-md-3">
                <div class="pricing-table-grid">
                    <h3>免費</h3>
                    <ul>
                        <li><span>Free</span></li>
                        <li><a href="#">1GB Bandwidth</a></li>
                        <li><a href="#">1024MB RAM</a></li>
                        <li><a href="#">10 Dedicated IP Address</a></li>
                        <li><a href="#">Cpanel/WHM include</a></li>
                        <li><a href="#">Open VZ include</a></li>
                        <li class="price-btn"><a href="#">5 GB HDD</a></li>
                    </ul>
                    <a class="order-btn" href="#">註冊</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="pricing-table-grid">
                    <h3>基本型</h3>
                    <ul>
                        <li><span>NT$2000</span></li>
                        <li><a href="#">10GB Bandwidth</a></li>
                        <li><a href="#">1024MB RAM</a></li>
                        <li><a href="#">1 Dedicated IP Address</a></li>
                        <li><a href="#">Cpanel/WHM include</a></li>
                        <li><a href="#">Open VZ include</a></li>
                        <li class="price-btn"><a href="#">10 GB HDD</a></li>
                    </ul>
                    <a class="order-btn" href="#">申請</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-table-grid">
                    <h3>白金型</h3>
                    <ul>
                        <li><span>NT$6000</span></li>
                        <li><a href="#">30GB Bandwidth</a></li>
                        <li><a href="#">1024MB RAM</a></li>
                        <li><a href="#">2 Dedicated IP Address</a></li>
                        <li><a href="#">Cpanel/WHM include</a></li>
                        <li><a href="#">Open VZ include</a></li>
                        <li class="price-btn"><a href="#">50 GB HDD</a></li>
                    </ul>
                    <a class="order-btn" href="#">申請</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pricing-table-grid">
                    <h3>商業型</h3>
                    <ul>
                        <li><span>NT$10000</span></li>
                        <li><a href="#">50GB Bandwidth</a></li>
                        <li><a href="#">1024MB RAM</a></li>
                        <li><a href="#">5 Dedicated IP Address</a></li>
                        <li><a href="#">Cpanel/WHM include</a></li>
                        <li><a href="#">Open VZ include</a></li>
                        <li class="price-btn"><a href="#">100 GB HDD</a></li>
                    </ul>
                    <a class="order-btn" href="#">申請</a>
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!----- Pricing-tables ---->
    <!----- out-features ----->
    <div class="our-features">
        <div class="container">
            <div class="our-features-head text-center">
                <h2>主標題</h2>
                <p>主內容</p>
            </div>
            <!------ our-features -grids ----->
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題1</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon1.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題2</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon2.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題3</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon3.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題 4</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon4.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題 5</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-features-grid">
                    <div class="features-grid-left">
                        <img src="./images/f-icon5.png" title="name" />
                    </div>
                    <div class="features-grid-right">
                        <h4>標題 6</h4>
                        <span>test...</span>
                        <p>test...</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <!------ our-features -grids ----->
        </div>
    </div>
    <!----- out-features ----->
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

