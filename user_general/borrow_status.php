<?php
	include("../include/user_general/header.php");
?>
		
		<?php include("../include/user_general/borrow_status_page_nav.php"); ?>
		<!-- Page content -->
		<div class="w3-content w3-white" style="max-width:2000px;margin-top:46px;">
			<div class="w3-row w3-container w3-padding-large">
				
				
				<div class=" w3-container w3-third">
					<p style="margin:0px;" class="w3-xxlarge"> User Borrow Status </p>
					<p style="margin:0px 0px 0px 0px;width:50px;" class="w3-bottombar w3-border-teal"> </p>
					
					<input class="w3-input w3-animate-input w3-border-teal" placeholder="NEUB ID Card No" type="text" style="width:100%;margin:10px 0px;" autocomplete="off">
					<input class="w3-input w3-animate-input w3-border-teal" placeholder="NEUB Library Card No" type="text" style="width:100%;margin:10px 0px;" autocomplete="off">
					<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-right w3-round w3-black w3-hover-teal"><i class="fa fa-send"> Submit</i></button>
					
				</div>
				
				<?php include("../include/user_general/user_borrow_status.php"); ?>
				
				
				<div class="w3-container w3-twothird">
					<p style="margin:0px;" class="w3-xxlarge"> Borrow Status </p>
					<p style="margin:0px 0px 0px 0px;width:50px;" class="w3-bottombar w3-border-teal"> </p>			
					<?php include("../include/user_general/dept_borrow_status.php"); ?>
				</div>
				
			</div>
		
		
			<br>
		</div>

<?php
	include("../include/user_general/footer.php");
?>