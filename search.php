<? // require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
<!--    <div class="submenu">
    <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div>
    <div class="menubg1">
    
    
	
 <div class="findform">
    	<BR />
    	<form method="post" action="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">
			<input type="text" name="find" id="find" title="Search" /><br />
            <input type="submit" value="Search" />
        </form>
	</div>
<div class="findform">
    <form action="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
    
	</div>
    <div>
    <img src="img/sub_menu1_bottom.png" width="207" height="11" /></div>
    </div>-->
