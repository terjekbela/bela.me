<?php
    $names= array('Jeb Lee Tark','Earl Jeb Tek','Blake Jeret','Jake El Bert','Kaleb T Jere','Albert Jeek');
    $name = $names[rand(0,5)];
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="google-site-verification" content="rsgjHEaVg9gZyIfCYNxbR5DI2fhHb88xTsYZpAe9VEk" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="bela.css" />
</head>
<body>
    <div class="card">
	<div class="name"><span><?php print $name; ?></span></div>
	<div class="title">Computer Scientist</div>
	<div class="desc">
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	    Donec at sagittis turpis. Nunc ullamcorper aliquam porttitor.
	    Phasellus eu orci leo. Etiam dui magna, pharetra id risus ut,
	    euismod porttitor ligula.
	</div>
	<div class="links">
	    <a href="https://github.com/terjekbela" target="blank">github.com/terjekbela</a><br/>
	    <a href="#">skype</a><br/>
	    <a href="#">public key</a><br/>
	</div>
    </div>
</body>
</html>
