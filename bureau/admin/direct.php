<?php
/*
 $Id: direct.php,v 1.2 2003/06/10 06:45:16 root Exp $
 ----------------------------------------------------------------------
 AlternC - Web Hosting System
 Copyright (C) 2002 by the AlternC Development Team.
 http://alternc.org/
 ----------------------------------------------------------------------
 Based on:
 Valentin Lacambre's web hosting softwares: http://altern.org/
 ----------------------------------------------------------------------
 LICENSE

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License (GPL)
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 To read the license please visit http://www.gnu.org/copyleft/gpl.html
 ----------------------------------------------------------------------
 Original Author of file: Benjamin Sonntag
 Purpose of file: Redirect the user (show the main frameset) after a
 form submit
 ----------------------------------------------------------------------
*/
require_once("../class/config.php");

if (!$mem->checkid()) {
        $error=$err->errstr();
	include("index.php");
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<title>Administration de <?php echo $host ?></title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<frameset cols="225px,*">
	<frame src="menu.php" name="left">
	<frame src="<?php echo $page ?>" name="right">
<noframes>
	Votre navigateur doit supporter les cadres.<br />
	Your browser must support frames
</noframes>
</frameset>
</html>