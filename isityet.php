<?php
	# Event Timezone
	date_default_timezone_set('America/Chicago');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Are Jay &amp; Britney Married Yet?</title>
<style type="text/css">
	*{margin:0px;}
	html{font-size:62.5%;} /* Setting the font size to 62.5% means that 1em = 10px, 1.2em = 12px and so on. */
	body {color:#111;background-color:#eee;}
	h1, h2, h3 {font-weight:bold;letter-spacing:-1px;font-family:Helvetica,"Helvetica Neue",Arial, sans-serif;text-align: center}
	h1 {font-size:22em;padding-top:30px;}
	h2 {font-size:3em;margin-top:150px;}
	h3 {font-size:2.5em;}
</style>
</head>
<body>
<h2>Are Jay &amp; Britney married yet?</h2>
<h1><?php
			
	# Set date to count down to.
	$hour   = 15;	# eg. 15
	$minute = 00;	# eg. 00
	$day    = 24;	# eg. 24
	$month  = 10;	# eg. 10
	$year   = 2010;	# eg. 2010

	# Calculation for days left.
	$seconds = mktime($hour,$minute,0,$month,$day,$year) - time();
	$days    = ceil((mktime(0,0,0,$month,$day,$year) - time())/86400);
	
	# Is it yet?
	if ($seconds <= 0) {
	  echo "YES";
	} else {
	  echo "NO";
	}
?></h1>
<h3><?php 
	# Display how many days left.
	if ($seconds <= 0) {
		echo "Jay &amp; Britney are married!";
	} elseif ($days <= 1 && date('j') == $day){
		echo "Today&rsquo;s the day Jay &amp; Britney will be married!";
	} elseif ($days <= 1){
		echo "Tomorrow Jay &amp; Britney will be married!";
	} else {
		echo "$days days until Jay &amp; Britney are married.";
	}
?></h3>
<!--Exact days left: <?php echo ($seconds/86400) ?>-->
</body>
</html>
<!-- == www.twe4ked.com == -->