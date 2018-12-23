<?php
$group = getIndex("group", "datvemb");

//cho xu ly table tau
if ($group=="sanbay")
{	
		include ROOT."/admins/module/datvemb/sanbayadd.php";
		include ROOT."/admins/module/datvemb/sanbayshow.php";
	
}
if ($group=="admin")
{	
		include ROOT."/admins/module/datvemb/adminadd.php";
		include ROOT."/admins/module/datvemb/adminshow.php";
	
}
if ($group=="chuyenbay")
{	
		include ROOT."/admins/module/datvemb/chuyenbayadd.php";
		include ROOT."/admins/module/datvemb/chuyenbayshow.php";
	
}
if ($group=="giave")
{	
		include ROOT."/admins/module/datvemb/giaveadd.php";
		include ROOT."/admins/module/datvemb/giaveshow.php";
	
}
if ($group=="hangghe")
{	
		include ROOT."/admins/module/datvemb/hanggheadd.php";
		include ROOT."/admins/module/datvemb/hanggheshow.php";
	
}
if ($group=="hangmaybay")
{	
		include ROOT."/admins/module/datvemb/hangmaybayadd.php";
		include ROOT."/admins/module/datvemb/hangmaybayshow.php";
	
}
if ($group=="maybay")
{	
		include ROOT."/admins/module/datvemb/maybayadd.php";
		include ROOT."/admins/module/datvemb/maybayshow.php";
	
}
if ($group=="phieudat")
{	
		include ROOT."/admins/module/datvemb/phieudatadd.php";
		include ROOT."/admins/module/datvemb/phieudatshow.php";
	
}
if ($group=="tuyenbay")
{	
		include ROOT."/admins/module/datvemb/tuyenbayadd.php";
		include ROOT."/admins/module/datvemb/tuyenbayshow.php";
	
}
if ($group=="khachhang")
{	
		include ROOT."/admins/module/datvemb/khachhangadd.php";
		include ROOT."/admins/module/datvemb/khachhangshow.php";
	
}
if ($group=="ve")
{	
		include ROOT."/admins/module/datvemb/veadd.php";
		include ROOT."/admins/module/datvemb/veshow.php";
	
}