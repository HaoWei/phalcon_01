<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <?php echo Phalcon\Tag::getTitle(); ?>
        <?php echo Phalcon\Tag::stylesheetLink('css/bootstrap.css'); ?>
        <?php echo Phalcon\Tag::stylesheetLink('css/bootstrap-responsive.css'); ?>
        <?php echo Phalcon\Tag::stylesheetLink('css/style.css'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/jquery-1.10.2.min.js'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/bootstrap.js'); ?>
        <?php echo Phalcon\Tag::javascriptInclude('js/index.js'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">

    </head>
    <body stlye="height:100%">

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
                <div class="carousel slide" id="myCarousel" style="width: 100%;height:100%">
                    <ol class="carousel-indicators">
                      <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                      <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
                      <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item">
                        <img alt="" src="https://abs.twimg.com/a/1380503112/t1/img/front_page/cricket@2x.jpg">
                      </div>
                      <div class="item active">
                        <img alt="" src="https://abs.twimg.com/a/1380503112/t1/img/front_page/cricket@2x.jpg">
                      </div>
                      <div class="item">
                        <img alt="" src="https://abs.twimg.com/a/1380503112/t1/img/front_page/cricket@2x.jpg">
                      </div>
                    </div>
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
            </div>

        <div class="container-fluid h-login">
            <div class="row">
                <span class="span4"><h3>一些说明</h3></span>
                <span class="span4">
                    <form class="form-signin" id="frm-login">
                        <fieldset>
                            <legend>用户登录</legend>
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-user"></i></span>
                                    <input class="span2" type="text" id="login" name="login" placeholder="用户名/邮箱/手机号">
                                </div>
                                <div class="input-prepend">
                                    <span class="add-on"><i class="icon-ok-circle"></i></span>
                                    <input class="span2" id="password" name="password" type="password" placeholder="密码">
                                </div>

                            <label class="checkbox">
                                <input type="checkbox">记住我
                                <a href="">忘记密码</a>
                            </label>

                                <button id="btn-login" type="button" class="btn btn-primary btn-middle">登录</button>
                                <button id="btn-register" type="button" class="btn btn-success btn-middle">注册成用户</button>
                            <P></P>
                            <div class="alert alert-error fade in">
                                   用户名密码不能为空
                            </div>
                        </fieldset>
                    </form>
                </span>
            </div>
        </div>

        <footer>
            <div class="navbar navbar-static-bottom">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li>&copy Catchtech 2009-2013</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>