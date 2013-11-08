<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<title>Initstudio</title>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/layout/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/layout/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/layout/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/layout/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="img/layout/favicon.png">
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/webfonts.css" />
<link rel="stylesheet" href="css/grids.css" />
<link rel="stylesheet" href="css/prettify.css" />
<link rel="stylesheet" href="css/presentation.css" />
<link rel="stylesheet" href="css/screen.css" />
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/prettify.js"></script>
<script src="js/lang-css.js"></script>
<script src="js/jquery.initstudio.js"></script>
<?
	if($this->uri->segment(1) == ""){
		echo '<script src="js/jquery.home.js"></script>';
	}else{
		echo '<script src="js/jquery.'.$this->uri->segment(1).'.js"></script>';
	}
?>
</head>
<body>