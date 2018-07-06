function checkForm(){

	//mengambil nilai form
	var name = document.getElementById("username1").value;
	var password = document.getElementById("password1").value;
	var email = document.getElementById("email1").value;
	var website = document.getElementById("website1").value;

	if(name == '' || password == '' || email == '' || website == ''){
		alert("Form tidak boleh kosong");
	} else {
		var username1 = document.getElementById("username");
		var password1 = document.getElementById("password");
		var email = document.getElementById("email");
		var website1 = document.getElementById("website");

		//Check value form
		//misal :
		//document.getElementById("demo").innerHTML = "Paragraph changed!";
		//artinya ganti konten html Paragraph dengan id demo
		if(username1.innerHTML == 'Harus Lebih dari 3 Huruf' || password1.innerHTML == 'Password terlalu pendek' || email1.innerHTML == 'Penulisan email salah' || website1.innerHTML == 'Penulisan website salah'){
			alert('Informasi harus valid!!');
		} else {
			document.getElementById("frm_vld").submit();
		}
	}
}

function validate(field, query){
	var xmlhttp;
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState != 4 && xmlhttp.status == 200){
			document.getElementById(field).innerHTML = "Cek Validasi..";
		} else if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
		}
	}
	//xmlhttp.open("GET","..index.php/login/validation/?field=" + field + "&query=" + query, false);
	xmlhttp.open("GET","index.php/login/ok");
	xmlhttp.send();
}
