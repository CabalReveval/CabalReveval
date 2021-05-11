.menu {
	height:42px;
	padding:0 0 0 16px;
	background:url(images/spacer.png) repeat;
}
.menu li {
	display:block;
	float:left;
}

.menu li.active {
	background: #000011;
}

.menu a {
	color:#FFF;
	display:block;
	line-height:42px;
	text-decoration:none;
	padding:0 14px;
}
.menu a:hover {
	background:url(images/spacer.png) repeat;
}
<?php
$i = 0;
$array_menu = array();

$array_menu[$i]['url']='/';
$array_menu[$i++]['name']='�������';

$array_menu[$i]['url']='/razdel_1/';
$array_menu[$i++]['name']='�������� ������� 1';

$array_menu[$i]['url']='/razdel_2/';
$array_menu[$i++]['name']='�������� ������� 2';


$array_menu[$i]['url']='/razdel_N/';
$array_menu[$i++]['name']='�������� ������� N';

echo "<ul>\n";
for ($i=0;$i<count($array_menu);$i++)
{
       echo ($_SERVER["REQUEST_URI"] == $array_menu[$i]['url']) ? '<li class="active">': '<li>';
       echo "<a href=\"".$array_menu[$i]['url']."\">".$array_menu[$i]['name']."</a></li>\n";
}
echo "</ul>";
?>