<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 2px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: Blue;
    padding: 16px 16px; 
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #2980B9;}  

.show {display: block;}
</style>
</head>
<body>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">MENU</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="news.php">News</a>
    <a href="https://vk.com/bomjkotoriisiditdoma">VK</a>
    <a href="https://www.facebook.com/revival.cabal">FACEBOOK</a>
    <a href="https://discord.com/invite/J7xN8PcsaH">Discord</a>

  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<h1 style="color:#ff0000"><div><center>News update for sites for Revival !!!!!!!!!</center></div></h1>
<div><center><p2 style="color:#ff0000">Новые обновления сайта от Reivival</p2></center></div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Абсолютное позиционирование</title>
  <style type="text/css">
   body { margin: 0; }
   #sidebar, #content { position: absolute; } 
   #sidebar, #content { overflow: auto; padding: 10px; }
   #header {
    height: 80px; /* Высота слоя */
    background: #FEDFC0; border-bottom: 2px solid #7B5427;
   }
   #header h1 { padding: 20px; margin: 0; }
   #sidebar { 
    width: 150px; background: #ECF5E4; border-right: 1px solid #231F20;
    top: 82px; /* Расстояние от верхнего края */ 
    bottom: 0; /* Расстояние снизу  */
   }
   #content {
    top: 82px; /* Расстояние от верхнего края */
    left: 170px; /* Расстояние от левого края */ 
    bottom: 0; right: 0;
   }
  </style>
 </head>
 <body>
  <table>
<tr><th><h11 style="color:#ff0000">Update 0.1</th></tr> <!--ряд с ячейками заголовков-->
<tr><td><h11 style="color:#ff0000">Добавлено меню соц сетей + видео / Added the menu of social networks + videos</td></tr> <!--ряд с ячейками тела таблицы-->
<tr><th>Update 0.2</th></tr><tr><td>NULL</td></tr> <!--ряд с ячейками тела таблицы-->
<tr><th>Update 0.3</th></tr><tr><td>NULL</td></tr> <!--ряд с ячейками тела таблицы-->
<tr><th>Update 0.4</th></tr><td>NULL</td>
<tr><th>Update 0.5</th></tr><td>NULL</td>
<tr><th>Update 0.6</th></tr><td>NULL</td>
<tr><th>Update 0.7</th></tr><td>NULL</td>
<tr><th>Update 0.8</th></tr><td>NULL</td>
<tr><th>Update 0.9</th></tr><td>NULL</td>
<tr><th>Update 1.0</th></tr><td>NULL</td>
<tr><th>Update 1.1</th></tr><td>NULL</td>
<tr><th>Update 1.2</th></tr><td>NULL</td>
<tr><th>Update 1.3</th></tr><td>NULL</td>
<tr><th>Update 1.4</th></tr><td>NULL</td>
</table>
</style>
</head>
<body>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <style>
  body {
    background: url(template/img/1.jpg) no-repeat center top fixed;
    -moz-background-size: 100% auto;
    -webkit-background-size: 100% auto;
    -o-background-size: 100% auto;
    background-size: 100% auto;

color:#191970;
}
