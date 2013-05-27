<!--meta charset="UTF-8"-->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<!--meta http-equiv="X-UA-Compatible" content="IE=10"-->
<title><?php echo $pagetitle;?></title>
<!--meta name="viewport" content="initial-scale=1.0"-->
<!-- le declaration ci dessous bloque le zoom sur mobile pour soluce fixdown -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!-- <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon"> -->


<!--link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"-->


<?php if (is_file('inc/style_alt.css')) { ?>
	<style>
	<?php
	/**
	 * On-the-fly CSS Compression
	 * Copyright (c) 2009 and onwards, Manas Tungare.
	 * Creative Commons Attribution, Share-Alike.
	 *
	 * In order to minimize the number and size of HTTP requests for CSS content,
	 * this script combines multiple CSS files into a single file and compresses
	 * it on-the-fly.
	 *
	 * To use this in your HTML, link to it in the usual way:
	 * <link rel="stylesheet" type="text/css" media="screen, print, projection" href="/css/compressed.css.php" />
	 */

	/* Add your CSS files to this array (THESE ARE ONLY EXAMPLES) */
	$cssFiles = array(
	  "inc/knacss_reset.css",
	  "inc/style_alt.css",
	  "inc/user_alt.css",
	);

	/**
	 * Ideally, you wouldn't need to change any code beyond this point.
	 */
	$buffer = "";
	foreach ($cssFiles as $cssFile) {
	  $buffer .= file_get_contents($cssFile);
	}

	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

	// Remove space after colons
	$buffer = str_replace(': ', ':', $buffer);

	// Remove whitespace
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

	// Enable GZip encoding.
	/*ob_start("ob_gzhandler");

	// Enable caching
	header('Cache-Control: public');

	// Expire in one day
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');

	// Set the correct MIME type, because Apache won't set it for us
	header("Content-type: text/css");
	*/
	// Write everything out
	echo($buffer);
	?>
	</style>
<?php } else { ?>
	<style>
	<?php
	/**
	 * On-the-fly CSS Compression
	 * Copyright (c) 2009 and onwards, Manas Tungare.
	 * Creative Commons Attribution, Share-Alike.
	  */

	$buffer = '';
	$buffer .= '
	<?php include("inc/knacss_reset.css"); ?> 
	';
	$buffer .= '
	<?php include("inc/style_alt.css"); ?>
	';
	$buffer .= '
	<?php include("inc/user_alt.css"); ?>
	';

	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

	// Remove space after colons
	$buffer = str_replace(': ', ':', $buffer);

	// Remove whitespace
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

	echo($buffer);
	?>
	</style>
<?php } ?>


<!--
<?php// if (is_file('inc/user_alt.css')) { ?>
	<link type="text/css" rel="stylesheet" href="inc/user_alt.css?version=<?php //echo $version;?>" />
<?php// } ?>
-->

<!-- soluce for bug android http://code.google.com/p/android/issues/detail?id=15437-->
<script type="text/javascript">function scrollid(element){   var ele = document.getElementById(element);   window.scrollTo(ele.offsetLeft,ele.offsetTop); }</script>









