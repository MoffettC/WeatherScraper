<!doctype html>
<html>
	<head>
		<title>Weather Scraper</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
			 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js" async></script>
		
		
	</head>
			
			
	<body>
			
	<div id="container">
		
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center" >
			
			<h1 class="center">Weather Scrapper</h1>
			<p class="lead center">Enter you center below to get a forecast of your weather.</p>
			
			<form>
				<div class="form-group">
					<input type="text" class="form-control" name="city" id="city" 
									placeholder="Eg. London, Paris, New York..." /> 
									
				</div>
				
				<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
				
			</form>
			
			<div id="success" class="alert alert-success">Success!</div>
			
			<div id="fail" class="alert alert-danger">Could not find weather data for that city.
				Please try again.</div>
				
			<div id="noCity" class="alert alert-danger">Please enter a city!</div>
			
			
			</div>
		
		</div>
				
				
				
	</div>
				
				

	</body>
	
</html>
