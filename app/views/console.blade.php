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
				<div id="health" class="col-sm-4">
					<label class="form-group" name="health">Health</label>
					<div id="health_bar"></div>
				</div>

				<div id="location" class="col-sm-4">
					<label class="form-group" name="location">Location</label>
					<input id="current_location" disabled>

				</div>

				<div id="items" class="col-sm-4">
					<label class="form-group" name="items">Inventory</label>

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

<!-- <div class="row">
<button type="button" class="btn btn-lg btn-primary" disabled="disabled" id="health">Health</button>
<button type="button" class="btn btn-lg btn-primary" disabled="disabled" id="items">Items</button>
</div> -->
	



@stop

@section('script')
<script src="/js/textbox.js"></script>

<script>

// Display current location
$.get('/move').done(function(data) {
	console.log(data);
	// $('#current_location').val(data.display_name);

});


// healthbar

$.get('/home').done(function(data) {
	console.log(data);
    // $( "#health_bar" ).progressbar({
    //   value: 37
});
// });
</script>

@stop