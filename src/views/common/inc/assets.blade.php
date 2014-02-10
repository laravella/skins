@section('assets_css')

<!-- CSS -->
@foreach($assets as $asset)
    @if($asset['type'] == 'styles')
    <link rel="stylesheet" href="/packages/{{$skin['vendor']}}/{{$skin['package']}}/{{$skin['name']}}/{{$asset['url']}}">
    @endif
@endforeach
@stop

@section('assets_js')		
<!-- JS -->
    @foreach($assets as $asset)
        @if($asset['type'] == 'scripts' & $asset['position'] == 'top')
        <script type="text/javascript" src="/packages/{{$skin['vendor']}}/{{$skin['package']}}/{{$skin['name']}}/{{$asset['url']}}"></script>
        @endif
    @endforeach
@stop

@section('assets_bottom')
<!-- JS -->
@foreach($assets as $asset)
    @if($asset['type'] == 'scripts' & $asset['position'] == 'bottom')
    <script type="text/javascript" src="/packages/{{$skin['vendor']}}/{{$skin['package']}}/{{$skin['name']}}/{{$asset['url']}}"></script>
    @endif
@endforeach
@stop
