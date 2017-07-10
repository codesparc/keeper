$(document).ready(function(){
  $('#addcategory').on('click', function(e){
  		e.preventDefault();
		var validObj = new validcategory('#category','#parentCat','#isactive:checked');
		var response = validObj.displayErrors();
		var errorElm = $('.errorMsg'),
		    successElm = $('.successMsg');

		if(response.errorMsg){
	    	$('.error').css('display','block');
	    	$(errorElm).html(response.errorMsg);
	    }else{	    
	        console.log(validObj.category);	
	    	$.ajax({
	    		type:'POST',
	    		url: AjaxUrl() + '/dashboard/handlers/addcategory.php',
	    		data:{
	    		  category: validObj.category,
	    		  parentID: validObj.parentCategory,
	    		  isActive: validObj.isActive
	    		},
	    	  success:function(data){
	    	  	console.log("data: "+data);
	    	    if(data==1){
	    	  	 $('.error').css('display','none');	
	    	  	 $('.success').css('display','block'); 
	    	  	 $(successElm).html('Category is updated in database');   	  	 
	    	 	 //window.location = AjaxURL()+'dashboard/admin/addcategory.php';
	    	   	}else{
	    	   	 $('.error').css('display','block');
	    	   	 $(errorElm).html('category already exist');
	    	   	} 	
	    	   }
	    	});
	    }
  });
}); //document.ready() ends here


function validcategory(category,parentCat,isActive){
	this.category = $.trim($(category).val());
	this.parentCategory = $(parentCat).val();
	this.isActive = $(isActive).val();
	this.error = false;
	this.pattern = /([a-zA-Z])/g;

   
	var validName = function (category,error,pattern){	       
		if(!category.length){
			error = 'Please enter category name';
		}else if(!pattern.test(category)){
			error = 'Enter valid category name';		    
		}
		return error?error:'';	
	}

	this.displayErrors = function(){
		return{
			errorMsg: validName(this.category,this.error,this.pattern)
		}
	}
}