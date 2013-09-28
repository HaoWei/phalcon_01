<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo Phalcon\Tag::getTitle(); ?>
        <?php echo Phalcon\Tag::stylesheetLink('css/bootstrap.css'); ?>

        <?php echo Phalcon\Tag::stylesheetLink('css/style.css'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/jquery-1.10.2.min.js'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/bootstrap.js'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">

    </head>
    <body>

         <header>
                <div class="navbar navbar-static-top">
                    <div class="navbar-inner">
                        <div class="container">
                           <ul class="nav">
                                <li><a class="brand" href="/"><img src="img/163logo.gif"></a></li>
                                <li class="divider-vertical"></li>
                                <li><a href=""><h4>专业邮箱系统</h4></a></li>
                           </ul>
                           <ul class="nav pull-right">
                                <li class="divider-vertical"></li>
                                <li><a href="#"><h4>登录</h4></a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="#"><img </a></li>
                           </ul>
                        </div>
                    </div>
                </div>
         </header>

        <div class="container">
            <div class="carousel slide" id="myCarousel">
                    <ol class="carousel-indicators">
                      <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                      <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
                      <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item">
                        <img alt="" src="http://getbootstrap.com/2.3.2/assets/img/bootstrap-mdo-sfmoma-02.jpg">
                        <div class="carousel-caption">
                          <h4>First Thumbnail label</h4>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                      </div>
                      <div class="item active">
                        <img alt="" src="http://getbootstrap.com/2.3.2/assets/img/bootstrap-mdo-sfmoma-02.jpg">
                        <div class="carousel-caption">
                          <h4>Second Thumbnail label</h4>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                      </div>
                      <div class="item">
                        <img alt="" src="http://getbootstrap.com/2.3.2/assets/img/bootstrap-mdo-sfmoma-02.jpg">
                        <div class="carousel-caption">
                          <h4>Third Thumbnail label</h4>
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                      </div>
                    </div>
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
            </div>
        </div>

        <footer>
            <div class="navbar navbar-static-bottom">
                <div class="">&copy Catchtech 2009-2013</div>

            </div>
        </footer>
    </body>
</html>