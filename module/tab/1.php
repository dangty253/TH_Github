<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
?>
<form action="xulytimchuyenbay.php" method="post">
<div class="row">
<table class="table col-md-12 col-xs-4">
<tr>
	<td><h2>Sân bay xuất phát</h2></td>
	<td><h2>Sân bay đến</h2></td>
</tr>
<tr >
	<td>
		<input type="text" value="Hà Nội" name="dxp" class="dropbtn col-md-12 col-xs-4" autocomplete="off">
        <table id="idxp" class="dropdown-content"> 
        	<?php
        	$Cb = new Sanbay();
			$arrCb = $Cb->getall();
        	foreach ($arrCb as $i => $v) {
        		if($i%3==0) echo"<tr>";
        		echo "<td class=\"sbxp\">{$v['TenTinhThanh']}</td>";
        		if($i%3==2) echo"</tr>";
        	}
        	?> 
        </table>	
	</td>
	<td>
		<input  type="text" value="Hồ Chí Minh" name="dd" class="dropbtn col-md-12 col-xs-4" autocomplete="off">
        <table  id="idd" class="dropdown-content"> 
            <?php
        	$Cb = new Sanbay();
			$arrCb = $Cb->getall();
        	foreach ($arrCb as $i => $v) {
        		if($i%3==0) echo"<tr>";
        		echo "<td class=\"sbd\">{$v['TenTinhThanh']}</td>";
        		if($i%3==2) echo"</tr>";
        	}
        	?>    
        </table>
	</td>
</tr>
</table>
<table class="table col-md-12 col-xs-4">
<tr>
		
			<td><h2>Ngày đi</h2></td>
			<td><h2><input type="checkbox" id="cbox" onclick="chieuve(this)">Khứ hồi </h2></td></td>
			<td><h2>Hạng ghế</h2></td>

</tr>
<tr>
		<tr >
			<td><input type="date" class="date col-md-12 col-xs-4" name="datexp" value="<?php echo date('Y-m-d')?>"></td>
			<td ><input type="date" class="date col-md-12 col-xs-4" name="return" value="<?php echo date('Y-m-d')?>" disabled style="visibility: hidden;"></td>
			<td>
		<select name="hangghe" class="hangghe col-md-12 col-xs-4">
  			<option value="Eco">Economy</option>
			<option value="Bus">Business</option>
  			<option value="Fcl">First class</option>
  			<option value="Pcl">Premyum Economy</option>
		</select>
	</td>
		</tr>
		
	
</tr>
<tr>
	<table class="table">
			<tr>
				<td><h2>Người lớn(12+)</h2></td>
				<td><h2>Trẻ em(2-11)</h2></td>
				<td><h2>Em bé(2-)</h2></td>
			</tr>
			<tr class="tuoi">
				<td>
					<input type="button" class="button" name="tru1" value="-" onclick="tinh(this)">
					<p id="tuoi1">1</p>
					<p style="display: none;"><input type="checkbox" id="t1" name="tuoi[]" value="1" checked="checked"></p>
					<input type="button" name="cong1" value="+" onclick="tinh(this)">
				</td>
				<td>
					<input type="button" class="button" name="tru2" value="-" onclick="tinh(this)">
					<p id="tuoi2">0</p>
					<p style="display: none;"><input type="checkbox" id="t2" name="tuoi[]" value="0" checked="checked"></p>
					<input type="button" name="cong2" value="+" onclick="tinh(this)">
				</td>
				<td>
					<input type="button" class="button" name="tru3" value="-" onclick="tinh(this)">
					<p id="tuoi3">0</p>
					<p style="display: none;"><input type="checkbox" id="t3" name="tuoi[] " value="0" checked="checked"></p>
					<input type="button" name="cong3" value="+" onclick="tinh(this)">
				</td>
			</tr>
	</table>
</tr>
<tr>
	<td><input type="submit" name="submitTim" value="TÌM CHUYẾN BAY " class="btn btn-info"></td>
</tr>
</table>
</div>
</form>
<script type="text/javascript">
	function chieuve(elm){
		var d = document.getElementsByClassName('date');
		if(elm.checked==true) 	{
			d[1].disabled=false;
			d[1].style.visibility='visible';
		}
			else {
				d[1].disabled=true;
				d[1].style.visibility='hidden';
		}


	}
	function tinh(elm){
		var name= elm.name;
		var id = "tuoi"+name.substr(-1);
		var gt=parseInt(document.getElementById(id).innerHTML);
		var i=elm.value=="+"?1:-1;
		if (id!="tuoi3" || gt!= parseInt(document.getElementById('tuoi1').innerHTML) || i!=1)
		if (id!="tuoi1" || gt!= 1 || i!=-1)
		if ( gt!= 0 || i!=-1){
			document.getElementById(id).innerHTML=gt+i;
			document.getElementById("t"+name.substr(-1)).value=gt+i;
		}; 
	}

    function myFunction(id) {
        document.getElementById(id).classList.toggle("show");
    }
    var buttons = document.getElementsByClassName('dropbtn');
    var contents = document.getElementsByClassName('dropdown-content');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.name;
            for (var i = 0; i < contents.length; i++) {
                contents[i].classList.remove("show");
            }
            myFunction("i"+id); 
            
        });  
    }
	var sbs = document.getElementsByClassName('sbxp');
	for (var i = 0; i < sbs.length; i++) {
    		sbs[i].addEventListener("click", function(){
    			buttons[0].value=this.innerHTML;
    		});
    	}
    var sbs = document.getElementsByClassName('sbd');
	for (var i = 0; i < sbs.length; i++) {
    		sbs[i].addEventListener("click", function(){
    			buttons[1].value=this.innerHTML;
    		});
    	}       
    window.addEventListener("click", function(){
         if (!event.target.matches('.dropbtn')){
            for (var i = 0; i < contents.length; i++) {
                contents[i].classList.remove("show");
            }
         }
    });
</script>