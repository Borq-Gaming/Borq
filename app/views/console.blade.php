@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">

@stop

@section('content')

<div id="borq_image">
	<img src="/images/Borq.png" width="300" height="75" alt="borq logo"/>
</div>

<div class="container col-sm-12">
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
	 <a href="{{{ action('HomeController@startGame') }}}"><button class="btn btn-success" >START</button></a>
</div>


@stop

@section('script')
<script src="/js/textbox.js"></script>

<script>
$.get('home/health').done(function(data) {
			console.log('health = ' + data); // <== just a debug test
		    $( "#health_bar" ).progressbar({
		      value: 5,
		      max:10
		    });
		  });
$('#RealTextbox').keyup(function(e) {
	var code = (e.keyCode ? e.keyCode : e.which);
	// Enter key
	if(code == 13) {
// Location Display
		$.get('move/index').done(function(data) {
			console.log(data);	
			$('#current_location').val(data.display_name);

			var items = data.objects;
			console.log(items);

			var items_array = items.split(', ');

			items_array.forEach(function (element, index, array) {
		
				var image_path = '/images/' + element + '.png';
				console.log(image_path);
				$('#items').append("");
				$('#items').append('<img src="' + image_path + ' " width="25px" height="25px"/> &nbsp;');
			});
		});
// Health Display
		$.get('home/health').done(function(data) {
			console.log('health = ' + data); // <== just a debug test
		    $( "#health_bar" ).progressbar({
		      value: data * 10
		    });
		  });


// Items Display
		// $.get('home/items').done(function(data) {
		// 	console.log(data);
		// 	// var items = ['sword', 'armor', 'key', 'lantern', 'apple', 'bread', 'wine', 'potion_invisibility', 'potion_strength', 'potion_regeneration', 'gown', 'note', 'crown']


		// 	});
		// }); 

	} // end of keyup listener
});
</script>

@stop