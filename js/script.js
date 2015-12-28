
$("#findMyWeather").click(function(event){
	
		event.preventDefault();
		$(".alert").hide();
		
		if ($("#city").val() != ""){
			$.get("scraper.php?city=" + $("#city").val(), function(data){
				
				if (!data || /^\s*$/.test(data)) {
					$("#fail").fadeIn();
					
				} else {
					$("#success").html(data).fadeIn();
					
				}
				
				});
				
		} else {
			
			$("#noCity").fadeIn();
			
		}
	});
	
	
      /*   $("#findWeather").click(function(event) {
            
            event.preventDefault();
            $(".alert").hide();
            
            if ($("#city").val() != "") {
                $.get("scraper.php?city=" + $("#city").val(), function(data) {
                    
                    var offset = data.indexOf("HTTP request failed");

                    if ((data == "") || (offset != -1)) {
                        $("#alertFail").fadeIn();
                    } else {
                        $("#alertSuccess").fadeIn();
                        $("#alertSuccess").html("The weather for <strong>" + $("#city").val() + "</strong> will be : " + data);
                    }
                });
            } else {
                $("#alertCity").fadeIn();
            }                            
        });
                */