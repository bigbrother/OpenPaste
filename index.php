
<?php/*
	index.php
	Part of the Open Pastebin project - version 0.4-development
	10/8/2004
	Ville Särkkälä - villeveikko@users.sourceforge.net
	
	Changes made by
	04/28/2009
	Joshua T - http://digitalundernet.com 

	Index Page

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>


<?      
require ( "config.php" );
$sql_connection = @mysql_connect ( $mysql_server, $mysql_username, $mysql_password );
if ( !$sql_connection ) {
    die ( "Could not connect to MySQL server!" );
}
$tbl_name="Entries"; // Table name
mysql_select_db("$mysql_dbname")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name ORDER BY ID DESC";
$result=mysql_query($sql);
//End connect block
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"><title>Pastebin</title>
<style type="text/css" media="all">@import "main.css";</style></head><body>
<div id="Header"><a href="http://pastebin.digitalundernet.com/" title="Digitalundernet.com">PASTEBIN.DIGITALUNDERNET.COM - Pastebin v0.3 Testing</a></div>
<div id="Content">
	<h1>Pastebin v0.3</h1>
	</div>
<!-- HTML table -->

<table width="50%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="pastebin.php"><strong>Create New Topic</strong> </a></td>
</tr>
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong><font color="#000">ID#</font></strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong><font color="#000">Topic</font></strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong><font color="#000">Date</font></strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#E6E6E6"><? echo $rows['ID']; ?></td>
<td bgcolor="#E6E6E6"><a href="view.php?id=<? echo $rows['ID']; ?>"><? echo $rows['Topic']; ?></a><BR></td>
<td align="center" bgcolor="#E6E6E6"><? echo $rows['Date']; ?></td>
</tr>

<?php
// Exit looping and close connection
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="pastebin.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</p>	
</div>
<div id="Menu">
<p>About this, this is an attempt to update the avaliable source code for the Open Pastebin project</p>
		<a href="http://digitalundernet.com" title="">digitalundernet</a><br>
		<a href="http://www.sourceforge.net/projects/openpastebin/">Open Pastebin</a><br>		
		<a href="login.php" title="admin">Admin Area</a><br>
</div>
</body></html>
