$(document).ready(function(){
	$('#login').on('click', function(e){
		e.preventDefault();		
		//call to form validations
		var login = new validate('#email','#password');
		var errorElem = $('.errorMsg'),
		    successElem = $('.successMsg');		   
		    
		var response = login.displayError();
		if(response.emailErrorMsg){
			$('.error').css('display','block');
			$(errorElem).html(response.emailErrorMsg);			
		}else if(response.passwordErrorMsg){
			$('.error').css('display','block');
			$(errorElem).html(response.passwordErrorMsg);			
		}else{			
			$.ajax({
				type: 'POST',
				url : AjaxUrl() + '/includes/login.php',
				data: {
				  email: login.email,
				  password: login.password
				},			
				success: function(data){					   				
					if(data==1){
						$('.error').css('display','none');
						//console.log(AjaxUrl()+'/dashboard/admin');
						window.location = AjaxUrl()+'/dashboard/admin';
					}else{
					  $('.error').css('display','block');
					  $('.success').css('display','none');	  
					  $(errorElem).html('Invalid Login');		
					}
				}				
			});

			return false;    		   
		}
	
		
	});
});



//Login validation function
function validate(emailId, passwordId){

	this.email = $.trim($(emailId).val());
	this.password = $.trim($(passwordId).val());
	this.error = false;
	this.pattern = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	

	var validEmail = function (email, pattern, error){				
		if(!email.length){
			error = "Enter your email";
		}else if(!pattern.test(email)){
			error = "Enter valid email";
		}				
		return (error ? error: '');		
	}

	var validPassword = function(password, error){

		if(!password.length){
			error = "Enter your password";
		}else if(password.length < 8){
			error = "Password length atleast 8 characters";	
		}
		//console.log('Error password', error);
		return (error ? error: false);		
	}

	this.displayError = function(){
		//return if there is error		 			
		return {
			emailErrorMsg: validEmail(this.email, this.pattern, this.error),
			passwordErrorMsg: validPassword(this.password, this.error)
		}
	}
};
