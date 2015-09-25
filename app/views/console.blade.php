@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">
@stop

@section('content')

<div class="container">
	<div class="col-md-9 col-md-offet-2" id='console'>
	
		<div ng-controller="textController">
			<div id="textBox">
				<div id="PastCommands"></div>
					<span id="FakeTextbox"></span><span id="Score">__</span>
						<input type="text" id="RealTextbox" />
			</div>
		</div>
	</div>
<!-- <div class="row">
<button type="button" class="btn btn-lg btn-primary" disabled="disabled" id="health">Health</button>
<button type="button" class="btn btn-lg btn-primary" disabled="disabled" id="items">Items</button>
</div> -->
	

</div>

@stop

@section('script')
<script src="/js/textbox.js"></script>
@stop