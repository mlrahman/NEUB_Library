<?php include("../include/user_general/book_search_result.php"); ?>
		
<input class="w3-input w3-animate-input w3-border-teal" placeholder="Book or Writer Name or ID" type="text" style="width:100%;margin:10px 0px 0px 0px;" oninput="search_books(this.value)"  autocomplete="off">
<div id="books_suggestion" class="w3-container w3-light-gray w3-bottombar w3-leftbar w3-rightbar w3-border-teal" style="display:none;margin:2px 0px 0px 0px;padding:5px 5px;">
	<table class="w3-table w3-border w3-white w3-tiny" style="width:100%;margin:0px;padding:0px;">
		
		<tr class="w3-cursor w3-hover-teal">
			<td class=" w3-justify w3-border" style="width:10%;width:15px;"> 01 </td>
			<td class=" w3-justify w3-border" style="width:30%;width:100px;"> Programming with C </td>
			<td class=" w3-justify w3-border" style="width:25%;width:60px;"> Byron Gottfried </td>
		</tr>
		<tr class="w3-cursor w3-hover-teal">
			<td class=" w3-justify w3-border" style="width:10%;width:15px;"> 02 </td>
			<td class=" w3-justify w3-border" style="width:30%;width:100px;"> Algorithm Analysis </td>
			<td class=" w3-justify w3-border" style="width:25%;width:60px;"> Thomas H. Coreman </td>
		</tr>
		<tr class="w3-cursor w3-hover-teal">
			<td class=" w3-justify w3-border" style="width:10%;width:15px;"> 03 </td>
			<td class=" w3-justify w3-border" style="width:30%;width:100px;"> Theory and Application of Digital Signal Processing </td>
			<td class=" w3-justify w3-border" style="width:25%;width:60px;"> L. R. Rabiner, R. W. Schafer </td>
		</tr>
	</table>
</div>
<button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-right w3-round w3-black w3-hover-teal w3-margin-top"><i class="fa fa-send"> Submit</i></button>
