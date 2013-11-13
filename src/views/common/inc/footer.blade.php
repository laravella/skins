@section('footer')
<div class="container" id="footer">
	<small>
			<a style="color:#c0c0c0" href="http://laravella.github.io/docs/">laravella</a> @if (isset($view) && !is_null($view) && isset($view->name)) [{{$view->name}}] @endif
	</small>
</div><!-- End #footer -->
@stop