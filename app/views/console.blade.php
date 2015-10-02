@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">
@stop

@section('content')

<div id="borq_image">
	<img src="/images/Borq.png" alt="borq logo"/>
</div>


<div id="instructions">
	<a href="" span style="cursor: pointer" id="myModal2">
	<img src="/images/instructions.png">
	</a></span>
</div>


<div class="container col-sm-12" id="game_box" style="display: none;">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 col-md-offset-3 col-md-6 col-md-offset-3">

			<div class="row">
				<div id="location" class="col-sm-6">
					<div id="label_location">
					<img src="/images/location4.png" width="225" height="55"/>
					</div>
					<!-- <label class="label" id="location_label" for="location">Location</label></br> -->
					<input id="current_location" disabled>
				</div>

				<div id="health" class="col-sm-6">
					<div id="label_health">
						<img src="/images/health4.png" width="225" height="50"/>
					</div>
					<!-- <label class="label" for="health">Health</label> -->
					<div id="health_bar"></div>
				</div>

			</div>

			<div class='row'>
				<div class='form-group col-sm-12'>
					<div name="items" for="items">
						<div id="label_items">
						<img src="/images/inventory4.png" width="225" height="55" />
						</div>
						<!-- <label class="label" class="form-group" id="item_label" name="items">Inventory</label> -->
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
									<input type="text" id="RealTextbox" autofocus>
						</div>
					</div>
				</div>
			</div> <!-- end of console -->
		</div>
	</div>
</div>

<div class="form-group container">
	<div id="start_container">	
		<a type="submit" id="start"><img src="/images/shield1 copy.png" width="300" height="300"/></a>
	</div>
	 <!-- <button class="btn btn-success" id="start">START</button> -->
</div>


	

<div style="display: none;" id="grabMe">
	<strong>Objective:</strong> Explore your way through the castle and steal the king's crown.<br>
	<br>
	<strong>Commands</strong><br>
	<strong>Hit</strong> - When you encounter a guard and wish to engage simply type the command "hit guard" <br>
	<strong>Use</strong> - When you have an item is available for use type command "use [item] on [thing] (e.g. use key on door)"<br>
	<strong>Eat</strong> - When food is available in your items type command "eat [food] (e.g. eat apple)"<br>
	<strong>Move</strong> - To make your way through the castle type command "move [direction]" (e.g. move north)<br>
	<strong>Take</strong> - To add an item to your inventory type command "take [item]" (e.g. take crown)<br>
</div>


@stop

@section('script')
<script src="/js/textbox.js"></script>

<script>

$(document).ready(function() {
	// REVISED INSTRUCTION MODAL AS AN IMAGE
	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});
	// Instruction Modal
	var myModal2;
	myModal2 = $('#myModal2').jBox('Modal', {

		title: 'Instructions',
		content: $('#grabMe')
	});
	
	// Start Game animation
	$('#start').click(function(){
		$('#game_box').toggle(1000);
		$.get('/start').done(function() {
			console.log('Game Started');
		});
		$('#start').prop('disabled', true);
		$('#start').animate({opacity: 0}, 750);
		$('#start').hide();

	});

});

</script>

@stop

@section('footer')
<footer class="footer">
	<div class="container">
		<a href="https://github.com/Borq-Gaming/borq.dev">
		<img src="/images/about.png">
		</a>
	</div>
</footer>
@stop