<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Continguts</title>
</head>
<body>
<ul>
<li><a href="/1/nodejs.html">Node.js</a></li>
<li><a href="/2/php.html">PHP</a></li>
<li><a href="/3/html5-css3.html">HTML5 i CSS3</a></li>
</ul>

<br />

<?php

$content_id=$_GET["id"];

switch($content_id) {
case 1:
echo "<h1>Node.js</h1><p>Article de Node.js</p>";
break;
case 2:
echo "<h1>PHP</h1><p>Article de PHP</p>";
break;
case 3:
echo "<h1>HTML5 i CSS3</h1><p>Article d'HTML5 i CSS3</p>";
break;
default:
echo "<h1>Contingut inexistent</h1>";
}

?>
</body>
</html>