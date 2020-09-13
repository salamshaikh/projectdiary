function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Email is invalid! Only characters a-z  A-Z  0-9  @  . _ are allowed.");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("Email is invalid! a-z or A-Z characters are must");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("Email is invalid! You are missing @");
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value)){
		alert("Email is invalid! .domain name is missing");
		element.value="";
		return false;
	}
	return true;
}

function checkUsername(e){
	var element=e.target;
	
	if(/[^a-zA-Z]/.test(element.value)){
		alert("Invalid Username. Use only a-z or A-Z");
		element.value="";
		return false;
	}
	return true;
}

function checkMobile(e){
	var element=e.target;
	if(/[^0-9]/.test(element.value)){
		alert("Invalid Mobile No. Use only 0-9");
		element.value="";
		return false;
	}
	return true;
}

function submitForm(e){
	e.preventDefault();
	if(document.getElementById('email').value!="" && document.getElementById('mobile').value!="" && document.getElementById('username').value!="" ){
		var register=document.getElementsByClassName('form-signin');
		register[0].innerHTML = "<h3>Thank You for registering. <br>We wil get to you shortly</h3>";	
	}
	
}


var username = document.getElementById('username');
username.addEventListener('blur',checkUsername,false);

var mobile = document.getElementById('mobile');
mobile.addEventListener('blur',checkMobile,false);

var email = document.getElementById('email');
email.addEventListener('blur',checkEmail,false);

var submit = document.getElementById('submit-btn');
//submit.addEventListener('click',submitForm,false);