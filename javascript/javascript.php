<!DOCTYPE html>
<html>
<head>
<title>Javascript Projects</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<nav>
<ul>
<li><a href="javascript.php?counter">Counter App</a></li>
<li><a href="javascript.php?randomnumber">Random Number Generator</a></li>
<li><a href="javascript.php?hexgenerator">Color Generator</a></li>
<li><a href="javascript.php?popup">Pop Up</a></li>
<li><a href="javascript.php?accordion">Accordion</a></li>
<li><a href="javascript.php?hiddensearch">Hidden Search</a></li>
<li><a href="javascript.php?blurryloading">Blurry Loading</a></li>
<li><a href="javascript.php?scrolleffect">Scroll Effect</a></li>
<li><a href="javascript.php?palindrome">Palindrome</a></li>
<li><a href="javascript.php?vowelcounter">Vowel Counter</a></li>
<li><a href="javascript.php?clickcopy">Click To Copy</a></li>
<li><a href="javascript.php?filedownload">File Download</a></li>
<li><a href="javascript.php?weatherapp">Weather App</a></li>
<li><a href="javascript.php?inputcounter">Input Field Counter</a></li>
</ul>
</nav>
<?php
if(isset($_GET['counter'])){
  include('counter.php');
}if(isset($_GET['randomnumber'])){
  include('randomnumber.php');
}if(isset($_GET['hexgenerator'])){
  include('hexgenerator.php');
}if(isset($_GET['popup'])){
  include('modalpopup.php');
}if(isset($_GET['accordion'])){
  include('accordion1.php');
}if(isset($_GET['hiddensearch'])){
  include('hiddensearch.php');
}if(isset($_GET['blurryloading'])){
  include('blurryloading.php');
}if(isset($_GET['scrolleffect'])){
  include('blurryloading.php');
}if(isset($_GET['scrolleffect'])){
  include('ScrollAnimation.php');
}if(isset($_GET['palindrome'])){
  include('palindrome.php');
}if(isset($_GET['vowelcounter'])){
  include('vowelcounter.php');
}if(isset($_GET['clickcopy'])){
  include('clickcopy.php');
}if(isset($_GET['filedownload'])){
  include('filedownload.php');
}if(isset($_GET['weatherapp'])){
  include('weatherapp.php');
}if(isset($_GET['inputcounter'])){
  include('inputcounter.php');
}





?>
</body>
</html>
