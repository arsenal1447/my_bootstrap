<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>路由管理</title>

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
          <a class="navbar-brand" href="index.php">Project name</a>
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
            <li><a href="projectlist.php">项目管理</a></li>
            <li><a href="rolelist.php">角色管理</a></li>
            <li class="active"><a href="routelist.php">路由管理</a></li>
            <li><a href="assignment.php">角色人员分配</a></li>
            <li><a href="permissionlist.php">角色路由管理</a></li>
            <!-- <li><a href="#">用户管理</a></li> -->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">路由列表</h1>
          <div class="content-wrapper">
            <!-- <section class="content-header">
              <ul class="breadcrumb"><li><a href="/">首页</a></li>
              <li><a href="/admin">Admin</a></li>
              <li class="active">路由列表</li>
              </ul>
            </section> -->
            <section class="content">
              <div class="row">
                  <div class="col-sm-11">
                      <div class="input-group">
                          <input id="inp-route" type="text" class="form-control"
                                 placeholder="New route(s)">
                          <span class="input-group-btn">
                              <a id="btn-new" class="btn btn-success" href="/admin/route/create">Add <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></a>            </span>
                      </div>
                  </div>
              </div>
              <p>&nbsp;</p>
              <div class="row">
                  <div class="col-sm-5">
                      <div class="input-group">
                          <input class="form-control search" data-target="avaliable"
                                 placeholder="Search for avaliable">
                          <span class="input-group-btn">
                              <a id="btn-refresh" class="btn btn-default" href="/admin/route/refresh"><span class="glyphicon glyphicon-refresh"></span></a>            </span>
                      </div>
                      <select multiple size="20" class="form-control list" data-target="avaliable"></select>
                  </div>
                  <div class="col-sm-1">
                      <br><br>
                      <a class="btn btn-success btn-assign" href="/admin/route/assign" title="Assign" data-target="avaliable">&gt;&gt; <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></a><br><br>
                      <a class="btn btn-danger btn-assign" href="/admin/route/remove" title="Remove" data-target="assigned">&lt;&lt; <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></a>    </div>
                  <div class="col-sm-5">
                      <input class="form-control search" data-target="assigned"
                             placeholder="Search for assigned">
                      <select multiple size="20" class="form-control list" data-target="assigned"></select>
                  </div>
              </div>
            </section>
            </div>
          </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>