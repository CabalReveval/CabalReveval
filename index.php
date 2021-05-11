<!DOCTYPE html>
<html lang="pt">

<!-- CabaliRevival 2021 , My Discord Revival#3898 -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8" />
	<title>CABAL Revival  </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="content-language" content="pt-br">
<meta name="author" content="CABAL Revival">
<meta http-equiv="description" content="CABAL Revival">
<meta http-equiv="DC.Description" content="CABAL Revival">
<meta property="og:title" content="CABAL Revival">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="requiresActiveX=true">
<meta name="application-name" content="Fixar do Cabal Nexus">
<meta name="msapplication-navbutton-color" content="#3480C0">
<meta name="msapplication-window" content="width=1024;height=999">
<meta name="msapplication-tooltip" content="Navegar no site do Cabal Revival">
<meta name="robots" content="ALL" />


          <link href="css/css-reset.css" rel="stylesheet">
          <link href="css/style.css?v=<?=md5(date("H:i:s.B A"))?>" rel="stylesheet">
	      <link href="css/layout-menu.css?v=<?=md5(date("H:i:s.B A"))?>" rel="stylesheet">
	      <link rel="stylesheet" href="css/font-awesome.min.css?v=<?=md5(date("H:i:s.B A"))?>">


  <script type="text/javascript" src='js/jquery_1.9.1/jquery.min.js'></script>
  <script src="js/modalx.js"></script>
  <script type="text/javascript" src="js/prototip.js"></script>
  <script type="text/javascript" src="js/propios.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/kkcountdown.min.js"></script>

	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet" type="text/css" />



   <style>
	   .mySlides {display:none;}
	</style>
	   <script>
    var $j = jQuery.noConflict();
	
  </script>

	<div class="wrapper">
		<!--Меню сверху свисающие-->
			<div style="margin-top: 700px;margin-left: -30px;">
				<ul class="puerto-menu">
		<li>
			<a href="./">
				<i class=""></i>
				<strong>Home</strong>
				<small>Главная страница</small>
			</a>
		</li>
		<li>
			<a onclick='new modal("#reg_modal"); return false' class="active">
				<i class=""></i>
				<strong>Register</strong>
				<small>Создание Аккаунта!</small>

			</a>
		</li>
		<li>
			<a href="" onClick="new Ajax.Updater('container', 'template/download.php', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');">
				<i class=""></i>
				<strong>Dowload</strong>
				<small>Скачать клиент</small>
			</a>

			<ul>
				<li><a href="mega" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>Mega</a></li>
				<li><a href="gogle disk" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>Google Disk</a></li>

			</ul>
		</li>
		<li>
		</li>
		<li>
			<a href="#!user/doacao" onClick="new Ajax.Updater('container', 'template/request/user/doacao.php', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');">
				<i class=""></i>
				<strong>Donate</strong>
				<small>Донат</small>
			</a>
		</li>
		<li>
			<a href="#">
				<i class=""></i>
				<strong>Ranking</strong>
				<small>Топ игроки!</small>
			</a>

			<ul>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>Игроки</a></li>
				<li>
					<ul>
					</ul>
				</li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=2', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-trophy"></i>Гильдия</a></li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=4', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-cube"></i>Комбо</a></li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=5', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-clock-o"></i>Время в Игре</a></li>
			</ul>
		</li>
		<li>
			<a href="" target="_blank">
				<i class=""></i>
				<strong>Тех поддержка</strong>
			</a>

			<ul>
				<li><a href="фЭЙСБУК" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>Facebook</a></li>
				<li><a href="https://discord.com/invite/kngrq2xnuy" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>Discord</a></li>
				<li><a href="https://vk.com/bomjkotoriisiditdoma" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>VK</a></li>

			</ul>
		</li>
		<li>
		</li>
		<li>
			<a href="http://localhost/account" target="_blank">
				<i class=""></i>
				<strong>личный кабинет</strong>
				<small></small>
			</a>
			</li>
		<li>
			<a href="" target="_blank">
				<i class=""></i>
				<strong>Server Info</strong>
				<small></small>
			</a>
			<ul>
				</li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=2', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-trophy"></i>Rules</a></li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=4', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-cube"></i>Server Info</a></li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=5', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-clock-o"></i>DropList</a></li>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=6', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-ban"></i>Ban List</a>
				<li><a href="#!ranking" onClick="new Ajax.Updater('container', 'template/request/ranking.php?ranking=1', {method: 'get', asynchronous:true, evalScripts:true}); esperar('container'); carregando(); mover('#container');"><i class="fa fa-group"></i>News</a></li>

			</ul>



	</div>
		<!--Главная страница-->
        <div class="center">
			</div>
		<!-- конец меню-->
			<div class="container">
				<main class="content">
					<div class="top-content-block">



	<!-- ставишь кликабельную фотку указываешь ссылку и вуаля :)-->
								</a>

 						 <img class="mySlides" src="templates/img/1.jpg" style="width:100%">
</div>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <style>
   body {
    background: url(templates/img/foto.jpg) no-repeat center top fixed;
    -moz-background-size: 100% auto;
    -webkit-background-size: 100% auto;
    -o-background-size: 100% auto;
    background-size: 100% auto;

color:#191970;
}
