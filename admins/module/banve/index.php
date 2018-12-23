<?php
$group = getIndex("group", "datvemb");

//cho xu ly table tau
if ($group=="sanbay")
{	
	$tau = new Tau();
	$ac = Utils::getIndex("ac", "sanbayshow");
	if ($ac =="edit")
	{
	 include ROOT."/admins/module/banve/sanbayedit.php";
	}
	
	if ($ac=="sanbayshow")
	{
		include ROOT."/admins/module/banve/sanbayadd.php";
		include ROOT."/admins/module/banve/sanbayshow.php";
	}
	
}
