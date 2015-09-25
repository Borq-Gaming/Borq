"use strict";

(function() {
	var app = angular.module("textBox", []);

	app.controller("textController", ["$log", "$http", function($log, $http) {
		$(document).ready(function() {
			$('#FakeTextbox, #Score, #PastCommands').click(function() {
				$('#RealTextbox').focus();
			});
			$('#RealTextbox').keyup(function(e) {
				var code = (e.keyCode ? e.keyCode : e.which);
				// Enter key?
				if(code == 13) {
					userInput();
					// Don't put a newline if this is the first command
					if ($('#PastCommands').html() != '') {
						$('#PastCommands').append('<br />');
					}
					$('#PastCommands').append($(this).val());
					$(this).val('');
					$('#FakeTextbox').text('');
				} else {
					$('#FakeTextbox').html($(this).val());
				}
			});
			$('#RealTextbox').focus();
		});

		function userInput() {
			console.log("testtest");
			var input = $("#RealTextbox").val();
			console.log(input);
			var selectInput = input.split (' ');
			var firstAction = selectInput[0];
			var secondAction = selectInput[1];
			if (selectInput[2]) {
				determineCommand(firstAction, secondAction, selectInput[3])
			} else {
				determineCommand(firstAction, secondAction);
			}
		}

		function determineCommand(command, value, valueB) {
		if (!valueB) {
			valueB = null;
		}
			switch (command) {
				case "move":
					return ajaxMove(value);
				break;
				case "eat":
					return ajaxEat(value);
				break;
				case "hit":
					return ajaxHit(value);
				break;
				case "use":
					return ajaxUse(value, valueB);
				break;
				case "take":
					return ajaxTake(value);
				break;
				default: "command does not exit";
			}
		}

		function display(text) {
			$('#PastCommands').append('<br />');
			$('#PastCommands').append(text);
		}

		function ajaxMove(value) {
			$http.post("move/" + value).then(function(data) {
				$log.info("Info was sent to the server successfully!");
				display(data.data);
			}, function(response) {
				$log.error("Ajax request failed for some reason!");

				$log.debug(response);
			});
		}

		function ajaxTake(item) {
			$http.post("take/take", {
				thing: item
			}).then(function(data) {
				$log.info("Info was sent to the server successfully!");
				display(data.data);
			}, function(response) {
				$log.error("Ajax request failed for some reason!");

				$log.debug(response);
			});
		}

		function ajaxHit(value) {
			$http.post("hit/" + value).then(function() {
				$log.info("Info was sent to the server successfully!");
			}, function(response) {
				$log.error("Ajax request failed for some reason!");

				$log.debug(response);
			});
		}

		function ajaxEat(item) {
			$http.post("eat/food", {
				food: item
			}).then(function(data) {
				$log.info("Info was sent to the server successfully!");
				display(data.data);
				console.log(data)
			}, function(response) {
				$log.error("Ajax request failed for some reason!");

				$log.debug(response);
			});
		}

		function ajaxUse(value1, value2) {
			$http.post("use/" + value).then(function() {
				$log.info("Info was sent to the server successfully!");
			}, function(response) {
				$log.error("Ajax request failed for some reason!");

				$log.debug(response);
			});
		}



	}]);
})();  