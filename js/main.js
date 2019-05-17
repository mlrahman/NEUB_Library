// Used to toggle the menu on small screens when clicking on the menu button
function menu_toggle() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function show_books(id)
{
	var x=document.getElementById(id).style.display;
	var element=document.getElementById(id+'x');
	if(x=='block'){
		document.getElementById(id).style.display='none';
		element.classList.remove("fa-minus-square");
		element.classList.add("fa-plus-square");
	}
	else
	{
		document.getElementById(id).style.display='block';
		element.classList.remove("fa-plus-square");
		element.classList.add("fa-minus-square");
	}
}

function search_books(ele)
{
	var value=ele;
	//console.log(value);
	if(value=="")
	{
		document.getElementById('books_suggestion').style.display='none';
	}
	else
	{
		document.getElementById('books_suggestion').style.display='block';
	}
}	
	