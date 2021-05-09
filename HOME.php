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
    background: #000000; border-bottom: 2px solid #000000;
   }
   #header h1 { padding: 20px; margin: 0; }
   #sidebar { 
    width: 150px; background: #000000; border-right: 1px solid #000000;
    top: 82px; /* Расстояние от верхнего края */ 
    bottom: 0; /* Расстояние снизу  */
   }
   #content {
    top: 82px; /* Расстояние от верхнего края */
    left: 170px; /* Расстояние от левого края */ 
    bottom: 0; right: 0;
	#content {
    top: 82px; /* Расстояние от верхнего края */
    left: 174px; /* Расстояние от Правого края */ 
    bottom: 0; right: 0;
   }
  </style>
 </head>
 <body>
  <div id="header"><h1></h1></div>
  <div id="sidebar">
   <p></p>
   <p></p>
  </div>
  <div id="content">
   <h2></h2>
    <p> .</p>
   <p></p>
  </div>
 </body>
</html>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Пример с css</title>
  <style>
   body {
    background: url(template/img/1.jpg) no-repeat center top fixed;
    -moz-background-size: 100% auto; 
    -webkit-background-size: 100% auto;
    -o-background-size: 100% auto; 
    background-size: 100% auto; 
 
color:#191970;
}
