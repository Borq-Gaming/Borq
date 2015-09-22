<!DOCTYPE html>
<html>
<head>
	<style>
	.form-group {
		position: relative;
		top: 200px;
		width: 50%;
		margin: auto;
		
	}


	
	</style>
	<title>Text</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body ng-app="textBox2">
	<div class="container">
		<form ng-submit="submit()" ng-controller="TextController">
			<div class="form-group">
				<input type="text" class="form-control" name="text" ng-model="text" required>
				<h1>action={{action}}</h1>
			</div>
		</form>
	

	</div> <!--container-->





	

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
<script type="text/javascript" src="/js/textBox2.js"></script>
</body>
</html>


