<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>更新项目:消息推送</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                  <span class="hidden-xs">abc</span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <!-- <li><a href="#">个人资料</a></li> -->
                <li><a href="#">退出</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="projectlist.php">项目管理</a></li>
            <li><a href="rolelist.php">角色管理</a></li>
            <li><a href="routelist.php">路由管理</a></li>
            <li><a href="assignment.php">角色人员分配</a></li>
            <li><a href="permissionlist.php">角色路由管理</a></li>
            <!-- <li><a href="#">用户管理</a></li> -->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">更新项目:消息推送</h1>
          <div class="user-form">
            <form role="form" action="projectupdate.php">
                  <div class="form-group">
                    <label for="name">项目名称</label>
                    <input type="text" class="form-control" id="name" value="消息推送">
                  </div>
                  <div class="form-group">
                    <label for="name">项目描述</label>
                    <textarea class="form-control" rows="3">不错哦</textarea>
                  </div>
                  <div class="form-group">
                    <label for="name">路由</label>
                    <input type="text" class="form-control" id="name" value="">
                  </div>
                  <form role="form">
                    <div class="form-group" style="width:200px;">
                      <label for="name">角色设置</label>
                      <select class="form-control">
                         <option value="0">请选择</option>
                         <option value="1" selected="selected">客服</option>
                         <option value="2">产品</option>
                         <option value="3">运营</option>
                         <option value="4">开发</option>
                      </select>
                    </div>
                  </form>
                <button type="submit" class="btn btn-primary">提交 </button>

            </form>
          </div>
        </div>
      </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>