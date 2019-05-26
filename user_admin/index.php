<?php
	include("../include/user_admin/header.php");
?>
		<?php
			include("../include/user_admin/login_nav.php");
		?>
		<div class="w3-content w3-white w3-center" style="max-width:2000px;margin-top:80px;">
			<div class="w3-container" style="width:100%;max-width: 600px;margin: 0 auto;">
				<!-- For Medium and Large Screen -->
				<div class="w3-card-4 w3-hide-small w3-round-large w3-border w3-border-dark-gray w3-topbar w3-bottombar w3-leftbar w3-rightbar" style="margin:60px 0px;width:100%;">
					</br>
					<p class="w3-xxlarge w3-bold w3-bottombar w3-border-teal" style="width:100%;max-width:500px;margin:0 auto;"> Admin Login </p>
					<div class="w3-container w3-leftbar w3-rightbar" style="width:100%;max-width:500px;margin: 0 auto;">
						<div class="w3-container w3-left-align" style="width:100%;margin:30px 0px 30px 0px;">
							<label class="w3-large">Username or Email</label></br>
							<input class="w3-input w3-animate-input w3-border-teal w3-round" type="text" style="width:380px;margin:10px 0px;" autocomplete="off">
							<label class="w3-large">Password</label></br>
							<input class="w3-input w3-animate-input w3-border-teal w3-round" type="password" style="width:380px;margin:10px 0px;" autocomplete="off">
							<input type="checkbox" class="w3-left" style="margin-top:20px;"/><p class="w3-left w3-large" style="margin:12px 0px 0px 10px;">Remember Me</p>
							<a href="dashboard.php"><button class="w3-button w3-right w3-round w3-black w3-hover-teal" style="margin-top:20px;"><i class="fa fa-sign-in"> Log In</i></button></a>
						</div>
					</div>
					<div class="w3-topbar w3-border-teal" style="width:100%;max-width:500px;margin: 0 auto;"></div>
					</br></br>
				</div>
				<!-- For Small screen -->
				<div class="w3-card-4 w3-hide-large w3-hide-medium w3-round-large w3-border w3-border-dark-gray w3-topbar w3-bottombar w3-leftbar w3-rightbar" style="margin:50px 0px;width:100%;">
					</br>
					<p class="w3-xxlarge w3-bold w3-bottombar w3-border-teal" style="width:100%;max-width:500px;margin:0 auto;"> Admin Login </p>
					<div class="w3-container w3-leftbar w3-rightbar" style="width:100%;max-width:500px;margin: 0 auto;">
						<div class="w3-container w3-left-align" style="width:100%;margin:30px 0px 30px 0px;">
							<label class="w3-large">Username or Email</label></br>
							<input class="w3-input w3-animate-input w3-border-teal w3-round" type="text" style="width:250px;margin:10px 0px;" autocomplete="off">
							<label class="w3-large">Password</label></br>
							<input class="w3-input w3-animate-input w3-border-teal w3-round" type="password" style="width:250px;margin:10px 0px;" autocomplete="off">
							<input type="checkbox" class="w3-left" style="margin-top:20px;"/><p class="w3-left w3-large" style="margin:12px 0px 0px 10px;">Remember Me</p>
							<a href="dashboard.php"><button class="w3-button w3-right w3-round w3-black w3-hover-teal" style="margin-top:20px;"><i class="fa fa-sign-in"> Log In</i></button></a>
						</div>
					</div>
					<div class="w3-topbar w3-border-teal" style="width:100%;max-width:500px;margin: 0 auto;"></div>
					</br></br>
				</div>
				
			</div>
		</div>

<?php
	include("../include/user_admin/footer.php");
?>