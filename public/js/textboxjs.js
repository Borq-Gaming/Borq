
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

function userInput() {
	var input = $("#RealTextbox").val();
	var selectInput = input.split (' ');
	var firstAction = selectInput[1];
	var secondAction = selectInput[2];
	
}




	

 

