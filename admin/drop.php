<?php require_once('login.php'); ?>

<?php/*
	drop.php
	Part of the Open Pastebin project - version 0.4-development
	
	04/28/2009
	Joshua T - http://digitalundernet.com 

	Feed it the ID of a post you wish to remove. 
	SECURITY WARNING: DON'T KEEP THIS WHERE IT CAN BE ACCESSED!

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<?php 
	require ( "config.php" );
	$sql_connection = @mysql_connect ( $mysql_server, $mysql_username, $mysql_password );
	if ( !$sql_connection ) {
	    die ( "Could not connect to MySQL server!" );
	}
	$tbl_name="Entries"; // Table name
	mysql_select_db("$mysql_dbname")or die("cannot select DB");

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"><title>Pastebin</title>
<style type="text/css" media="all">@import "main.css";</style></head><body>
<div id="Header"><a href="http://pastebin.digitalundernet.com/" title="Digitalundernet.com">PASTEBIN.DIGITALUNDERNET.COM - Pastebin v0.3 Testing</a></div>
<div id="Content">
	<h1>Pastebin v0.3</h1>
	<form method="post" action="drop_id.php">
	            ID to remove:<input type="text" name="input_ID"><br />
				<br><br>
	            <input type="submit" value="Submit">
	        </form><br /><br /><p>Return to the <a href="index.php">index</a></p><br />

</div>
<div id="Menu">
<p>About this, this is an attempt to update the avaliable source code for the Open Pastebin project</p>
		<a href="http://digitalundernet.com" title="">digitalundernet</a><br>
		<a href="http://www.sourceforge.net/projects/openpastebin/">Open Pastebin</a>		
</div>
</body> 