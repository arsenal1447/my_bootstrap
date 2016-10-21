
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imgs/favicon.ico">

    <title>登录页面</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- <form class="form-signin" role="form">
        <h2 class="form-signin-heading">登录页面</h2>
        <input type="email" class="form-control" placeholder="电子邮箱" required autofocus>
        <input type="password" class="form-control" placeholder="密码" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form> -->
        <form class="form-signin" role="form" action="login"  method="post" id="validateform" name="validateform">
            <div class="form-signin-body">
                <div class="form-group">
                    <span class="input-group-addon" ><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" id="username" name="username" class="form-control" placeholder="请输入管理帐号" autofocus>
                </div>

                <div class="form-group">
                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="请输入管理密码"  autofocus>
                </div>

                <button class="btn  btn-primary btn-block" type="submit" id="dosubmit" disabled="disabled"> 登录</button>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="rmbUser" value="remember-me"> 在此设备上保存登录
                    </label>
                </div>
            </div>
            <div class="form-signin-footer"> <a><i class="glyphicon glyphicon-question-sign"></i> 忘记密码？</a></div>
        </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
