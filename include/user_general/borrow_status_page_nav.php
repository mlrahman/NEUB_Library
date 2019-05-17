<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black w3-card">
		<!-- Current page name in small nav -->
		<a href="borrow_status.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-large w3-hide-medium"><i class="fa fa-edit"></i> Borrow Status</a>
			
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="menu_toggle()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<div class="w3-right">
			<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-home"></i> Home</a>
			<a href="book_list.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-book"></i> Book List</a>
			<a href="borrow_status.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-teal"><i class="fa fa-edit"></i> Borrow Status</a>
			<a href="index.php?#about_us" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-hover-teal"><i class="fa fa-newspaper-o"></i> About Us</a>
		</div>
	</div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-home"></i> Home</a>
	<a href="book_list.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-book"></i> Book List</a>
	<a href="index.php?#about_us" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-newspaper-o"></i> About Us</a>
 </div>