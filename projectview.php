<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>项目详情</title>

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
            <li class="active"><a href="projectlist.php">项目管理</a></li>
            <li><a href="rolelist.php">角色管理</a></li>
            <li><a href="routelist.php">路由管理</a></li>
            <li><a href="assignment.php">角色人员分配</a></li>
            <li><a href="permissionlist.php">权限管理</a></li>
            <!-- <li><a href="#">用户管理</a></li> -->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">消息推送</h1>
          <!-- <div class="panel panel-default"> -->
            <div class="content-wrapper">
              <!-- <section class="content-header">
                  <h1>消息推送</h1>
                  <ul class="breadcrumb">
                      <li><a href="/">首页</a></li>
                      <li><a href="/admin">Admin</a></li>
                      <li><a href="/admin/role/index">角色列表</a></li>
                      <li class="active">管理员大人</li>
                  </ul>
              </section> -->
              <section class="content">
                  <div class="auth-item-view">
                      <!-- <h1>消息推送</h1> -->
                      <p>
                          <a class="btn btn-primary" href="role/update?id=1">更新</a> 
                          <a class="btn btn-danger" href="role/delete?id=1" data-confirm="确认要删除吗?" data-method="post">删除</a> 
                          <!-- <a class="btn btn-success" href="/admin/role/create">新增</a>  -->
                      </p>
                      <div class="row">
                          <div class="col-sm-11">
                              <table id="w0" class="table table-striped table-bordered detail-view">
                                  <tr>
                                      <th style="width:25%">项目名称</th>
                                      <td>消息推送</td>
                                  </tr>
                                  <tr>
                                      <th style="width:25%">角色管理</th>
                                      <td><span class="not-set">(未设置)</span></td>
                                  </tr>
                                  <tr>
                                      <th style="width:25%">项目描述</th>
                                      <td>啥都行</td>
                                  </tr>
                                  <!-- <tr>
                                      <th style="width:25%">数据</th>
                                      <td><span class="not-set">(未设置)</span></td>
                                  </tr> -->
                              </table>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-sm-5">
                              <input class="form-control search" data-target="avaliable" placeholder="Search for avaliable">
                              <select multiple size="20" class="form-control list" data-target="avaliable"></select>
                          </div>
                          <div class="col-sm-1">
                              <br>
                              <br>
                              <a class="btn btn-success btn-assign" href="/admin/role/assign?id=%E7%AE%A1%E7%90%86%E5%91%98%E5%A4%A7%E4%BA%BA" title="Assign" data-target="avaliable">&gt;&gt; <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></a>
                              <br>
                              <br>
                              <a class="btn btn-danger btn-assign" href="/admin/role/remove?id=%E7%AE%A1%E7%90%86%E5%91%98%E5%A4%A7%E4%BA%BA" title="Remove" data-target="assigned">&lt;&lt; <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></a> </div>
                          <div class="col-sm-5">
                              <input class="form-control search" data-target="assigned" placeholder="Search for assigned">
                              <select multiple size="20" class="form-control list" data-target="assigned"></select>
                          </div>
                      </div>
                  </div>
              </section>
            </div>
          <!-- </div> -->
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>