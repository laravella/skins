@extends(Options::get('skin').'.default')
@include(Options::get('skin').'.inc.navbar')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

@section('content')
<h1>Laravella</h1>
@stop
