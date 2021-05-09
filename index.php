                <title><?=Ragezone?></title>
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
<!DOCTYPE html>
<html>
<head>
<h2>Clickable Dropdown</h2>
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
	 <a href="HOME.php">test</a>
    <a href="https://vk.com/bomjkotoriisiditdoma">VK</a>
    <a href="https://www.facebook.com/revival.cabal">FACEBOOK</a>
    <a href="https://discord.com/invite/J7xN8PcsaH">Discord</a>
  </div>
</div>
<h1 style="color:#ff0000"><div><center>Hello Ragezone</center></div></h1>
<div><center><p style="color:#ff0000">Правообладателем сайта является Revival использование его в целях продажи является нарушением</p></center></div>
<div><center<p style="color:#ff0000"><div><center>The copyright holder of the site is Revival the use of it for the purpose of sale is a violation</center></div></p>


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

</body>
</html>
<div><center><iframe width="560" height="315" src="https://www.youtube.com/embed/CejDNR4-DwI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center></div>