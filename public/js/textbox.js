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
    }]);
})();