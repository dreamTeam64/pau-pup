function regexMail(){
	document.getElementById('InputEmail').style.color = 'red';
	var entree;
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');//motif,casse ignorée

	entree = document.getElementById("InputEmail").value;
	if (reg.test(entree)) {
		document.getElementById('InputEmail').style.color = 'green';
	}
}

function nomChange(){
	document.getElementById('InputSurname').style.color = 'green';
}

function prenomChange(){
	document.getElementById('InputName').style.color = 'green';
}