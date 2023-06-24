
<!--<div class="main_menu">

<div class="menuleft"><div class="menutext"><strong><a href="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">Home Page</a></strong></div>
</div>

<div class="menumid"><div class="menutext"><strong><a href="?page=myaccount&cart=<? echo($GLOBALS['cart']) ?>">My Account</a></strong></div>
</div>

<div class="menumid"><div class="menutext"><strong><a href="?page=polices&cart=<? echo($GLOBALS['cart']) ?>">Policies</a></strong></div>
</div>

<div class="menumid"><div class="menutext"><strong><a href="?page=aboutus&cart=<? echo($GLOBALS['cart']) ?>">About Me</a></strong></div>
</div>

<div class="menuright"><div class="menutext"><strong><a href="?page=contact&cart=<? echo($GLOBALS['cart']) ?>">Contact Me</a></strong></div>
</div>

</div>-->

<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="logo navbar-brand " href="https://atnsamsungreal.000webhostapp.com/"><img style="margin-top: -14.5px; height: 50px;" src="img/Logo.jpg"/></a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>"><strong>Home Page</strong></a></li>
        <li><a href="?page=myaccount&cart=<? echo($GLOBALS['cart']) ?>"><strong>My Account</strong></a></li>
        <li><a href="?page=polices&cart=<? echo($GLOBALS['cart']) ?>"><strong>Policies</strong></a></li>
        <li><a href="?page=aboutus&cart=<? echo($GLOBALS['cart']) ?>"><strong>About Us</strong></a></li>
        <li><a href="?page=contact&cart=<? echo($GLOBALS['cart']) ?>"><strong>Contacts</strong></a></li>
        
    </ul>
        <li>
            <div class="search-container">
              <form action="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">
                <input type="text" id="find" placeholder="Search.." name="find">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
        </li>
  </div>
</nav>
