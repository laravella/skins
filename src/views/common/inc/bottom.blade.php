{{-- bottom of page --}}
@section('bottom')
<!-- start// skins::common.inc.bottom -->
    @if(Options::get('debug'))
    <textarea style="display:none" id="inputJSON"><?php print_r($params); ?></textarea>
    @endif
<!-- end// skins::common.inc.bottom -->
@stop
