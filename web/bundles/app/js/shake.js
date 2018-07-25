
function doShake(){
	var elem = document.getElementById('password');
	var user = document.getElementById('username');
	user.value = '';
	elem.className += " invalid";

	setTimeout(function(){
		elem.className = elem.className.replace(' invalid', '');
	},500);
}	