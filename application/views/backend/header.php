<?php
if(!isset($menu))
	$menu = 0;
?>
<!doctype html>
<html lang="en">
<head>
<base href="<?=base_url()?>">
<meta charset="UTF-8">
<title><?php if(isset($title)){echo "$title - ";}?>Back-End Admin</title>
<link rel="stylesheet" href="css/admin.bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
<link rel="stylesheet/less" href="css/admin.less">
<script src="js/canvasjs.min.js"></script>
</head>
<body id="admin">

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="backend">CWA Mail Admin</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?=$this->def->compare_output($menu, 1, "active")?>"><a href="backend">Manage User</a></li>
        <li class="<?=$this->def->compare_output($menu, 2, "active")?>"><a href="backend/statistic">Statistic</a></li>
        <li class="<?=$this->def->compare_output($menu, 3, "active")?>"><a href="backend/scoreboard">Scoreboard</a></li>
        <li class="<?=$this->def->compare_output($menu, 5, "active")?>"><a href="backend/member">Member</a></li>
        <li class="<?=$this->def->compare_output($menu, 4, "active")?>"><a href="backend/karyawan">Karyawan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-sign-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
	<?=$this->def->msghandling()?>