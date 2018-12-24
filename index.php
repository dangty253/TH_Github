<?php

include "config/config.php";
include "include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();

?>
<head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ....</title>
</head>
<body> 
<table width="100%"  cellspacing="0">
  <tr>
    <td colspan="3"><h1>ĐẶT VÉ MÁY BAY</h1></td>
  </tr>
  <tr>
  	<td></td>
    <td><?php	 include "include/header.php";?></td>
    <td></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><?php
    include "include/left.php";
	?></td>
    <td width="60%" valign="top" class="mid-box">
    <?php
	include "mod.php";
	?>
    
    </td>
    <td width="20%" valign="top">
    	<div class="rightBox">
        </div>
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>