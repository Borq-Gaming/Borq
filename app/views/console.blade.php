@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">

@stop

@section('content')

<div id="borq_image">
	<img src="/images/Borq.png" width="300" height="75" alt="borq logo"/>
</div>

<div class="container col-sm-12" id="game_box" style="display:none;">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-3 col-md-6 col-md-offset-3">

			<div class="row">
				<div id="location" class="col-sm-7">
					<label class="label" id="location_label" for="location">Location</label></br>
					<input id="current_location" disabled>
				</div>

				<div id="health" class="col-sm-4">
					<label class="label" for="health">Health</label>
					<div id="health_bar"></div>
				</div>

			</div>



			<div class='row'>
				<div class='form-group col-sm-12'>
					<div name="items" for="items">
						<label class="label" class="form-group" id="item_label" name="items">Inventory</label>
						<div id='items'>
						</div>
					</div>
				</div>
			</div>

			<!--  Console Text Box -->
			<div id="console_outer">
				<div id="text_wrapper">
					<div ng-controller="textController">
						<div id="textBox">

							<div id="PastCommands"></div>
								> <span id="FakeTextbox"></span><span id="Score">_</span>
									<input type="text" id="RealTextbox"/>
						</div>
					</div>
				</div>
			</div> <!-- end of console -->
		</div>
	</div>
</div>

<div class="form-group">
	 {{-- <a href="{{{ action('HomeController@startGame') }}}"><button class="btn btn-success" id="start" >START</button></a> --}}

	 <button class="btn btn-success" id="start" >START</button>
</div>


@stop

@section('script')
<script src="/js/textbox.js"></script>

<script>

// Unhide game_box
$('#start').click(function(){
	$('#game_box').toggle(1000);
	$('#start').prop('disabled', true);
	$('#start').animate({opacity: 0}, 750);

});

$.get('home/health').done(function(data) {
			console.log('health = ' + data); // <== just a debug test
		    $( "#health_bar" ).progressbar({
		      value: 10,
		      max:10
		    });
		  });
$('#RealTextbox').keyup(function(e) {
	var code = (e.keyCode ? e.keyCode : e.which);
	// Enter key
	if(code == 13) {

	// Display Functions
		$.get('move/index').done(function(data) {
			console.log(data);	
			// Display Name
			$('#current_location').val(data.display_name);

			// Background Image Display
			var background_image = 'url(/' + data.image + ')';
			$('body').css('background-image', background_image);
		});

		// Item Icon Display
		$.get('home/items').done(function(data) {
			console.log(data);

			$('#items').empty();

			if (data.key == 1) {
				$('#items').append('<img src="/images/key.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.sword == 1) {
				$('#items').append('<img src="/images/sword.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.armor == 1) {
				$('#items').append('<img src="/images/armor.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.lantern == 1) {
				$('#items').append('<img src="/images/lantern.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.apple == 1) {
				$('#items').append('<img src="/images/apple.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.bread == 1) {
				$('#items').append('<img src="/images/bread.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.wine == 1) {
				$('#items').append('<img src="/images/wine.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.note == 1) {
				$('#items').append("");
				$('#items').append('<img src="/images/note.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.gown == 1) {
				$('#items').append('<img src="/images/gown.png"' + '" width="25px" height="25px"/> &nbsp;');
			}

			if (data.crown == 1) {
				$('#items').append('<img src="/images/crown.png"' + '" width="25px" height="25px"/> &nbsp;');
			}
		}); // end of item display

	// Health Display
		$.get('home/health').done(function(data) {
			console.log('health = ' + data); // <== just a debug test
		    $( "#health_bar" ).progressbar({
		      value: data * 10
		    });
		  });

	} // end of keyup listener
});
</script>

@stop