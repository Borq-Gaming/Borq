@extends('layout.master')

@section('style')
<link rel="stylesheet" href="/css/textbox.css">
@stop

@section('content')

<div class="container well">
	<div class="col-md-9 col-md-offet-2" id='console'>
		<div ng-controller="textController">
			<div id="textBox">
				<div id="PastCommands"></div>
					<span id="FakeTextbox"></span><span id="Score">>> </span>
						<input type="text" id="RealTextbox" />
			</div>
		</div>
	</div>
</div>

@stop

@section('script')
<script src="/js/textbox.js"></script>
@stop