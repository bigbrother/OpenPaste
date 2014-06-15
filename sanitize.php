
<?php/*
	sanitize.php
	Part of the Open Pastebin project - version 0.4-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com 

	This script sanitizes user input for XSS attacks.

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>


<?
function sanitize($input) 
{
	//Never EVER trust user input
	$search = array(
			'@<\s*script[^>]*?>.*?<\s*/\s*script\s*>@si', // Strip out javascript
			'@<\s*[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
			'@<\s*style[^>]*?>.*?<\s*/\s*style\s*>@siU', // Strip style tags properly
			'@<![\s\S]*?–[ \t\n\r]*>@' // Strip multi-line comments
			);
	$output = preg_replace($search, ”, $input);
	return $output;
}
?>