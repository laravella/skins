@section('keyedit_detail')
    <!-- start// common.inc.keyedit_detail -->
    @foreach ($records as $recNo=>$record) 
    
        @include('skins::common.inc.keyedit_detail_row')
        
    @endforeach
    <!-- end// common.inc.keyedit_detail -->
@stop