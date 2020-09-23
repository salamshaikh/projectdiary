$( function() {
	

	$('#rollno').on('blur',function(){
		if(!/(\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(ME)|(DME)|(CE)|(DCE)|(CES)|(DCES))\d{2,3})/i.test(this.value)){
			$('#rollno').css("border", "3px solid red");
			this.value="";
			$(this).focus();
			
		}
	});
	
	$('#sname').on('keypress',function(){
			if(/[^a-zA-Z ]/.test(this.value)){
				alert("Invalid Name. Only Alphabets and Spaces are allowed");
				this.value= "";
				$(this).focus();
				return false;
			}
	});

	$('#phone').on('blur',function(){
		if(/[^0-9]/.test(this.value)){
			alert("Invalid Mobile No. It should be between 0-9 and having 10 numbers");
			this.value = "";
			$(this).focus();
		}
	});

	$('#email').on('blur',function(){
		if(/[^0-9A-Za-z.@_]/.test(this.value)){
			alert("Invalid Email");
			this.value="";
			$(this).focus();
		}
	});
});