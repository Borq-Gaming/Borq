<style>
#RealTextbox {
	position: relative;
	left: -5000px;
}

#textBox {
	width: 35%;
	height: 35%;
	position: relative;
	margin: auto;
	top:200px;
}
</style>
	<div id="textBox">
	<div id="PastCommands"></div>
	<span id="FakeTextbox"></span><span id="Score">_</span>
	<input type="text" id="RealTextbox" />
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script scr="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
<script>
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
</script>