<?php/*
	login.php
	Part of the Open Pastebin project - version 0.4-development
	04/28/2009
	Joshua T - http://digitalundernet.com

	This is the login page for ALL secure items in OpenPastebin. These include Drop.php, empty.php, and admin.php
	No cookies are stored, no database entry, Change the value of $Password in this file to change the password

	Released under GNU GENERAL PUBLIC LICENSE
	Version 2, June 1991 -  or later
*/?>

<?php

$Password = 'demo'; // Set your password here

   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      
      if ($pass != $Password) {
         showForm("Wrong password");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error="LOGIN"){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"><title>Pastebin</title>
<style type="text/css" media="all">@import "main.css";</style></head><body>
<div id="Header"><a href="http://pastebin.digitalundernet.com/" title="Digitalundernet.com">PASTEBIN.DIGITALUNDERNET.COM - Pastebin v0.3 Testing</a></div>
<div id="Content">
	<h1>Pastebin v0.3</h1>
      <div class="caption"><?php echo $error; ?></div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
        Password:
        <table>
          <tr><td><input class="text" name="passwd" type="password"/></td></tr>
          <tr><td align="center"><br/>
             <input class="text" type="submit" name="submit_pwd" value="Login"/>
          </td></tr>
        </table>  
      </form>
</div>
<div id="Menu">
<p>About this, this is an attempt to update the avaliable source code for the Open Pastebin project</p>
		<a href="http://digitalundernet.com" title="">digitalundernet</a><br>
		<a href="http://www.sourceforge.net/projects/openpastebin/">Open Pastebin</a>		
</div>
</body>     

<?php   
}
?>