<!DOCTYPE>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>EKU :: 一库仓储</title>
  <meta name="keywords" content="BugTRace"/>
  <meta name="description" content="BugTRace Home Page"/>
  <link href="/static/default.css" rel="stylesheet" type="text/css" media="screen" />
  <script type="text/javascript" src="/static/js/jquery.min.js"></script>
  <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
</head>
<body>  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://eku.b24.cn">一库仓储</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
               <li class="active bt" ><a href="/store/index/" >出入库</a></li>
               <li class="bt" ><a href="/store/stock/" >库存</a></li>
               <li class="bt" ><a href="/store/history/" >明细</a></li>
               <li class="bt" ><a href="/store/calculate/" >统计</a></li>
               <li class="bt" ><a href="/store/help/" >帮助</a></li>
               <li class="bt" ><a href="/store/account/" >账户</a></li>
               <li class="bt" ><a href="/store/sys/" >设置</a></li>
               <li><a href="/login/logout/" > <?php echo $this->Session->read("login.email");?> / 退出登录</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
          <?php echo $this->fetch('content'); ?>
          </div>
          <div class="content" > 
    <div class="cpr" > <a href="http://eku.b24.cn/page/feedback/" target=_blank >意见反馈</a></div>
  </div> 
        </div>
      </div>
    </div> <!-- /container -->
    
</body>
</html>
