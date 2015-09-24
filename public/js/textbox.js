"use strict";

(function() {
    var app = angular.module("textBox", []);

    app.controller("textController", ["$log", "$http", function($log, $http) {
        $http.get("/test").then(function(data) {
            $log.info("Ajax request completed successfully!");

            $log.debug(data);
        }, function(response) {
            $log.error("Ajax request failed for some reason!");

            $log.debug(response);
        });

        // $http.post("textbox.php", {
        //     // key1: 
        //     // key2: 
        // }).then(function() {
        //     $log.info("Info was sent to the server successfully!")
        // }, function(response) {
        //     $log.error("Ajax request failed for some reason!");

        //     $log.debug(response);
        // });

        function determineCommand(command, value, valueB) {
        if (!valueB) {
            valueB = null;
        }

            switch (command) {
                case "move":
                // return ajaxMove(value);
                console.log('move');
                break;
                case "eat":
                // return ajaxEat(value);
                console.log('eat');
                break;
                case "hit":
                // return ajaxHit(value);
                console.log('hit');
                break;
                case "use":
                // return ajaxUse(value, valueB);
                console.log('use');
                break;
                case "take":
                // return ajaxTake(value);
                console.log('take');
                break;
                default: "command does not exit";
            }
        }

        function userInput() {
            var input = $("#RealTextbox").val();
            var selectInput = input.split (' ');
            var firstAction = selectInput[0];
            var secondAction = selectInput[1];
            if (selectInput[2]) {
                determineCommand(firstAction, secondAction, selectInput[3])
            } else {
                determineCommand(firstAction, secondAction);

            }
        }

        function ajaxMove(value) {
            $http.post("move/direction", {
            user_id: id,
            direction: value
            
            }).then(function() {
                $log.info("Info was sent to the server successfully!")
            }, function(response) {
                $log.error("Ajax request failed for some reason!");

                $log.debug(response);
            });
        }

        function ajaxTake(value) {
            $http.post("take/item", {
            user_id: id,
            take_item: value
            
            }).then(function() {
                $log.info("Info was sent to the server successfully!")
            }, function(response) {
                $log.error("Ajax request failed for some reason!");

                $log.debug(response);
            });
        }

        function ajaxHit(value) {
            $http.post("hit/fight", {
            user_id: id,
            
            
            }).then(function() {
                $log.info("Info was sent to the server successfully!")
            }, function(response) {
                $log.error("Ajax request failed for some reason!");

                $log.debug(response);
            });
        }

        function ajaxEat(value) {
            $http.post("eat/item", {
            user_id: id,
            item: value
            
            }).then(function() {
                $log.info("Info was sent to the server successfully!")
            }, function(response) {
                $log.error("Ajax request failed for some reason!");

                $log.debug(response);
            });
        }

        function ajaxUse(value1, value2) {
            $http.post("use/items", {
            user_id: id,
            item1: value1,
            item2: value2
            
            }).then(function() {
                $log.info("Info was sent to the server successfully!")
            }, function(response) {
                $log.error("Ajax request failed for some reason!");

                $log.debug(response);
            });
        }



    }]);


})();  