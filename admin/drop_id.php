<?php/*
	drop_id.php
	Part of the Open Pastebin project - version 0.4-development
	04/28/2009
	Joshua T - http://digitalundernet.com 

	drop_id.php, queries the database and deletes a row based on ID given to it from drop.php

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<?php
    
    require ( "config.php" );
	require ( "database.php" );
	if ( !isset ( $_POST ['input_ID'] ) ) die ( "Input ID is not set!" );
	$ID_drop = $_POST ['input_ID'];
    database_connect ();
	$query = "DELETE FROM Entries WHERE ID = '$ID_drop'" ;
	$r = mysql_query ($query);
	
	if (mysql_affected_rows() == 1) {
		print '<p>Deleted</p>';
		} else {
		  print "<p>Can't delete because: <b>" . mysqL_error() . "</b></p>";
		}
?>