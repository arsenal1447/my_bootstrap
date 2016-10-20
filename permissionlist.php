<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>权限管理</title>

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
            <li><a href="routelist.php">路由管理</a></li>
            <li><a href="assignment.php">角色人员分配</a></li>
            <li class="active"><a href="permissionlist.php">权限管理</a></li>
            <!-- <li><a href="#">用户管理</a></li> -->
          </ul>
          <!-- <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">权限管理</h1>

          <p><a class="btn btn-primary" href="addpermission.php" role="button">添加权限</a></p>

          <div class="panel panel-default">
            <!-- Default panel contents -->
            <!-- <div class="panel-heading">Panel heading</div> -->
            <!-- <div class="panel-body">
              <p>...</p>
            </div> -->

            <!-- Table -->
            <table class="table table-striped table-bordered">
              <thead>
              <tr>
                <th>#</th><th>项目名称</th><th>规则名称</th><th>描述</th>
                <th class="action-column">&nbsp;</th>
              </tr>
              <!-- <tr id="w0-filters" class="filters">
                <td>&nbsp;</td>
                <td><input type="text" class="form-control" name="AuthItem[name]"></td>
                <td>
                  <select class="form-control" name="AuthItem[ruleName]">
                    <option value=""></option>
                  </select>
                </td>
                <td><input type="text" class="form-control" name="AuthItem[description]"></td>
                <td>&nbsp;</td>
              </tr> -->
              </thead>
              <tbody>
                <tr data-key="boss权限">
                  <td>1</td>
                  <td>测试权限</td>
                  <td><span class="not-set">(未设置)</span></td>
                  <td>啥都行</td>
                  <td>
                    <a href="projectview.php" title="查看" aria-label="查看" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> 
                   <!--  <a href="" title="更新" aria-label="更新" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a> 
                    <a href="" title="删除" aria-label="删除" data-confirm="您确定要删除此项吗？" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span>
                    </a> -->
                  </td>
                </tr>
                <tr data-key="查看权限">
                  <td>2</td>
                  <td>开发权限</td>
                  <td><span class="not-set">(未设置)</span></td>
                  <td>拥有查看的权限</td>
                  <td>
                    <a href="/admin/permission/view?id=%E6%9F%A5%E7%9C%8B%E6%9D%83%E9%99%90" title="查看" aria-label="查看" data-pjax="0"><span class="glyphicon glyphicon-eye-open"></span></a> 
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>