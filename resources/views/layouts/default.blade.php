<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<!-- オプションのテーマ -->
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 10px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
</style>
</head>

<body>
 
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/user/crud">CRUD APP</a>
    </div>
  <div id="navbar" class="collapse navbar-collapse">
        <?php $var = $_SERVER["REQUEST_URI"]; ?>
        <?php $link_navi = ""; ?>
        <?php if(preg_match("/index|store|page/", $var)){ $link_navi = "一覧表示"; } ?>
        <?php if(preg_match("/create/", $var)){ $link_navi = "新規作成"; } ?>
        <ul class="nav navbar-nav">
          <li @if($link_navi=='一覧表示')class="active"@endif><a href="/user/crud">一覧表示</a></li>
          <li @if($link_navi=='新規作成')class="active"@endif><a href="/user/crud/create">新規作成</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 30px;">
<h2>@yield('title')</h2>
@yield('content')
</div><!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
