@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">

@stop

@section('content')

<div id="borq_image">
	<img src="/images/Borq.png" width="300" height="75" alt="borq logo"/>
</div>

<div id="instructions">
	<a href="" span style="cursor: pointer" id="myModal2">
	<img src="/images/scroll-paper-parchment-border-background-leather copy.png" width="250" height="75"/>
	</a></span>
</div>

<div class="container col-sm-12" id="game_box" style="display: none;">
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
						<div id='items'></div>
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
<<<<<<< HEAD
	 <!-- <a href="{{{ action('HomeController@start') }}}" ><button class="btn btn-success" id="start">START</button></a> -->
	 <a href="{{{ action('HomeController@start') }}}">
	 <img id="shield" height="125" width="125" src="/images/shield1 copy.png">
	 </a>
	 <!-- <img height="125" width="125" src="/images/shield2.jpg"><br>
	 <img height="125" width="125" src="/images/shield3.jpeg">
	 <img height="125" width="125" src="/images/shield4.jpg">
	 <img height="125" width="125" src="/images/shield5.jpg"> -->
</div>

<div style="display: none" id="grabMe">
<strong>Move:</strong> To make your way through the castle type command "move +<br>
North, South, East or West" <br><br>
<strong>Hit:</strong> When you encounter a guard and wish to engage, simply type the command "hit" <br><br>
<strong>Use:</strong> When you have an item that is available for use, type the command "use + the item name"<br><br>
<strong>Eat:</strong> When food is available in your items type the command "eat + the item name"<br><br>
<strong>Take:</strong> To add an item to your inventory type command "take + item name"<br><br>
=======

	 <button class="btn btn-success" id="start">START</button>
	
</div>

<div style="display: none;" id="grabMe">
	<strong>Hit:</strong> When you encounter a guard and wish to engage simply type the command "hit" <br><br>
	<strong>Use:</strong> When you have an item is available for use type command "use + the item name"<br><br>
	<strong>Eat:</strong> When food is available in your items type command "eat + the item name"<br><br>
	<strong>Move:</strong> To make your way through the castle type command "move +"<br>
	North, South, East or West <br><br>
	<strong>Take:</strong> To add an item to your inventory type command "take" + item name<br><br>
>>>>>>> a0f31b545e26b2c657b16ecb63a3d31a60bebbe0
</div>


@stop

@section('script')
<script src="/js/textbox.js"></script>

<script>


// Unhide game_box
<<<<<<< HEAD
// $('#start').click(function(){
// 	$('#game_box').toggle(1000);
// 	$('#start').prop('disabled', true);
// 	$('#start').animate({opacity: 0}, 750);

// });

$.get('home/health').done(function(data) {
			console.log('health = ' + data); // <== just a debug test
		    $( "#health_bar" ).progressbar({
		      value: 10,
		      max:10
		    });
		  });

=======
>>>>>>> a0f31b545e26b2c657b16ecb63a3d31a60bebbe0
$(document).ready(function() {
	// Instruction Modal
	var myModal2;
	myModal2 = $('#myModal2').jBox('Modal', {

		title: 'Guide your way through the palace to steal the king crown using these available commands!',
		content: $('#grabMe'),
	});
	
	// Start Game animation
	$('#start').click(function(){
		$('#game_box').toggle(1000);
		$.get('/start').done(function() {
			console.log('Game is Started');
		});
		$('#start').prop('disabled', true);
		$('#start').animate({opacity: 0}, 750);

	});

	// Health Bar
	$.get('home/health').done(function(data) {
	    $( "#health_bar" ).progressbar({
	      value: 10,
	      max:10
	    });
	 });


	// Game Actions and Display Results
	// TIMOTHY -->
	// TODO:  move locationDisplay(), imageDisplay(), itemDisplay(), to keyListener function

	$('#RealTextbox').keyup(function(e) {
		var code = (e.keyCode ? e.keyCode : e.which);
		// Enter key
		if(code == 13) {

		// Display Functions
		var locationDisplay = function() {
			$.get('move/index').done(function(data) {
			console.log(data);	
			// Display Name
			$('#current_location').val(data.display_name);

		// Background Image Display
		var imageDisplay = function() {
				var background_image = 'url(/' + data.image + ')';
				$('body').css('background-image', background_image);
				});
			};
		};

		// Item Icon Display
		var itemDisplay = function() {
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
		};
		
		} // end of keyup listener
	});
});

</script>

@stop

@section('footer')
<div id="footer">
	<a href="https://github.com/Borq-Gaming/borq.dev">
	<img src="/images/Borq-Gaming.png">
	</a>
</div>
@stop