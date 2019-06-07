<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black w3-card">
		<!-- Current page name in small nav -->
		
		<a href="edit_profile.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-large w3-hide-medium"><i class="fa fa-user-circle-o"></i> Edit Profile</a>
		
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="menu_toggle()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		
		<!-- LOGO TEXT with IMAGE for small -->
		<div class="w3-row w3-hide-medium w3-hide-large">
			<div class="w3-cell w3-left">
				<image src="../images/system/logo.png" alt="NEUB LOGO" class="w3-image" style="width:width:100%;max-width:30px;margin:0px 3px 10px 20px;padding:0px;"><br>
			</div>
			<div class="w3-cell ">
				<p class="w3-xlarge" style="margin:0px 0px;">NEUB LIBRARY</p>
			</div>
		</div>
		<!-- LOGO TEXT with IMAGE for medium and large -->
		<div class="w3-row w3-left w3-hide-small">
			<div class="w3-cell w3-left">
				<image src="../images/system/logo.png" alt="NEUB LOGO" class="w3-image" style="width:width:100%;max-width:50px;margin:12px 5px 12px 20px;padding:0px;"><br>
			</div>
			<div class="w3-cell ">
				<p class="w3-xxxlarge" style="margin:5px 0px;">NEUB LIBRARY</p>
			</div>
		</div>
		
		<div class="w3-right">
			<a href="members.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-users"></i> Members</a>
			<a href="books.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-book"></i> Books</a>
			<a href="borrows.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-edit"></i> Borrows</a>
			<a href="notices.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal w3-hide-small"><i class="fa fa-newspaper-o"></i> Notices</a>
		</div>
	</div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a href="members.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-users"></i> Members</a>
	<a href="books.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-book"></i> Books</a>
	<a href="borrows.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-edit"></i> Borrows</a>
	<a href="notices.php" class="w3-bar-item w3-button w3-padding-large w3-hover-teal" onclick="menu_toggle()"><i class="fa fa-newspaper-o"></i> Notices</a>
</div>


