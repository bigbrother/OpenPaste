
<?php/*
	pastebin.php
	Part of the Open Pastebin project - version 0.4-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com 	

	This is the main/index page. It allows the user to enter
	the text, and then goes to submit.php.

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"><title>Pastebin</title>
<style type="text/css" media="all">@import "main.css";</style></head><body>
<div id="Header"><a href="http://digitalundernet.com/" title="Digitalundernet.com">DIGITALUNDERNET.COM - Pastebin v0.3 Testing</a></div>
<div id="Content">
	<h1>Pastebin v0.3</h1>
	<center>
    
        <?php
	    require ( "geshi/geshi.php" );
            //require ( "highlight.php" );
            //require ( "xmlparser.php" );
            //$xml_parser = new CXmlParser ();
            //$document = $xml_parser->parse ( "rules.xml" );
        ?>
        <form method="post" action="submit.php">
            Topic:<input type="text" name="input_topic"><br />
            
            Select language:<br>
            <select name="input_language">
            <?php
                

	//show the popular ones
	foreach ($CONF['all_syntax'] as $code=>$name)
	{
		if (in_array($code, $CONF['popular_syntax']))
		{
			$sel=($code==$page['current_format'])?"selected=\"selected\"":"";
			echo "<option $sel value=\"$code\">$name</option>";
		}
	}

	echo "<option value=\"text\">----------------------------</option>";

	//show all formats
	foreach ($CONF['all_syntax'] as $code=>$name)
	{
		$sel=($code==$page['current_format'])?"selected=\"selected\"":"";
		if (in_array($code, $CONF['popular_syntax']))
			$sel="";
		echo "<option $sel value=\"$code\">$name</option>";
	
	}
	?>

</center>
            </select><br>
            Enter text here:<br>
            <textarea name="input_text" rows="25" cols="80"></textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form><br /><br /><p>Return to the <a href="index.php">index</a></p><br />
        
	</p>	
</div>
<div id="Menu">
<p>About this, this is an attempt to update the avaliable source code for the Open Pastebin project</p>
		<a href="http://digitalundernet.com" title="">digitalundernet</a><br>	
		<a href="http://www.sourceforge.net/projects/openpastebin/">Open Pastebin</a>	
</div>
</body></html>
