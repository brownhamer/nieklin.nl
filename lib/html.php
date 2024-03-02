<?php #=========================================================================

#-------------------------------------------------------------------------------
function startHtmlPage($title) {
    global $PATH_TO_ROOT;
    echo '<!DOCTYPE HTML>'."\n";
    echo '<html>'."\n";
    echo '<head>'."\n";
    echo '<title>'.$title.'</title>'."\n";
    echo '<link rel="stylesheet" type="text/css" href="'.$PATH_TO_ROOT.'/style/main.css">'."\n";
	echo '<style type="text/css">'."\n";
	echo 'body { background-image: url("'.$PATH_TO_ROOT.'/images/Nieklin.nl-background.png"); }'."\n";
	echo '</style>'."\n";
	echo '<!-- ****** faviconit.com favicons ****** -->'."\n";
	echo '<link rel="shortcut icon" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" sizes="16x16 32x32 64x64" href="'.$PATH_TO_ROOT.'/favicon.ico">'."\n";
	echo '<link rel="icon" type="image/png" sizes="196x196" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-192.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="160x160" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-160.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-96.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="64x64" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-64.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-32.png">'."\n";
	echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-16.png">'."\n";
	echo '<link rel="apple-touch-icon" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-57.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="114x114" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-114.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="72x72" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-72.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="144x144" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-144.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="60x60" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-60.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="120x120" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-120.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="76x76" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-76.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="152x152" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-152.png">'."\n";
	echo '<link rel="apple-touch-icon" sizes="180x180" href="'.$PATH_TO_ROOT.'/images/faviconit/favicon-180.png">'."\n";
	echo '<meta name="msapplication-TileColor" content="#FFFFFF">'."\n";
	echo '<meta name="msapplication-TileImage" content="'.$PATH_TO_ROOT.'/images/faviconit/favicon-144.png">'."\n";
	echo '<meta name="msapplication-config" content="'.$PATH_TO_ROOT.'/images/faviconit/browserconfig.xml">'."\n";
	echo '<!-- ****** faviconit.com favicons ****** -->'."\n";
	echo '</head>'."\n";
    echo '<body>'."\n";
}

#-------------------------------------------------------------------------------
function endHtmlPage() {
	global $alt0_url, $dgt_url, $nieklin_url;

	echo '<div id="footer">'."\n";
	echo '<a href="'.$alt0_url.'">Alt0.nl</a> = Hendrik<br />'."\n";
	echo '<a href="'.$dgt_url.'">deGoedeTweeling.net</a> = Rik &amp; Tim<br />'."\n";
	echo '<a href="'.$nieklin_url.'">Nieklin.nl</a> = Sandra<br />'."\n";
	echo '</div>'."\n";
    echo '</body>'."\n";
    echo '</html>'."\n";
}

#-------------------------------------------------------------------------------
$alt0_url    = 'https://alt0.nl';
$dgt_url     = 'https://degoedetweeling.net';
$nieklin_url = 'https://nieklin.nl';

#============================================================================ ?>
