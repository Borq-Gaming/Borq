<!DOCTYPE html>
<html>
<head>
	<title>Text Box Test</title>

	<style>
	#RealTextbox {
		position: relative;
		left: -5000px;
	}
	#textBox {
		width: 40%;
		position: relative;
		margin: 25px auto;
	}
	#PastCommands {
		border: red 1px solid;
	}
	#FakeTextbox {
		border: black 1px solid;
	}
	</style>
</head>
<body ng-app="textBox">
	<div ng-controller="textController">
	<div id="textBox">
	<div id="PastCommands"></div>
	<span id="FakeTextbox"></span><span id="Score">_</span>
	<input type="text" id="RealTextbox" />
	</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
<script src="/js/textbox.js"></script>

</body>
</html>