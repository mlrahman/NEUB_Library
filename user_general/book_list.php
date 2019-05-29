<?php
	include("../include/user_general/header.php");
?>
		
		<?php include("../include/user_general/book_list_page_nav.php"); ?>
		<!-- Page content -->
		<div class="w3-content w3-white" style="max-width:2000px;margin-top:90px;min-height:320px;height:auto;">
			<div class="w3-row w3-container">
				<div class="w3-third w3-container w3-padding-small" style="margin:0px;padding:0px;">
					<p style="margin:0px;" class="w3-xxlarge"> Search For Books </p>
					<p style="margin:0px 0px 0px 0px;width:50px;" class="w3-bottombar w3-border-teal"> </p>
					<?php include("../include/user_general/book_search.php"); ?>
				</div>
				
				<p class="w3-hide-medium w3-hide-large"> &nbsp </p>
					
				<div class="w3-twothird w3-container w3-padding-small" style="margin:0px;padding:0px;">
					<p style="margin:0px;" class="w3-xxlarge"> Book List </p>
					<p style="margin:0px 0px 0px 0px;width:50px;" class="w3-bottombar w3-border-teal"> </p>
				
					<?php include("../include/user_general/dept_book_list.php"); ?>
				</div>

				
			</div>
			<!-- Clear -->
			<br>
		</div>

<?php
	include("../include/user_general/footer.php");
?>