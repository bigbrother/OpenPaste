
<?php/*
	submit.php
	Part of the Open Pastebin project - version 0.4-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com 

	This is the script that submits the text to the database.
	It then gives the user a link to the entry.

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<html>
    <head>
        <title>Open Pastebin</title>
    </head>
    <body>
        <?php
            require ( "database.php" );
            require ( "highlight.php" );
			require ( "sanitize.php" );
			
			$text = $_POST ['input_text'];
			$lang = $_POST ['input_language'];
			$topic = $_POST ['input_topic'];
            if ( !isset ( $_POST ['input_topic'] ) || empty($_POST ['input_topic']) ) die ( "Input topic is not set!" );
            if ( !isset ( $_POST ['input_text'] ) || empty($_POST ['input_text'])  ) die ( "Input text is not set!" );
         


            database_connect ();
            $id = database_entries ();
            database_insert ( $id, sanitize($lang), $text, sanitize($topic));
            print ( "Entry added.<br>" );
            $url  = "http://" . $_SERVER['HTTP_HOST'] . dirname ( $_SERVER['PHP_SELF'] );
            $url .= "/view.php?id=" . $id;
            print ( "Link:<br><a href=\"" . $url . "\">" . $url . "</a><br / >" );
        ?>
        <p>Or, return to the <a href="index.php">index</a></p>
    </body>
</html>
