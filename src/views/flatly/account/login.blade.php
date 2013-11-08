@extends(Options::get('skin').'.default')

@include(Options::get('skin').".inc.assets")
@include(Options::get('skin').".inc.title")
@include(Options::get('skin').".inc.extra_head")
@include(Options::get('skin').'.inc.navbar')

{{-- Web site Title --}}
@section('title')
@parent
:: Account Login
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Login into your account</h1>
</div>
<form method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="csrf_token" id="csrf_token" value="{{ Session::getToken() }}" />

	<!-- Email -->
	<div class="control-group {{ $errors->has('email') ? 'error' : '' }}">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" name="email" id="email" value="{{ Input::old('email') }}" />
			{{ $errors->first('email', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ email -->

	<!-- Password -->
	<div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
		<label class="control-label" for="password">Password</label>
		<div class="controls">
			<input type="password" name="password" id="password" value="" />
			{{ $errors->first('password', '<span class="help-inline">:message</span>') }}
		</div>
	</div>
	<!-- ./ password -->

	<!-- Login button -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn">Login</button>
		</div>
	</div>
	<!-- ./ login button -->
</form>
@stop
