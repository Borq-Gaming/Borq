
	$(document).ready(function() {
		$('#FakeTextbox, #Score').click(function() {
			$('#RealTextbox').focus();
		});
		$('#RealTextbox').keyup(function(e) {
			var code = (e.keyCode ? e.keyCode : e.which);
			// Enter key?
			if(code == 13) {
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

var action = document.getElementById("RealTextbox").value;

// MOVE
if (action == "move north") {

} else if (action == "move south") {

} else if (action == "move east") {

} else if (action == "move west") {

} else {
	alert("not a valid command");
}

//TAKE
if (action == "take lantern") {

} else if (action == "take note") {

} else if (action == "take wine") {

} else if (action == "take sword") {

} else if (action == "take key") {

} else if (action == "take armor") {

} else if (action == "take crown") {

} else if (action == "take queen sleeping clothing") {

} else if (action == "take potion invisibility") {

} else if (action == "take potion strength") { 

} else if (action == "take potion regeneration") { 

} else if (action == "take apple") {

} else if (action == "take bread") {

} else {
	alert("not a valid command");
}

// HIT
if (action == "hit") {

} else {
	alert("not a valid command");
}

// EAT
if (action == "eat apple") {

} else if (action == "eat bread") {

} else {
	alert("not a valid command");
}

// USE
if (action == "use lantern") {

} else if (action == "use note") {

} else if (action == "use wine") {

} else if (action == "use key") {

} else if (action == "use queen sleeping clothing") {

} else if (action == "use lantern") {

} else if (action == "use potion invisibility") {

} else if (action == "use potion regeneration") {

} else if (action == "use potion strength") {

} else {
	alert("not a valid command");
}

	

 

